<?php
	if(isset($_POST['employee'])){
		$output = array('error'=>false);

		include 'includes/comfig.php';
		include 'timezone.php';

		$employee = $_POST['employee'];
		$status = $_POST['status'];

		$sql = "SELECT * FROM employee_info WHERE emp_id = '$employee'";
		$query = $db->query($sql);

		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			$id = $row['emp_id'];

			$date_now = date('Y-m-d');

			if($status == 'in'){
				$sql = "SELECT * FROM attendances WHERE employee_id = '$id' AND date = '$date_now' AND time_in IS NOT NULL";
				$query = $db->query($sql);
				if($query->num_rows > 0){
					$output['error'] = true;
					$output['message'] = 'You have timed in for today';
				}
				else{
					//updates
					$sched = $row['schedules_id'];
					$lognow = date('H:i:s');
					$sql = "SELECT * FROM schedules WHERE id = '$sched'";
					$squery = $db->query($sql);
					$srow = $squery->fetch_assoc();
					$logstatus = ($lognow > $srow['time_in']) ? 0 : 1;
					//
					$sql = "INSERT INTO attendances (employee_id, date, time_in, status) VALUES ('$id', '$date_now', NOW(), '$logstatus')";
					if($db->query($sql)){
						$output['message'] = 'Time in: '.$row['First_name'].' '.$row['Last_name'];
					}
					else{
						$output['error'] = true;
						$output['message'] = $db->error;
					}
				}
			}
			// else{
			// 	$sql = "SELECT attendances.id AS uid FROM attendances LEFT JOIN employee_info ON employee_info.Id=attendances.employee_id WHERE attendances.employee_id = '$id' AND date = '$date_now'";
			// 	$query = $db->query($sql);
			// 	if($query->num_rows < 1){
			// 		$output['error'] = true;
			// 		$output['message'] = 'Cannot Timeout. No time in.';
			// 	}
			// 	else{
			// 		$row = $query->fetch_assoc();
			// 		if($row['time_out'] != '00:00:00'){
			// 			$output['error'] = true;
			// 			$output['message'] = 'You have timed out for today';
			// 		}
			// 		else{
						
			// 			$sql = "UPDATE attendances SET time_out = NOW() WHERE id = '".$row['uid']."'";
			// 			if($db->query($sql)){
			// 				$output['message'] = 'Time out: '.$row['First_name'].' '.$row['Last_name'];

			// 				$sql = "SELECT * FROM attendances WHERE id = '".$row['uid']."'";
			// 				$query = $db->query($sql);
			// 				$arow = $query->fetch_assoc();

			// 				$time_in = $arow['time_in'];
			// 				$time_out = $arow['time_out'];

			// 				$sql = "SELECT * FROM employee_info LEFT JOIN schedules ON schedules.id=employee_info.schedules_id WHERE employee_info.id = '$id'";
			// 				$query = $db->query($sql);
			// 				$srow = $query->fetch_assoc();

			// 				if($srow['time_in'] > $arow['time_in']){
			// 					$time_in = $srow['time_in'];
			// 				}

			// 				if($srow['time_out'] < $arow['time_in']){
			// 					$time_out = $srow['time_out'];
			// 				}

			// 				$time_in = new DateTime($time_in);
			// 				$time_out = new DateTime($time_out);
			// 				$interval = $time_in->diff($time_out);
			// 				$hrs = $interval->format('%h');
			// 				$mins = $interval->format('%i');
			// 				$mins = $mins/60;
			// 				$int = $hrs + $mins;
			// 				if($int > 4){
			// 					$int = $int - 1;
			// 				}

			// 				$sql = "UPDATE attendances SET total_work_hour = '$int' WHERE id = '".$row['uid']."'";
			// 				$db->query($sql);
			// 			}
			// 			else{
			// 				$output['error'] = true;
			// 				$output['message'] = $db->error;
			// 			}
			// 		}
					
			// 	}
			// }
		 }
		// else{
		// 	$output['error'] = true;
		// 	$output['message'] = 'Employee ID not found';
		// }
		
	}
	
	echo json_encode($output);

?>