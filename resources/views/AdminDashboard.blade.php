<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MQuest-AdminSide</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,800&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="wrapper">
        <nav class="sidebar hidden open">

            <!-- Sidebar Navigation -->
            <div class="w-100 sidebar-content">
                <div class="d-flex w-100 h-100 flex-column justify-content-center scrollbar-container"><a class="text-decoration-none text-center d-flex justify-content-center align-items-center gap-1 py-2 sidebar-brand" href="#"><span class="text-uppercase fs-5 fw-bold text-black p-2 me-3 align-middle">MQUEST</span></a>
                    <p class="text-center text-muted mb-3 mx-2 sidebar-subtitle" style="font-size: 16px;">A Matatag E-Learning Application</p>
                    <ul class="list-unstyled position-relative w-100 sidebar-nav" id="sidebarMenu">
                        <li class="text-muted sidebar-header" style="width: 24px;color: var(--bs-emphasis-color);">Menu</li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link active-link" href="#" data-section="dashboardSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid" style="font-family: Poppins, sans-serif;">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                                </svg><span class="text-decoration-none align-middle">Dashboard</span></a></li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link" href="#subject-list" data-bs-toggle="collapse" aria-expanded="false" role="button" aria-controls="subject-list" data-section="lessonSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookmark">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"></path>
                                </svg><span class="text-decoration-none align-middle">Curriculum &amp; Lessons</span></a>
                            <ul class="list-unstyled sidebar-dropdown collapse" id="subject-list" data-bs-parent="#sidebarMenu">
                                <li class="dropdown-item"><a class="sidebar-link nav-link" href="#" data-page="English.html">English</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#" data-page="Science.html">Science</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#" data-page="Math.html">Mathematics</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#" data-page="Filipino.html">Filipino</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link" href="#" data-section="userSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                </svg><span class="text-decoration-none align-middle">User Management</span></a></li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link" href="#" data-section="activitylogSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock-history">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"></path>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"></path>
                                </svg><span class="text-decoration-none align-middle">Activity Log</span></a></li>
                        <li class="sidebar-header" style="width: 24px;color: var(--bs-emphasis-color);">General</li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="dashboardMenu1" data-bs-toggle="collapse" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg><span class="text-decoration-none align-middle">Settings</span></a></li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="dashboardMenu1" data-bs-toggle="collapse" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-question-circle">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"></path>
                                </svg><span class="text-decoration-none align-middle">Help</span></a></li>
                    </ul>
                </div>
                <div class="p-4 mt-auto sidebar-item sidebar-footer border-top">
                    <div class="d-flex align-items-center"><img class="rounded-circle img-fluid me-2 admin-img" width="200" height="200" src="assets/img/8.png">
                        <div class="d-flex flex-column admin-profile">
                            <h6 class="fw-semibold mb-1">Chris Evan</h6><small class="text-muted mb-1 fw-medium">example@gmail.com</small><small class="text-muted">Administrator</small>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="content-area" class="main-content full-width">
            <nav class="d-flex justify-content-between align-items-center p-4 navbar-main navbar navbar-expand navbar-light"><span class="fs-4 d-flex align-items-center sidebar-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-justify active" id="toggle">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"></path>
                    </svg></span>
                <form class="d-sm-inline-block ps-4" inline="true">
                    <div class="input-group-navbar input-group search-bar"><input class="form-control" type="text" placeholder="Search here..." aria-label="Search"><button class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                            </svg></button></div>
                </form>

                <!-- Notification & Profile Dropdown -->
                <div class="navbar-collapse collapse">
                    <div class="ms-auto navbar-align navbar-nav">
                        <div class="position-relative d-flex me-2 nav-item dropdown"><a class="d-flex align-items-center nav-link nav-icon dropdown-toggle bell" id="element" aria-expanded="false" data-bs-toggle="dropdown">
                                <div class="position-relative"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6"></path>
                                    </svg><span class="indicator">4</span></div>
                            </a>
                            <div class="p-0 dropdown-menu-lg dropdown-menu dropdown-menu-end" data-bs-popper="static">
                                <div class="text-start position-relative w-100 p-3 dropdown-menu-header"><span>3 New Notifications</span></div>
                                <div class="d-flex list-group g-5 notification-list"><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/1.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">15m ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/10.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">30m ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/11.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">1hr ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/9.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">1hr ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/12.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">1hr ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div><a class="text-decoration-none" href="#">
                                    <div class="text-center position-relative w-100 dropdown-menu-footer"><span>Show All Notifications</span></div>
                                </a>
                            </div>
                            <div class="nav-item dropdown nav-item-user"><span class="d-inline-block d-sm-none nav-icon"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="rounded-circle" width="200" height="200" style="height: 28px; width: 28px; object-fit: cover;" src="assets/img/8.png"></a></span><span class="d-none d-sm-inline-block nav-icon"><a class="nav-link dropdown-toggle" href="#" aria-expanded="false" role="button" data-bs-toggle="dropdown"><img class="rounded-circle img-fluid me-1 profile" width="32" height="32" src="assets/img/8.png" alt="Profile"><span style="font-size: 14px;">Chris Evans</span></a></span>
                                <div class="dropdown-menu dropdown-menu3 dropdown-menu-end" data-bs-popper="static" style="width:180px;"><a class="dropdown-item" href="#" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                        </svg><span>Profile</span></a><a class="dropdown-item" href="#" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-moon-fill">
                                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278"></path>
                                        </svg><span>Dark Mode</span></a>
                                    <hr class="dropdown-divider"><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-right">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                                        </svg><span>Sign out</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Section-->
            <div class="p-3 dashboard-content content-section" id="dashboardSection">
                <div class="admin-header">
                    <div class="header-content">
                        <div class="greeting-section">
                            <div class="datetime-badge"><span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar4">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"></path>
                                    </svg></span><span id="current-date-today">Loading...</span></div>
                            <h1 class="greeting-title">Good Day, Admin!</h1>
                            <p class="greeting-subtitle">Manage lessons, users &amp; quizzes with ease.</p>
                        </div>
                    </div>
                    <div class="header-actions"><button class="btn btn-sm open-task-btn" id="openTaskManager" title="Open Task Manager"><i class="bi bi-calendar-check"></i> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list-task me-2">
                                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"></path>
                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"></path>
                                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"></path>
                            </svg>Tasks </button>
                    </div>
                </div>
                <div class="align-items-stretch mb-2 row g-3">
                    <div class="col-12 col-lg-8">

                        <!-- Overview Section -->
                        <div class="h-100 overview-section">
                            <div class="overview-header">
                                <h4 class="text-muted">Overview</h4>
                            </div>
                            <div class="row g-3 g-md-3">
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">127</h5>
                                            <p class="text-muted mb-0 card-text-2">Lessons Uploaded</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">127</h5>
                                            <p class="text-muted mb-0 card-text-2">pupils enrolled</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">87%</h5>
                                            <p class="text-muted mb-0 card-text-2">active today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">42m</h5>
                                            <p class="text-muted mb-0 card-text-2">Avg. session time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <!-- Gender Distribution Section -->
                        <div class="h-100 gender-chart-section">
                            <div class="gender-header">
                                <h4 class="text-muted gender-title">Gender Ratio</h4>
                            </div>
                            <div class="donut-container"><canvas id="genderDoughnutChart" class="doughnut-chart"></canvas></div>
                        </div>
                    </div>
                </div>
                <!-- Subjects Section -->
                <div class="h-100 mb-2 subjects-section">
                    <div class="subjects-header">
                        <h4 class="subject">Subjects</h4>
                        <div class="quarter-nav">
                            <span id="prev-quarter" class="quarter-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-left">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                </svg></span><span id="quarter-display" class="quarter active">Quarter 1</span><span id="next-quarter" class="quarter-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card subject-card">
                                <div class="card-header subject-math">
                                    <h6>Mathematics</h6><span>2<span>/8 Lessons</span></span>
                                </div>
                                <div class="card-body">
                                    <div class="avatar-group"><img class="img-fluid" width="200" height="200" src="assets/img/2.png" data-bs-toggle="tooltip" data-bs-placement="top" title="Username 1"><img class="img-fluid" width="200" height="200" src="assets/img/11.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="John"><img class="img-fluid" width="200" height="200" src="assets/img/12.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kaye"><img class="img-fluid" width="200" height="200" src="assets/img/5.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Richard">
                                        <div class="avatar-more"><span>+3</span></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="footer-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people footer-icon" data-bs-toggle="modal" data-bs-target="#studentsModal">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                        </svg><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                            </svg></a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card subject-card">
                                <div class="card-header subject-english">
                                    <h6>English</h6><span>2<span>/8 Lessons</span></span>
                                </div>
                                <div class="card-body">
                                    <div class="avatar-group"><img class="img-fluid" width="200" height="200" src="assets/img/2.png" data-bs-toggle="tooltip" data-bs-placement="top" title="Username 1"><img class="img-fluid" width="200" height="200" src="assets/img/11.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="John"><img class="img-fluid" width="200" height="200" src="assets/img/12.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kaye"><img class="img-fluid" width="200" height="200" src="assets/img/5.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Richard">
                                        <div class="avatar-more"><span>+3</span></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="footer-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people footer-icon" data-bs-toggle="modal" data-bs-target="#studentsModal">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                        </svg><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                            </svg></a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card subject-card">
                                <div class="card-header subject-science">
                                    <h6>Science</h6><span>2<span>/8 Lessons</span></span>
                                </div>
                                <div class="card-body">
                                    <div class="avatar-group"><img class="img-fluid" width="200" height="200" src="assets/img/2.png" data-bs-toggle="tooltip" data-bs-placement="top" title="Username 1"><img class="img-fluid" width="200" height="200" src="assets/img/11.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="John"><img class="img-fluid" width="200" height="200" src="assets/img/12.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kaye"><img class="img-fluid" width="200" height="200" src="assets/img/5.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Richard">
                                        <div class="avatar-more"><span>+3</span></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="footer-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people footer-icon" data-bs-toggle="modal" data-bs-target="#studentsModal">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                        </svg><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                            </svg></a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card subject-card">
                                <div class="card-header subject-filipino">
                                    <h6>Filipino</h6><span>2<span>/8 Lessons</span></span>
                                </div>
                                <div class="card-body">
                                    <div class="avatar-group"><img class="img-fluid" width="200" height="200" src="assets/img/2.png" data-bs-toggle="tooltip" data-bs-placement="top" title="Username 1"><img class="img-fluid" width="200" height="200" src="assets/img/11.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="John"><img class="img-fluid" width="200" height="200" src="assets/img/12.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kaye"><img class="img-fluid" width="200" height="200" src="assets/img/5.png" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Richard">
                                        <div class="avatar-more"><span>+3</span></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="footer-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people footer-icon" data-bs-toggle="modal" data-bs-target="#studentsModal">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                        </svg><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                            </svg></a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Class Performance Chart Section -->
                <div class="mb-2 performanceCompletion-section">
                    <div class="mb-4 row">
                        <div class="col-lg-4">
                            <div class="h-100 line-chart-container">
                                <div class="line-chart-header">
                                    <h4 class="text-muted">Class Performace</h4>
                                    <div class="line-chart-filter">
                                        <select class="form-select-sm form-select" id="line-chart-subject-filter">
                                            <option value="all" selected="">All Subject</option>
                                            <option value="math">Mathematics</option>
                                            <option value="english">English</option>
                                            <option value="science">Science</option>
                                            <option value="filipino">Filipino</option>
                                        </select>
                                        <select class="form-select-sm form-select" id="line-chart-quarter-filter">
                                            <option value="q1" selected="">Quarter 1</option>
                                            <option value="q2">Quarter 2</option>
                                            <option value="q3">Quarter 3</option>
                                            <option value="q4">Quarter 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line-chart-body"><canvas id="performanceChart"></canvas></div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Lesson Completion Chart -->
                            <div class="h-100 lessonCompletion-section">
                                <div class="lessonCompletion-header">
                                    <h4 class="text-muted">Lesson Completion Overview</h4>
                                    <div class="d-flex gap-2 completion-filter">
                                        <select class="form-select-sm form-select" id="completionFilterQuarter">
                                            <option value="" selected="">All Quarter </option>
                                            <option value="Q1">Quarter 1</option>
                                            <option value="Q2">Quarter 2</option>
                                            <option value="Q3">Quarter 3</option>
                                            <option value="Q4">Quarter 4</option>
                                        </select>
                                        <select class="form-select-sm form-select" id="completionFilterSub">
                                            <option value="" selected="">All Subjects</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="p-0">
                                    <div class="completion-container"><canvas id="adminCompletionChart"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lesson-data">
                    <div data-quarter="Q1" data-subject="Mathematics">
                        <div data-lesson="Lesson 1" data-rate="85"></div>
                        <div data-lesson="Lesson 2" data-rate="92"></div>
                        <div data-lesson="Lesson 3" data-rate="78"></div>
                        <div data-lesson="Lesson 4" data-rate="88"></div>
                        <div data-lesson="Lesson 5" data-rate="90"></div>
                        <div data-lesson="Lesson 6" data-rate="82"></div>
                        <div data-lesson="Lesson 7" data-rate="87"></div>
                        <div data-lesson="Lesson 8" data-rate="89"></div>
                    </div>
                    <div data-quarter="Q1" data-subject="Science">
                        <div data-lesson="Lesson 1" data-rate="76"></div>
                        <div data-lesson="Lesson 2" data-rate="81"></div>
                        <div data-lesson="Lesson 3" data-rate="72"></div>
                        <div data-lesson="Lesson 4" data-rate="79"></div>
                        <div data-lesson="Lesson 5" data-rate="85"></div>
                        <div data-lesson="Lesson 6" data-rate="77"></div>
                        <div data-lesson="Lesson 7" data-rate="80"></div>
                        <div data-lesson="Lesson 8" data-rate="83"></div>
                    </div>
                    <div data-quarter="Q1" data-subject="English">
                        <div data-lesson="Lesson 1" data-rate="90"></div>
                        <div data-lesson="Lesson 2" data-rate="93"></div>
                        <div data-lesson="Lesson 3" data-rate="88"></div>
                        <div data-lesson="Lesson 4" data-rate="91"></div>
                        <div data-lesson="Lesson 5" data-rate="89"></div>
                        <div data-lesson="Lesson 6" data-rate="92"></div>
                        <div data-lesson="Lesson 7" data-rate="94"></div>
                        <div data-lesson="Lesson 8" data-rate="90"></div>
                    </div>
                    <div data-quarter="Q1" data-subject="Filipino">
                        <div data-lesson="Lesson 1" data-rate="91"></div>
                        <div data-lesson="Lesson 2" data-rate="92"></div>
                        <div data-lesson="Lesson 3" data-rate="90"></div>
                        <div data-lesson="Lesson 4" data-rate="88"></div>
                        <div data-lesson="Lesson 5" data-rate="89"></div>
                        <div data-lesson="Lesson 6" data-rate="89"></div>
                        <div data-lesson="Lesson 7" data-rate="67"></div>
                        <div data-lesson="Lesson 8" data-rate="95"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="Mathematics">
                        <div data-lesson="Lesson 1" data-rate="88"></div>
                        <div data-lesson="Lesson 2" data-rate="85"></div>
                        <div data-lesson="Lesson 3" data-rate="80"></div>
                        <div data-lesson="Lesson 4" data-rate="86"></div>
                        <div data-lesson="Lesson 5" data-rate="89"></div>
                        <div data-lesson="Lesson 6" data-rate="84"></div>
                        <div data-lesson="Lesson 7" data-rate="87"></div>
                        <div data-lesson="Lesson 8" data-rate="90"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="Science">
                        <div data-lesson="Lesson 1" data-rate="82"></div>
                        <div data-lesson="Lesson 2" data-rate="79"></div>
                        <div data-lesson="Lesson 3" data-rate="75"></div>
                        <div data-lesson="Lesson 4" data-rate="80"></div>
                        <div data-lesson="Lesson 5" data-rate="84"></div>
                        <div data-lesson="Lesson 6" data-rate="78"></div>
                        <div data-lesson="Lesson 7" data-rate="81"></div>
                        <div data-lesson="Lesson 8" data-rate="83"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="English">
                        <div data-lesson="Lesson 1" data-rate="92"></div>
                        <div data-lesson="Lesson 2" data-rate="94"></div>
                        <div data-lesson="Lesson 3" data-rate="91"></div>
                        <div data-lesson="Lesson 4" data-rate="93"></div>
                        <div data-lesson="Lesson 5" data-rate="90"></div>
                        <div data-lesson="Lesson 6" data-rate="92"></div>
                        <div data-lesson="Lesson 7" data-rate="95"></div>
                        <div data-lesson="Lesson 8" data-rate="91"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="Filipino">
                        <div data-lesson="Lesson 1" data-rate="99"></div>
                        <div data-lesson="Lesson 2" data-rate="97"></div>
                        <div data-lesson="Lesson 3" data-rate="96"></div>
                        <div data-lesson="Lesson 4" data-rate="97"></div>
                        <div data-lesson="Lesson 5" data-rate="98"></div>
                        <div data-lesson="Lesson 6" data-rate="87"></div>
                        <div data-lesson="Lesson 7" data-rate="80"></div>
                        <div data-lesson="Lesson 8" data-rate="50"></div>
                    </div>
                </div>
                <!-- At Risk Pupil Table -->
                <div class="user-main-card-list card">
                    <div class="card-header list-header">
                        <div class="mb-3 at-risk-header">
                            <h4 class="text-muted">At-Risk Pupils</h4>
                        </div>
                        <div class="controls-row">
                            <div class="d-flex control-left">
                                <div class="search-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search search-icon">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                    </svg><input type="text" id="searchInput-1" class="form-control searchName-input" placeholder="Search by name, class, type..">
                                </div>
                            </div>
                            <div class="control-right">
                                <div class="filter-select">
                                    <select id="atRiskQuarterFilter" class="form-select">
                                        <option value="" selected="">All Quarter</option>
                                        <option value="Q1">Quarter 1</option>
                                        <option value="Q2">Quarter 2</option>
                                        <option value="Q3">Quarter 3</option>
                                        <option value="Q4">Quarter 4</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select id="atRiskSubjectFilter" class="form-select">
                                        <option value="" selected="">All Subjects</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="English">English</option>
                                        <option value="Science">Science</option>
                                        <option value="Filipino">Filipino</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select class="w-auto form-select" id="atRiskSort">
                                        <option value="" selected="">Sort By</option>
                                        <option value="name-asc">Name (A–Z)</option>
                                        <option value="name-desc">Name (Z–A)</option>
                                        <option value="last-active-desc">Last Active (desc)</option>
                                        <option value="last-active-asc"> Last Active (asc)</option>
                                        <option value="session-asc"> Avg. Session (asc)</option>
                                        <option value="session-desc">Avg. Session (desc)</option>
                                    </select>
                                </div>
                                <button class="btn btn-outline-secondary btn-clear" id="clearFiltersBtn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                        <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                    </svg>
                                    <span>Clear All</span>
                                </button>
                                <button class="btn btn-outline-primary btn-export" id="exportBtn-2" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg>
                                    <span>Export as CVS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 table-responsive table-list-users">
                        <div>
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>LASt ACTIVE</th>
                                        <th>progress</th>
                                        <th>subject</th>
                                        <th>avg. session</th>
                                        <th>status</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody id="userTableBody-1">
                                    <tr data-active="true">
                                        <td></td>
                                        <td data-label="Name" data-student="Maria Santos">Maria Santos</td>
                                        <td data-label="Last Active" data-last-active="18">18 days ago</td>
                                        <td data-label="Progress" data-rate="25">25%</td>
                                        <td data-label="Subject" data-quarter="Q1" data-subject="Mathematics">Mathematics Q1</td>
                                        <td data-label="Avg. Session" data-session-time="5">5m</td>
                                        <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn message" title="Send Login Reminder" data-student-id="101" data-student-name="Juan Dela Cruz">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="false">
                                        <td></td>
                                        <td data-label="Name" data-name="Richard Bilan">Richard Bilan</td>
                                        <td data-label="Last Active" data-last-active="12">12 days ago</td>
                                        <td data-label="Progress" data-rate="38">38%</td>
                                        <td data-label="Subject" data-quarter="Q1" data-subject="Science">Science Q1</td>
                                        <td data-label="Avg. Session" data-session-time="12">12m</td>
                                        <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn message" title="Send a Message">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="true">
                                        <td></td>
                                        <td data-label="Name" data-name="Wendee Diane Llona">Wendee Diane Llona</td>
                                        <td data-label="Last Active" data-last-active="20">20 days ago</td>
                                        <td data-label="Progress" data-rate="50">50%</td>
                                        <td class="Subject" data-label="Grade / Class" data-quarter="Q2" data-subject="English">English Q1</td>
                                        <td data-label="Avg. Session" data-session-time="8">8m</td>
                                        <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn message" title="Send a Message">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center text-muted p-4" id="noAtRiskResults" style="display:none;"><span>No At-Risk Pupils found.</span></div>
                    <!-- Pagination -->
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                        <div class="text-muted small"><span> Showing </span><span id="startCount-1">1</span><span> to </span><span id="endCount-1">3</span><span> of </span><span id="totalCount-1">50</span></div>
                        <nav aria-label="User list pagination">
                            <ul class="mb-0 pagination pagination-sm">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="d-none at-risk-data">
                    <div data-student="Juan Dela Cruz" data-last-active="18" data-session-time="5">
                        <div data-quarter="Q1" data-subject="Mathematics">
                            <div data-rate="25"></div>
                        </div>
                    </div>
                    <div data-student="Maria Santos" data-last-active="12" data-session-time="12">
                        <div data-quarter="Q1" data-subject="Science">
                            <div data-rate="38"></div>
                        </div>
                    </div>
                    <div data-student="Pedro Reyes" data-last-active="20" data-session-time="8">
                        <div data-quarter="Q1" data-subject="English">
                            <div data-rate="50"></div>
                        </div>
                    </div>
                    <div data-student="Ana Lim" data-last-active="5" data-session-time="40">
                        <div data-quarter="Q1" data-subject="Mathematics">
                            <div data-rate="30"></div>
                        </div>
                    </div>
                </div>
                <div id="chartTooltip" class="tooltip-custom"></div>
            </div>
            
            <!-- User Management Section -->
            <div class="d-none p-3 user-management-container content-section" id="userSection">
                <div class="user-page-header">
                    <h1 class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                        </svg>User Management</h1>
                    <p>Manage teachers and pupils, filter, search, and export user list.</p>
                </div>
                <div class="user-main-card-list card">
                    <div class="card-header list-header">
                        <div class="controls-row">
                            <div class="control-left">
                                <div class="search-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search search-icon">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                    </svg><input type="text" id="searchInput" class="form-control searchName-input" placeholder="Search by name, class, type..">
                                </div>
                            </div>
                            <div class="control-right">
                                <div class="filter-select">
                                    <select id="filterType" class="form-select">
                                        <option value="" selected="">All types</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Pupil">Pupil</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select id="filterStatus" class="form-select">
                                        <option value="" selected="">All status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select id="filterDate" class="form-select">
                                        <option value="" selected="">All time</option>
                                        <option value="24d">Last 24 hours</option>
                                        <option value="7d">Last 7 days</option>
                                        <option value="30d">Last 30 days</option>
                                    </select>
                                </div>
                                <button class="btn btn-outline-primary btn-export" id="exportBtn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg><span>Export as CVS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 table-responsive table-list-users">
                        <div>
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Type</th>
                                        <th>Grade/Class</th>
                                        <th>Status</th>
                                        <th>Last seen</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody id="userTableBody">
                                    <tr data-active="true">
                                        <td data-label="Online"><div class="status-dot online"></div></td>
                                        <td data-label="Name">Maria Santos</td>
                                        <td data-label="Email">m******s@gmail.com</td>
                                        <td data-label="Type"><span class="text-success bg-success-subtle user-badge badge">Teacher</span></td>
                                        <td data-label="Grade / Class">Grade 4 - Section B</td>
                                        <td data-label="Status"><span class="status-badge status-active">Active</span></td>
                                        <td data-label="Last Seen">Now</td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn view" title="View Profile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye" data-bs-toggle="modal" data-bs-target="#viewProfile">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="false">
                                        <td data-label="Online"><div class="status-dot offline"></div></td>
                                        <td data-label="Name">Richard Bilan</td>
                                        <td data-label="Email">r******n@gmail.com</td>
                                        <td data-label="Type"><span class="text-info bg-info-subtle user-badge badge">Pupil</span></td>
                                        <td data-label="Grade / Class">Grade 4 - Section A</td>
                                        <td data-label="Status"><span class="status-badge status-inactive">Inactive</span></td>
                                        <td data-label="Last Seen">5 hrs ago</td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn view" title="View Profile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="true">
                                        <td data-label="Online"><div class="status-dot online"></div></td>
                                        <td data-label="Name">Wendee Diane Llona</td>
                                        <td data-label="Email">w********a@gmail.com</td>
                                        <td data-label="Type"><span class="text-success bg-success-subtle user-badge badge">Pupil</span></td>
                                        <td data-label="Grade / Class">Grade 3 - Section A</td>
                                        <td data-label="Status"><span class="status-badge status-active">Active</span></td>
                                        <td data-label="Last Seen">5 mins ago</td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn view" title="View Profile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center text-muted p-4" id="noResultsUser" style="display:none;"><span> No data matched your search.</span></div>
                    <!-- Pagination -->
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                        <div class="text-muted small"><span> Showing </span><span id="startCount">1</span><span> to </span><span id="endCount">3</span><span> of </span><span id="totalCount">50</span><span> users </span></div>
                        <nav aria-label="User list pagination">
                            <ul class="mb-0 pagination pagination-sm">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="d-none p-3 activity-log-container content-section" id="activitylogSection">
                <div class="user-page-header">
                    <h1 class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock-history">
                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"></path>
                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"></path>
                        </svg>Activity Log</h1>
                    <p>Track file uploads, logins, user activity, and content changes across MQuest.</p>
                </div>
                <div class="user-main-card-list card">
                    <div class="card-header list-header">
                        <div class="controls-row">
                            <div class="control-left">
                                <div class="search-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search search-icon">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                    </svg><input type="text" id="searchActivity" class="form-control searchName-input" placeholder="Search here..."></div>
                            </div>
                            <div class="control-right">
                                <div class="activity-log-types"><select id="filterDate-1" class="form-select">
                                        <option value="" selected="">All time</option>
                                        <option value="today">Today</option>
                                        <option value="7d">Last 7 Days</option>
                                        <option value="30d">Last 30 Days</option>
                                        <option value="this-month">This month</option>
                                    </select></div>
                                <div class="activity-log-types"><select id="filterActType" class="form-select">
                                        <option value="" selected="">All types</option>
                                        <option value="lesson_material">Lesson &amp; Materials</option>
                                        <option value="quiz">Quiz</option>
                                        <option value="login_access">Logins &amp; Access</option>
                                        <option value="achievement">Achievement</option>
                                        <option value="deletion">Deleted Items</option>
                                    </select></div><button class="btn btn-outline-primary btn-export" id="exportBtn-1" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg><span>Export as CVS</span></button>
                            </div>
                        </div>
                    </div>
                    <ul id="activityList" class="activity-list">
                        <li class="activity-log-item" data-type="material-upload" data-search="uploaded shapes intro pdf admin" data-user="admin" data-category="lesson_material" data-timestamp="2025-09-02T15:30:00Z">
                            <div class="activity-log-header">
                                <div class="activity-log-icon lesson activity-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Uploaded&nbsp;<strong>"Shapes_Intro.pdf"</strong></span><span class="bg-primary badge user-role">Admin</span></div>
                                <div class="activity-time"><span class="data-timestamp-display">2 mins ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">User:</span> Admin</p>
                                <p><span class="detail-label">File Name:</span> Shapes_Intro.pdf</p>
                                <p><span class="detail-label">File Type:</span> PDF</p>
                                <p><span class="detail-label">Size:</span> 2.4 MB</p>
                                <p><span class="detail-label">Location:</span> Lesson 1 - Quarter 1</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="quiz-create" data-search="added colors quiz admin" data-user="admin" data-category="quiz" data-timestamp="2025-08-23T10:00:00Z">
                            <div class="activity-log-header">
                                <div class="activity-icon quiz activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pen">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Added&nbsp;<strong>"Color Quiz"</strong></span><span class="bg-primary badge user-role">Admin</span></div>
                                <div class="activity-time"><span>1 hr ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">User:</span> Admin</p>
                                <p><span class="detail-label">Quiz Name:</span>&nbsp;Color Quiz</p>
                                <p><span class="detail-label">No. of Questions:</span>&nbsp;10</p>
                                <p><span class="detail-label">Assigned To:</span>&nbsp;Lesson 2 - Quarter 1</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="quix-complete" data-search="added colors quiz admin" data-user="admin" data-category="quiz" data-timestamp="2025-07-26T08:00:00Z">
                            <div class="activity-log-header">
                                <div class="activity-icon quiz activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pen">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>@jelo completed&nbsp;<strong>"Color Quiz"</strong></span><span class="bg-info badge user-role">Pupil</span></div>
                                <div class="activity-time"><span>1 hr ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">Username:</span>&nbsp;@jelo</p>
                                <p><span class="detail-label">Score:</span>&nbsp;9 / 10</p>
                                <p><span class="detail-label">Time Spent:</span>&nbsp;8 mins</p>
                                <p><span class="detail-label">Device:</span>&nbsp;Oppo 123</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="login-failed" data-search="failed login" data-user="pupil" data-category="login_access" data-timestamp="2025-09-01T07:00:00Z">
                            <div class="activity-log-header">
                                <div class="activity-icon login activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>@jelo&nbsp;&nbsp;<strong>failed to login</strong></span><span class="bg-info badge user-role">pupil</span></div>
                                <div class="activity-time"><span>1 hr ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">Username:</span>&nbsp;@jelo</p>
                                <p><span class="detail-label">Action:</span>&nbsp;Accessed Quarter 1</p>
                                <p><span class="detail-label">Device:</span>&nbsp;Mobile (iOS Safari)</p>
                                <p><span class="detail-label">IP Address:</span>&nbsp;192.168.1.109</p>
                                <p><span class="detail-label">Location:</span>&nbsp;Quezon City, PH</p>
                                <p><span class="detail-label">Time:</span>&nbsp;Today at 3PM</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="material-access" data-search="teacher maria accessed quarter 1 teacher" data-user="teacher" data-category="login_access" data-timestamp="2025-08-03T12:00:00Z">
                            <div class="activity-log-header">
                                <div class="activity-icon login activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Teacher Maria&nbsp;<strong>accessed Quarter 1</strong></span><span class="bg-success badge user-role">TEacher</span></div>
                                <div class="activity-time"><span>1 hr ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">User:</span>&nbsp;Maria Santos</p>
                                <p><span class="detail-label">Role:</span>&nbsp;Teacher</p>
                                <p><span class="detail-label">Action:</span>&nbsp;Accessed Quarter 1</p>
                                <p><span class="detail-label">Device:</span>&nbsp;Chrome on Windows</p>
                                <p><span class="detail-label">Location:</span>&nbsp;Manila, PH</p>
                                <p><span class="detail-label">Session Started:</span>&nbsp;3 hours ago</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="login-success" data-search="11 23 logged in MQuest" data-user="pupil" data-category="login_access">
                            <div class="activity-log-header">
                                <div class="activity-icon login activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>11*******23&nbsp;<strong>&nbsp;logged in to MQuest</strong></span><span class="bg-info badge user-role">Pupil</span></div>
                                <div class="activity-time"><span>yesterday</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">User:</span>&nbsp;11********45</p>
                                <p><span class="detail-label">Role:</span>&nbsp;Pupil</p>
                                <p><span class="detail-label">Grade/Class:</span>&nbsp;&nbsp;Grade 3 - Section A</p>
                                <p><span class="detail-label">Login Method:</span>&nbsp;Email</p>
                                <p><span class="detail-label">Device:</span>&nbsp;Oppo 123</p>
                                <p><span class="detail-label">Last Activity:</span>&nbsp;Completed Pre-Test Quiz</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="material-publish" data-search="published lesson 3 introduction to flowers admin" data-user="admin" data-category="lesson_material">
                            <div class="activity-log-header">
                                <div class="activity-log-icon lesson activity-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Published&nbsp;<strong>"Lesson 3: Introduction to Flowers"</strong></span><span class="bg-primary badge user-role">admin</span></div>
                                <div class="activity-time"><span>2 days ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">User:</span>&nbsp;Admin</p>
                                <p><span class="detail-label">Content:</span>&nbsp;Lesson 3: Introduction to Flowers</p>
                                <p><span class="detail-label">Status:</span>&nbsp;Published</p>
                                <p><span class="detail-label">Materials Included:</span>&nbsp;Pretest,&nbsp;PDF Guide, Video, Post Test</p>
                                <p><span class="detail-label">Published To:</span>&nbsp;Quarter 1: Science</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="delete" data-search="deleted old worksheet v1 pdf admin" data-user="admin" data-category="deletion">
                            <div class="activity-log-header">
                                <div class="activity-icon delete activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash3">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Deleted<strong>&nbsp;"Old_Worksheet_v1.pdf"</strong></span><span class="bg-primary badge user-role">Admin</span></div>
                                <div class="activity-time"><span>3 days ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">User:</span>&nbsp;Admin</p>
                                <p><span class="detail-label">File Name:</span>&nbsp;Old_Worksheet_v1.pdf</p>
                                <p><span class="detail-label">Deleted From:</span>&nbsp;Quarter 1</p>
                                <p><span class="detail-label">Backup:</span>&nbsp;Yes</p>
                            </div>
                        </li>
                        <li class="activity-log-item" data-type="badge-earned" data-search="wow badge earned" data-user="puil" data-category="achievement">
                            <div class="activity-log-header">
                                <div class="activity-icon achievement activity-log-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-award">
                                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"></path>
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Mark earned<strong>&nbsp;"Wow Badge"</strong></span><span class="bg-info badge user-role">pupil</span></div>
                                <div class="activity-time"><span>3 days ago</span></div>
                            </div>
                            <div class="activity-details">
                                <p><span class="detail-label">Badge Name:</span>&nbsp;Wow Badge</p>
                                <p><span class="detail-label">Recipient:</span>&nbsp;Mark Velasco (Grade 3 - Section B)</p>
                                <p><span class="detail-label">Unlocked On:</span>&nbsp;Apr 2, 2025</p>
                                <p><span class="detail-label">Subject:</span>&nbsp;Mathematics</p>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center text-muted p-4" id="noResults" style="display:none;"><span> No matching activities found.</span></div>
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                        <div class="text-muted small"><span> Showing </span><span id="startCount-2">1</span><span> to </span><span id="endCount-2">3</span><span> of </span><span id="totalCount-2">50</span></div>
                        <nav aria-label="User list pagination">
                            <ul class="mb-0 pagination pagination-sm">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Lesson Template -->
            <div class="d-none subject-section content-section" id="lessonSection">
                <div class="ms-1 tab-container main-tab"><button class="btn active tab-button" type="button" onclick="switchTab(event, &#39;tab1&#39;)">Create</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab2&#39;)">Lessons</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab3&#39;)">People</button>
                    <div class="tab-indicator"></div>
                </div>
                <div id="tab1" class="tab-content active">
                    <div class="p-3 subject-box">
                        <div class="mb-2 col" style="height: 15rem;     position: relative;     width: 100%;">
                            <div class="mb-2 card math-subject-card">
                                <div class="subject-title">
                                    <h3>Mathematics 4</h3>
                                </div>
                            </div>
                        </div>
                        <div class="quarter-container">
                            <div class="quarter-header">
                                <div>
                                    <h2>Academic Quarter</h2><small>Manage the current and default quarter for lesson creation</small>
                                </div>
                            </div>
                            <div class="quarters row g-2">
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter1">Quarter 1</button></div>
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter2">Quarter 2</button></div>
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter3">Quarter 3</button></div>
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter4">Quarter 4</button></div>
                            </div>
                            <div class="quarter-progress-container">
                                <div class="progress-bar-bg">
                                    <div class="progress-bar-fill" id="quarterProgress"></div>
                                </div>
                                <div class="progress-label" id="progressLabel"><span class="small">3 out of 8 Lessons</span></div>
                            </div>
                            <div class="default-info">
                                <div id="defaultQuarterLabel" style="font-size:0.75rem;color:var(--text-light);"><span> Default Quarter: </span><strong>None</strong></div><button class="btn btn-secondary" id="setDefaultQuarterBtn" type="button">Set Current as Default</button>
                            </div>
                        </div>
                        <div class="mb-2 form-container lesson-container" id="lessonTemplate">
                            <h2 class="p-2">Create Lesson</h2>
                            <section class="main-container-lesson">
                                <h6><span>1&nbsp;</span>Lesson Title</h6>
                                <form>
                                    <div class="form-group lesson-title-wrapper"><input type="text" id="lesson-title" placeholder=" " required=""><label for="lesson-title">Lesson Title</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="lesson-description" placeholder=" " required=""></textarea><label for="lesson-description">Lesson Description</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="objectives" placeholder=" " required=""></textarea><label for="lesson-description-1">Objectives</label></div>
                                </form>
                            </section>
                            <!-- Pretest -->
                            <section class="main-container-lesson">
                                <h6><span>2</span>Pre Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType">Choose Question Type</label>
                                    <select class="mb-2 form-select" id="questionType">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select>
                                    <button class="btn mb-3 addQuestion-btn" id="add-question-btn" type="button" onclick="addQuestion()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question
                                    </button>
                                </div>
                            </section>
                            <!-- Games Builder -->
                            <section class="main-container-lesson">
                                <h6><span>3</span>Games Builder (Optional)</h6>
                                <p class="text-muted mb-2">Create a game activity with 5–10 items (Matching, Flashcard, Fill in the Blank, Spelling, Speak, Image Quiz).</p>
                                <div class="mb-3 quiz"><label class="form-label" for="gametype">Choose a Game Type</label>
                                    <select class="mb-2 form-select" id="gameSelect">
                                        <option value="" selected="">Select Type</option>
                                        <option value="matching">Matching</option>
                                        <option value="flashcard">Flash Card</option>
                                        <option value="spelling">Spelling</option>
                                        <option value="speak">Speak</option>
                                        <option value="imagequiz">Image Quiz</option>
                                    </select>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="matching-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Matching Game</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="matching-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="matching-container"></div>
                                    <button class="btn mb-3 add-game" id="addMatchingBtn" type="button">Add Another Pair</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="flashcard-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Flashcard Game</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="flashcard-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="flashcard-container"></div>
                                    <button class="btn mb-3 add-game" id="addFlashcardBtn" type="button">Add Another Card</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="spelling-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Fill-in-the-Blank</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="spelling-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="spelling-container"></div>
                                    <button class="btn mb-3 add-game" id="addSpellingBtn" type="button">Add Another Word</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="speak-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Speech</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="speak-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="speak-container"></div>
                                    <button class="btn mb-3 add-game" id="addSpeakBtn" type="button">Add Another Prompt</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="imagequiz-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Image Quiz</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="imagequiz-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="imagequiz-container"></div>
                                    <button class="btn mb-3 add-game" id="addImageQuizBtn" type="button">Add Another Image Quiz</button>
                                </div>
                            </section>
                            <section class="main-container-lesson">
                                <div class="row">
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>4</span>Upload Learning Material</h6>
                                        <p class="text-muted">Select a PowerPoint or PDF file (.ppt or .pptx) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop files here</p><small class="text-muted">Files Supported: PDF, PPT, PPTX</small><br><label class="btn-upload" for="fileInput">Choose File</label><br><small class="text-muted">Maximum size: 5MB</small><input type="file" id="fileInput" class="file-input" accept=".ppt,.pptx">
                                            </div>
                                            <div class="mb-3 file-info" id="fileNameDisplay">
                                                <p id="fileName" class="file-name">Paragraph</p>
                                                <p id="fileSize" class="file-size">Paragraph</p>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title" placeholder=" " required=""><label for="file-title">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-1" placeholder=" " required=""><label for="file-title-1">Subtitle</label></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>5</span>Upload Video/s</h6>
                                        <p class="text-muted mb-2">Select a video file (e.g., .mp4, .mov, .webm) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop video here</p><small class="text-muted">Files Supported: MP4, MOV, WEBM&nbsp;</small><br><label class="btn-upload" for="videoInput">Choose File</label><br><small class="text-muted">Maximum size: 5MB</small><input type="file" id="videoInput" class="video-input" accept="video/*">
                                            </div>
                                            <div id="videoPreview" class="video-preview"><video id="previewVideo" controls=""></video>
                                                <div class="video-controls"><button id="playPauseBtn">Play</button></div>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-2" placeholder=" " required=""><label for="file-title-2">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="video-title" placeholder=" " required=""><label for="video-title">Subtitle</label></div>
                                            <div class="upload-url-container">
                                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-link-45deg me-2">
                                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"></path>
                                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"></path>
                                                    </svg>Or Add a Video URL
                                                </h4>
                                                <div class="url-input-group"><input type="url" id="urlInput" class="url-input" placeholder="https://shareprojectdikename.com/csv-file"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Post Test -->
                            <section class="main-container-lesson">
                                <h6><span>6</span>Post Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container2"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType2">Choose Question Type</label>
                                    <select class="mb-2 form-select" id="questionType2">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select>
                                    <button class="btn mb-3 addQuestion-btn" id="add-question-btn2" type="button" onclick="addQuestion2()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question
                                    </button>
                                </div>
                            </section>
                            <div class="p-4 tip-box">
                                <h6 class="text-muted tip-title">Tips</h6>
                                <ul class="list-unstyled text-muted tip-list">
                                    <li>Keep quizzes short.</li>
                                    <li>Keep videos under 5 minutes and compress large video files.</li>
                                    <li>Use clear file names (e.g., Lesson_1_Intro.pdf).</li>
                                    <li>Use PDFs for handouts, not Word docs.</li>
                                    <li>Add a title and description and check spelling before publishing.</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-start gap-3 flex-md-row p-4">
                                <button class="btn me-2 publish-btn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle me-2">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                    </svg>Publish Lesson
                                </button>
                                <button class="btn btn-outline-secondary save-draft-btn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-save me-2">
                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z"></path>
                                    </svg>Save As Draft
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="create">
                        <button class="btn floating-create-btn" id="createLessonBtn" type="button" aria-label="Create Lesson">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Lesson Tabs -->
                <div id="tab2" class="tab-content">
                    <div class="p-3 lesson-main-container">
                        <div class="mb-3 quarter-tabs row g-2" id="quarterTabs">
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab active" data-quarter="Q1"><span>Quarter 1</span></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab" data-quarter="Q2"><span>Quarter 2</span></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab" data-quarter="Q3"><span>Quarter 3</span></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab" data-quarter="Q4"><span>Quarter 4</span></div>
                            </div>
                        </div>
                        <div id="lessonMenu" class="lesson-menu">
                            <div id="Q1" class="lesson-item active">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ1" aria-expanded="false" aria-controls="contentQ1">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Shapes</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ1" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">Illustrated Guide (PDF)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">10-Item Post Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Q2" class="lesson-item">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ2" aria-expanded="false" aria-controls="contentQ2">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Colors</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ2" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">Illustrated Guide (PDF)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">10-Item Post Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Q3" class="lesson-item">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ3" aria-expanded="false" aria-controls="contentQ3">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Flowers</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ3" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">Illustrated Guide (PDF)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">10-Item Post Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Q4" class="lesson-item">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ4" aria-expanded="false" aria-controls="contentQ4">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Human</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ4" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">Illustrated Guide (PDF)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                                <li class="material-item">10-Item Post Test Quiz
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- People Tab-->
                <div id="tab3" class="tab-content">
                    <div class="p-3 people-main-container">
                        <div class="mb-4 teacher-ab">
                            <div class="student-header">
                                <div style="display: flex ;     flex-grow: 1;     flex-wrap: wrap;     align-items: baseline;">
                                    <h2 class="student-title">Teachers</h2>
                                </div>
                            </div>
                            <div class="teacher-item"><img class="img-fluid avatar-teacher" alt="Man with laptop and woman playing cello" width="1080" height="1080" src="assets/img/photo-1755541516453-201559bec161.jpg">
                                <p class="mb-0 teacher-name">Jeffrey Belson</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="student-ab">
                            <div class="student-header">
                                <div class="justify-content-between" style="display: flex ;     flex-grow: 1;     flex-wrap: wrap;     align-items: baseline;">
                                    <h2 class="student-title">Pupils Enrolled</h2>
                                    <div class="text-muted" style="padding-right: 1rem;">
                                        <p>34 Pupils</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/6.png">
                                <p class="mb-0 student-name">Anna</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/2.png">
                                <p class="mb-0 student-name">Bella</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/10.png">
                                <p class="mb-0 student-name">Joseph Marco</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Task Manager -->
            <div id="taskManagerPanel" class="task-manager-panel">
                <div class="panel-header">
                    <h5 class="m-0">My Tasks</h5>
                    <button class="btn btn-sm close-task-manager" id="closeTaskManager" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                        </svg>
                    </button>
                </div>
                <div class="panel-body">
                    <div class="mb-4 calendar-container">
                        <div class="d-flex justify-content-between align-items-center mb-3 calendar-header">
                            <h6 class="mb-0">Calendar</h6>
                            <div class="calendar-control">
                                <button class="btn me-1" id="prevMonth">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-caret-left">
                                        <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"></path>
                                    </svg>
                                </button><span id="currentMonth" class="fw-medium">October 2025</span>
                                <button class="btn ms-1" id="nextMonth">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-caret-right">
                                        <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div id="calendarGrid" class="calendar-grid"></div>
                    </div>
                    <!-- Create New Task -->
                    <div class="create-task-form">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Create New Task</h6>
                            <button class="btn btn-link btn-sm p-0" id="manageCategoriesBtn" title="Manage categories" style="color: #131150;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>
                            </button>
                        </div>
                        <form id="taskForm" class="task-form">
                            <div class="mb-3"><label class="form-label" for="taskTitle">Task Title</label><input class="form-control p-2 form-control form-select-sm" type="text" id="taskTitle" placeholder="Enter task title"></div>
                            <div class="mb-3"><label class="form-label" for="taskDescription-1">Description</label><textarea class="form-control p-2 form-control form-select-sm" id="taskDescription-1" placeholder="Enter task description" rows="3"></textarea></div>
                            <div class="row mb-3">
                                <div class="col-md-6"><label class="form-label" for="taskDueDate">Due Date</label><input class="form-control p-2 form-control form-select-sm" id="taskDate" type="date"></div>
                                <div class="col-md-6"><label class="form-label" for="taskStatus">Status</label>
                                    <select class="form-select form-select-sm p-2 form-select" id="taskStatus" name="taskStatus">
                                        <option value="Pending">Pending</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6"><label class="form-label" for="taskCategory">Category</label>
                                    <select class="form-select form-select-sm p-2 form-select" id="taskCategory" name="taskCategory">
                                        <option value="1">Mathematics</option>
                                        <option value="2">Science</option>
                                        <option value="3">English</option>
                                        <option value="4">Filipino</option>
                                        <option value="5">Personal</option>
                                        <option value="6">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6"><label class="form-label" for="taskPriority">Priority</label>
                                    <select class="form-select form-select-sm p-2 form-select" id="taskPriority" name="taskPriority">
                                        <option value="Low">Low</option>
                                        <option value="Medium" selected="">Medium</option>
                                        <option value="High">High</option>
                                        <option value="Urgent">Urgent</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-secondary w-100 justify-content-center btn-add-task" type="submit">Add Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Enrolled Pupils -->
    <div class="modal fade" role="dialog" tabindex="-1" id="studentsModal">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h4 class="modal-title" style="font-size: 18px;">Enrolled Students</h4><button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal" style="font-size: 12px;"></button>
                </div>
                <div class="modal-body m-3 modal-student-list admin-profile-modal-body">
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/7.png">
                            <div class="student-details"><strong>juanDC</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1235 **** 9456</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/9.png">
                            <div class="student-details"><strong>jannY</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1234 **** 9873</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/8.png">
                            <div class="student-details"><strong>BravoH</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1234 **** 2355</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/10.png">
                            <div class="student-details"><strong>#heyao</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1234 **** 6453</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/10.png">
                            <div class="student-details"><strong>#heyao</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1234 **** 6453</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/10.png">
                            <div class="student-details"><strong>#heyao</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1234 **** 6453</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- View Student Profile - User Management -->
    <div class="modal fade" role="dialog" tabindex="-1" id="viewProfile" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body p-0 mb-0">
                    <div class="rounded-0 border-0 profile-container">
                        <div class="position-relative profile-header">
                            <div class="profile-pic-container"><img class="img-fluid profile-pic" width="200" height="200" src="assets/img/7.png"></div>
                            <div class="text-white profile-title">
                                <h1>Emma Watsons</h1><span class="bg-success badge">Pupil</span>
                                <p>Grade 4</p>
                            </div>
                            <div class="mt-4 row">
                                <div class="col-sm-6">
                                    <div class="info-item">
                                        <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar">
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                                            </svg><span>Joined since</span></div>
                                        <div class="info-item-value"><span>January 15, 2022</span></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                            </svg><span>Last Active</span></div>
                                        <div class="info-item-value"><span>Active Now</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-body">
                            <div class="mb-3 row g-3">
                                <div class="col-lg-6">
                                    <h3 class="section-title">Personal Information</h3>
                                    <div class="info-grid row g-2">
                                        <div class="col-12">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                    </svg><span> Email</span></div>
                                                <div class="info-item-value"><span>emma.johnson@example.com</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                                    </svg><span>&nbsp;Phone</span></div>
                                                <div class="info-item-value"><span>+1 (555) 123-4567</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cake">
                                                        <path d="m7.994.013-.595.79a.747.747 0 0 0 .101 1.01V4H5a2 2 0 0 0-2 2v3H2a2 2 0 0 0-2 2v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a2 2 0 0 0-2-2h-1V6a2 2 0 0 0-2-2H8.5V1.806A.747.747 0 0 0 8.592.802l-.598-.79ZM4 6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v.414a.911.911 0 0 1-.646-.268 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0A.911.911 0 0 1 4 6.414zm0 1.414c.49 0 .98-.187 1.354-.56a.914.914 0 0 1 1.292 0c.748.747 1.96.747 2.708 0a.914.914 0 0 1 1.292 0c.374.373.864.56 1.354.56V9H4zM1 11a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.793l-.354.354a.914.914 0 0 1-1.293 0 1.914 1.914 0 0 0-2.707 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0L1 11.793zm11.646 1.854a1.915 1.915 0 0 0 2.354.279V15H1v-1.867c.737.452 1.715.36 2.354-.28a.914.914 0 0 1 1.292 0c.748.748 1.96.748 2.708 0a.914.914 0 0 1 1.292 0c.748.748 1.96.748 2.707 0a.914.914 0 0 1 1.293 0Z"></path>
                                                    </svg><span>&nbsp;Date of Birth</span></div>
                                                <div class="info-item-value"><span>March 8, 2017</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-geo-alt">
                                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
                                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                                    </svg><span>Address</span></div>
                                                <div class="info-item-value"><span>New York, USA</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-building">
                                                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                                                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"></path>
                                                    </svg><span>School</span></div>
                                                <div class="info-item-value"><span>Lincoln Middle School</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="section-title">Learning Progress</h3>
                                    <div class="mb-3">
                                        <div class="progress-container">
                                            <div class="progress-title"><span>Mathematics</span><span class="progress-percentage">30%</span></div>
                                            <div class="progress">
                                                <div class="bg-warning progress-bar" style="width: 30%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-title"><span>English</span><span class="progress-percentage">15%</span></div>
                                            <div class="progress">
                                                <div class="bg-danger progress-bar" style="width: 15%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-title"><span>Science</span><span class="progress-percentage">5%</span></div>
                                            <div class="progress">
                                                <div class="bg-danger progress-bar" style="width: 5%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-title"><span>Filipino</span><span class="progress-percentage">60%</span></div>
                                            <div class="progress">
                                                <div class="bg-success progress-bar" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h1 class="section-title">Recent Activity</h1>
                                <div class="mb-3">
                                    <div class="activity-item">
                                        <div class="activity-icon blue"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Completed: Lesson 4 -Solving Quadratic Equations</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon green"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Pre Test Done: Lesson 4 - Solving Quadratic Equations</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon gray"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Downloaded: Lesson 4 - Solving Quadratic Equations</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon yellow"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-award">
                                                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"></path>
                                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Earned "Math Whiz" Badge for completing 10 quizzes</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <div class="stat-value"><span>86%</span></div>
                                    <div class="stat-label"><span>Average Score</span></div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value"><span>13</span></div>
                                    <div class="stat-label"><span>Lesson Completed</span></div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value"><span>3</span></div>
                                    <div class="stat-label"><span>Badges Earned</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Manage Task Category -->
    <div class="modal fade" role="dialog" tabindex="-1" id="taskCategoryModal" aria-labelledby="taskCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h6 class="modal-title">Manage Categories</h6><button class="btn-close btn-close-white btn-" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <div class="category-management">
                        <div class="category-header">
                            <h6>Existing Categories</h6>
                        </div>
                        <div class="category-list" id="categoryList"></div>
                        <div class="mt-4 pt-3 add-category-form border-top">
                            <h6>Add New Category</h6>
                            <div class="input-group flex-nowrap mb-3"><input class="form-control form-control form-select-sm" type="text" id="newCategoryName" placeholder="Category name"><button class="btn btn-secondary btn-sm btn-add-category" id="addCategoryBtn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                                    </svg></button></div>
                            <div class="color-picker" id="colorPicker"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Task -->
    <div class="modal fade" role="dialog" tabindex="-1" id="taskDetailModal" aria-labelledby="taskDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h6 class="modal-title">Task Details</h6><button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body m-2 admin-profile-modal-body">
                    <div class="task-details">
                        <div class="mb-3"><label class="form-label fw-bold" for="taskTitle-1">Task Title</label>
                            <p id="detailTitle" class="form-control-plaintext">Upload Science Lesson 1</p>
                        </div>
                        <div class="mb-3"><label class="form-label fw-bold" for="taskDescription-2">Description</label>
                            <p id="detailDescription" class="form-control-plaintext">Discuss Q4 goals and project timelines.</p>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="fw-bold form-label" for="taskDueDate">Due Date</label>
                                <p id="detailDate" class="form-control-plaintext">October 27, 2025</p>
                            </div>
                            <div class="col-md-6"><label class="fw-bold form-label">Status</label><span id="detailStatus" class="badge status-task-pending">Pending</span></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="fw-bold form-label" for="taskCategory-1">Category</label><span id="detailCategory" class="badge-personal badge">Personal</span></div>
                            <div class="col-md-6"><label class="fw-bold form-label" for="taskPriority-1">Priority Level</label><span id="detailPriority" class="badge priority-low">Low Priority</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal (Reusablefor simple Deletion) -->
    <div class="modal fade" role="dialog" tabindex="-1" id="deleteModal" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg border-0 rounded-2">
                <div class="modal-body text-center m-3"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-triangle-fill text-danger mb-2">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                    </svg>
                    <p class="mb-2" style="font-size: 18px;">Are you sure you want to delete this subject?</p>
                    <p class="text-muted small" style="font-size: 15px;">This action cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center"><button class="btn btn-light px-4" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn px-4 deleteSub-btn" type="button">Delete</button></div>
            </div>
        </div>
    </div>

    <!-- Lesson Sucess Publication -->
    <div class="modal fade" role="dialog" tabindex="-1" id="publishSuccessModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle-fill text-success">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                        </svg></div>
                    <h4 class="fw-bold mb-2">Lesson Published!</h4>
                    <p class="text-muted mb-3">Your lesson is now live and ready for pupils to view in the mobile app.</p><button class="btn btn-success rounded-pill px-4 py-2 close-modal" type="button" data-bs-dismiss="modal">Got it!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3 toast-container" id="global-toast-container" style="z-index: 9999;"></div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="{{ asset('assets/js/allchart.js') }}"></script>
    <script src="{{ asset('assets/js/file&Videothumbnail.js') }}"></script>
    <script src="{{ asset('assets/js/postquizBuilder.js') }}"></script>
    <script src="{{ asset('assets/js/prequizBuilder.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/confetti.browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/taskManager.js') }}"></script>
    <script src="{{ asset('assets/js/toast-manager.js') }}"></script>
</body>

</html>