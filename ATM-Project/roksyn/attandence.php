<?php session_start() ?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRM</title>
    <link href="img/icon.jpg" rel="icon">

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!--Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">
     
  </head>
  <body>

  <!--start header-->
  <?php require_once("includes/topbar.php"); ?>
    <!--end header-->


    <!--start sidebar-->
     <?php require_once("includes/sidebar.php"); ?>
    <!--end sidebar-->


    <!--authentication-->
    <main class="page-content">
      <div class="container-fluid my-5">
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Attendence Modules</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                  <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Attendence Process</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
              <div class="card border-3">
                <div class="card-body p-5">
                    <img src="img/icon.jpg" class="mb-4" width="45" alt="">
                    <h4 class="fw-bold">Get Started Now</h4>
                    
                    <div class="login-logo">
                      <p id="date"></p>
                      <p id="time" class="bold"></p>
                    </div>
                    

                    <div class="form-body mt-4" ">
                      <form class="row g-3 id="attendance" method="post">
                        <div class="form-group has-feedback col-12">
                          <label for="inputUsername" class="form-label">employee ID</label>
                          <input type="text" class="form-control" id="employee" name="employee" placeholder="Enter your employee id" required>
                        </div>
                        
                        <div class="col-12">
                          <label for="inputSelectCountry" class="form-label">In-time or Out-time</label>
                          <select class="form-control" name="status"  aria-label="Default select example">
                            <option selected="disable">Select one</option>
                            <option value="1">In-time</option>
                            <option value="2">Out-time</option>
                            
                          </select>
                        </div>
                        <div class="col-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                          <button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i>Submit</button>
                          </div>
                        </div>
                        
                      </form>
                    </div>
                    <div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
                    </div>
                    <div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
                    </div>
                </div>
              </div>
            </div>
          </div><!--end row-->
      </div>
     </main>
      
    <!--authentication-->




    <!--plugins-->
    <script src="assets/dist/jquery.min.js"></script>
    <script src="assets/dist/moment.js"></script>

    <script type="text/javascript">
        $(function() {
          var interval = setInterval(function() {
            var momentNow = moment();
            $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
            $('#time').html(momentNow.format('hh:mm:ss A'));
          }, 100);

          $('#attendance').submit(function(e){
            e.preventDefault();
            var attendance = $(this).serialize();
            $.ajax({
              type: 'POST',
              url: 'atten.php',
              data: attendance,
              // dataType: 'json',
              success: function(response){
                if(response.error){
                  $('.alert').hide();
                  $('.alert-danger').show();
                  $('.message').html(response.message);
                }
                else{
                  $('.alert').hide();
                  $('.alert-success').show();
                  $('.message').html(response.message);
                  $('#employee').val('');
                }
              }
            });
          });
            
        });
</script>
  
  </body>
</html>