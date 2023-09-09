<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!-- loader-->
	  <link href="assets/css/pace.min.css" rel="stylesheet">
	  <script src="assets/js/pace.min.js"></script>
    <!--Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="assets/css/extra-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">
    <link href="assets/css/semi-dark-theme.css" rel="stylesheet">
    <link href="assets/css/minimal-theme.css" rel="stylesheet">
    <link href="assets/css/shadow-theme.css" rel="stylesheet">
     
  </head>
  <body>

   <!--start header-->
   <?php require_once("includes/topbar.php"); ?>
   <!--end header-->


   <!--start sidebar-->
    <?php require_once("includes/sidebar.php"); ?>
   <!--end sidebar-->


    <!--start main content-->
     <main class="page-content">
      
        <!--start email wrapper-->
				<div class="email-wrapper">
					<div class="email-sidebar">
						<div class="email-sidebar-header d-grid"> <a href="javascript:;" class="btn btn-primary compose-mail-btn"><i class='bx bx-plus me-2'></i> Compose</a>
						</div>
						<div class="email-sidebar-content">
							<div class="email-navigation">
								<div class="list-group list-group-flush"> <a href="app-emailbox.php" class="list-group-item active d-flex align-items-center"><i class='bx bxs-inbox me-3 font-20'></i><span>Inbox</span><span class="badge bg-primary rounded-pill ms-auto">7,513</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-star me-3 font-20'></i><span>Starred</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-alarm-snooze me-3 font-20'></i><span>Snoozed</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-send me-3 font-20'></i><span>Sent</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-file-blank me-3 font-20'></i><span>Drafts</span><span class="badge bg-primary rounded-pill ms-auto">4</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-bookmark me-3 font-20'></i><span>Important</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-message-rounded-error me-3 font-20'></i><span>Chats</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bx-mail-send me-3 font-20'></i><span>Scheduled</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-envelope-open me-3 font-20'></i><span>All Mail</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-info-circle me-3 font-20'></i><span>Spam</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-trash-alt me-3 font-20'></i><span>Trash</span></a>
								</div>
							</div>
							<div class="email-meeting">
								<div class="list-group list-group-flush">
									<div class="list-group-item"><span>Meet</span>
									</div> <a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-video me-3 font-20'></i><span>Start a meeting</span></a>
									<a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-group me-3 font-20'></i><span>Join a meeting</span></a>
									<div class="list-group-item email-hangout cursor-pointer border-top">
										<div class="d-flex align-items-center">
											<div class="chat-user-online">
												<img src="assets/images/avatars/01.png" width="42" height="42" class="rounded-circle" alt="">
											</div>
											<div class="flex-grow-1 ms-2">
												<p class="mb-0">Jessica Doe</p>
											</div>
											<div class="dropdown">
												<div class="font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class='bx bx-plus'></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end">	<a class="dropdown-item" href="javascript:;">Settings</a>
													<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Help & Feedback</a>
													<a class="dropdown-item" href="javascript:;">Enable Split View Mode</a>
													<a class="dropdown-item" href="javascript:;">Keyboard Shortcuts</a>
													<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Sign Out</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="email-header d-xl-flex align-items-center">
						<div class="d-flex align-items-center">
							<div class="email-toggle-btn"><i class='bx bx-menu'></i>
							</div>
							<div class="btn btn-white">
								<input class="form-check-input" type="checkbox">
							</div>
							<div class="">
								<button type="button" class="btn btn-white ms-2"><i class='bx bx-refresh me-0'></i>
								</button>
							</div>
							<div class="">
								<button type="button" class="btn btn-white ms-2"><i class='bx bx-downvote me-0'></i>
								</button>
							</div>
							<div class="d-none d-md-flex">
								<button type="button" class="btn btn-white ms-2"><i class='bx bx-file me-0'></i>
								</button>
							</div>
							<div class="">
								<button type="button" class="btn btn-white ms-2"><i class='bx bx-trash me-0'></i>
								</button>
							</div>
						</div>
						<div class="flex-grow-1 mx-xl-2 my-2 my-xl-0">
							<div class="input-group">	<span class="input-group-text bg-transparent"><i class="bx bx-search"></i></span>
								<input type="text" class="form-control" placeholder="Search mail">
							</div>
						</div>
						<div class="ms-auto d-flex align-items-center">
							<button class="btn btn-sm btn-light">1-50 of 8,740</button>
							<button class="btn btn-white px-2 ms-2"><i class='bx bx-chevron-left me-0'></i>
							</button>
							<button class="btn btn-white px-2 ms-2"><i class='bx bx-chevron-right me-0'></i>
							</button>
						</div>
					</div>
					<div class="email-content">
						<div class="">
							<div class="email-list">
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Wordpress</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">It is a long established fact that a reader will be distracted by the readable...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">5:56 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Locanto</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">5:45 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Facebook</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, majority suffered...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">4:32 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Alex Xender</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">4:25 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Alisha Mastana</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">4:18 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Synergy Technology</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">If you are going to use a passage of Lorem Ipsum, you need to be sure there...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">3:56 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Robina Consultant</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">3:43 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>HCl Technologies</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Bonorum et Malorum" by Cicero are also reproduced in their exact original form...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">2:25 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Tata India</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">But I must explain to you how all this mistaken idea of denouncing pleasure...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">2:14 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Jessica Jhons</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">1:30 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Anaxa Marvel</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">1:15 PM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Maxwell Linga</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">12:45 AM</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Cricket India</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Oct 25</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Start Sports Australia</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Oct 22</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Diana Dating Services</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Oct 18</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Himalaya India</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Oct 10</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>NASA USA</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Sep 28</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Indeed Jobs</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Content here, content here', making it look like readable English...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Sep 22</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Wordfence</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Various versions have evolved over the years, sometimes by accident...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Sep 18</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>DocsApp India</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">But I must explain to you how all this mistaken idea of denouncing pleasure...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Sep 12</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Alex ReliableSoft</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Sep 02</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Ryan Robinson</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Business it will frequently occur that pleasures have to be repudiated...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Aug 22</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>TechGig Job Alert</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Aug 18</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1 bg-light">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Paytm India</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Jul 27</p>
										</div>
									</div>
								</a>
								<a href="app-emailread.html">
									<div class="d-md-flex align-items-center email-message px-3 py-1">
										<div class="d-flex align-items-center email-actions">
											<input class="form-check-input" type="checkbox" value=""> <i class='bx bx-star font-20 mx-2 email-star'></i>
											<p class="mb-0"><b>Uber America</b>
											</p>
										</div>
										<div class="">
											<p class="mb-0">Chunks as necessary, making this the first true generator on the Internet...</p>
										</div>
										<div class="ms-auto">
											<p class="mb-0 email-time">Jul 24</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!--start compose mail-->
					<div class="compose-mail-popup">
						<div class="card">
							<div class="card-header bg-dark text-white py-2 cursor-pointer">
								<div class="d-flex align-items-center">
									<div class="compose-mail-title">New Message</div>
									<div class="compose-mail-close ms-auto">x</div>
								</div>
							</div>
							<div class="card-body">
								<div class="email-form">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="To">
									</div>
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Subject">
									</div>
									<div class="mb-3">
										<textarea class="form-control" placeholder="Message" rows="10" cols="10"></textarea>
									</div>
									<div class="mb-0">
										<div class="d-flex align-items-center">
											<div class="">
												<div class="btn-group">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
													</button>
													<div class="dropdown-menu">	<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
														<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
													</div>
												</div>
											</div>
											<div class="ms-2">
												<button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-text-format"></i>
												</button>
												<button type="button" class="btn border-0 btn-sm btn-white"><i class='bx bx-link-alt'></i>
												</button>
												<button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-emoji-tounge"></i>
												</button>
												<button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-google-drive"></i>
												</button>
											</div>
											<div class="ms-auto">
												<button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-trash"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					 </div>
					</div>
					<!--end compose mail-->
          <!--start email overlay-->
					<div class="overlay email-toggle-btn-mobile"></div>
					<!--end email overlay-->
        
     </main>
     <!--end main content-->
 

    <!--start overlay-->
      <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->

    <!-- Search Modal -->
    <div class="modal" id="exampleModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header gap-2">
            <div class="position-relative popup-search w-100">
              <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
              <span class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
            </div>
            <button type="button" class="btn-close d-xl-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="search-list">
                 <p class="mb-1">Html Templates</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2"><i class="bi bi-filetype-html fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-award fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-box2-heart fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-camera-video fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Web Designe Company</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-chat-right-text fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cloud-arrow-down fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-columns-gap fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-collection-play fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Software Development</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cup-hot fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-droplet fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-exclamation-triangle fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-eye fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Online Shoping Portals</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-facebook fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-flower2 fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-geo-alt fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-github fs-5"></i>eCommerce Html Templates</a>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>


    <!--start theme customization-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="ThemeCustomizer" aria-labelledby="ThemeCustomizerLable">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ThemeCustomizerLable">Theme Customizer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
          <label class="form-check-label" for="LightTheme">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2" checked="">
          <label class="form-check-label" for="DarkTheme">Dark</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
          <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
          <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme" value="option4">
          <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
        </div>
       
      </div>
    </div>
    <!--end theme customization-->

   <!--plugins-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
   <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
   <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>

   <script>
		 new PerfectScrollbar('.email-navigation');
		 new PerfectScrollbar('.email-list');
	</script>

    <!--BS Scripts-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>