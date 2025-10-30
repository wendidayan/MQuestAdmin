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
    <div class="d-flex w-100 justify-content-between align-items-start wrapper">
        <nav class="sidebar hidden open">
            <div class="w-100 sidebar-content">
                <div class="d-flex w-100 h-100 flex-column justify-content-center scrollbar-container"><a class="text-decoration-none text-center d-flex justify-content-center align-items-center gap-1 py-2 sidebar-brand" href="#"><span class="text-uppercase fs-5 fw-bold text-black p-2 me-3 align-middle">MQUEST</span></a>
                    <p class="text-center text-muted mb-3 mx-2 sidebar-subtitle" style="font-size: 16px;">A Matatag E-Learning Application</p>
                    <ul class="list-unstyled position-relative w-100 sidebar-nav" id="sidebarMenu">
                        <li class="text-muted sidebar-header" style="width: 24px;color: var(--bs-emphasis-color);">Menu</li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                                </svg><span class="text-decoration-none align-middle">Dashboard</span></a></li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="#subject-list" data-bs-toggle="collapse" aria-expanded="false" role="button" aria-controls="subject-list"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookmark">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"></path>
                                </svg><span class="text-decoration-none align-middle">Curriculum &amp; Lessons</span></a>
                            <ul class="list-unstyled sidebar-dropdown collapse" id="subject-list" data-bs-parent="#sidebarMenu">
                                <li class="dropdown-item"><a class="sidebar-link" href="#">English</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#">Science</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#">Mathematics</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#">Filipino</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="#usermanagement" data-bs-toggle="collapse" aria-expanded="false" role="button" aria-controls="usermanagement"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                </svg><span class="text-decoration-none align-middle">User Management&nbsp;</span></a>
                            <ul class="list-unstyled sidebar-dropdown collapse" id="usermanagement" data-bs-parent="#sidebarMenu">
                                <li class="dropdown-item"><a class="sidebar-link" href="#">All Users</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#">Admin Users</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="#activitylog" data-bs-toggle="collapse" aria-expanded="false" role="button" aria-controls="activitylog"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock-history">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"></path>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"></path>
                                </svg><span class="text-decoration-none align-middle">Activity Log</span></a>
                            <ul class="list-unstyled sidebar-dropdown collapse" id="activitylog" data-bs-parent="#sidebarMenu">
                                <li class="dropdown-item"><a class="sidebar-link" href="#">User Actions</a></li>
                                <li class="dropdown-item"><a class="sidebar-link" href="#">Admin Actions</a></li>
                            </ul>
                        </li>
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
                    <ul class="list-unstyled position-relative w-100 sidebar-nav" id="sidebarMenu"></ul>
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
        <div class="main-content full-width">
            <nav class="d-flex justify-content-between align-items-center p-4 navbar-main navbar navbar-expand navbar-light"><span class="fs-4 d-flex align-items-center sidebar-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-justify active" id="toggle">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"></path>
                    </svg></span>
                <form class="d-sm-inline-block ps-4" inline="true">
                    <div class="input-group-navbar input-group search-"><input class="form-control" type="text" placeholder="Search here..." aria-label="Search"><button class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                            </svg></button></div>
                </form>
                <div class="navbar-collapse collapse">
                    <div class="ms-auto navbar-align navbar-nav">
                        <div class="position-relative d-flex me-2 nav-item dropdown"><a class="d-flex align-items-center nav-link nav-icon dropdown-toggle" id="element" aria-expanded="false" data-bs-toggle="dropdown">
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
            <div>
                <div class="ms-1 tab-container main-tab"><button class="btn active tab-button" type="button" onclick="switchTab(event, &#39;tab1&#39;)">Create</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab2&#39;)">Lessons</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab3&#39;)">People</button>
                    <div class="tab-indicator"></div>
                </div>
                <div id="tab1" class="tab-content active">
                    <div class="p-3 subject-box">
                        <div class="mb-2 col" style="height: 15rem;     position: relative;     width: 100%;">
                            <div class="mb-2 card english-subject-card">
                                <div class="subject-title">
                                    <h3>English 4</h3>
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
                                <div id="defaultQuarterLabel" style="font-size:0.75rem;color:var(--text-light);"><span class="small"> Default Quarter: </span><strong class="small">None</strong></div><button class="btn btn-secondary" id="setDefaultQuarterBtn" type="button">Set Current as Default</button>
                            </div>
                        </div>
                        <div class="mb-2 form-container lesson-container" id="lessonTemplate-1">
                            <h2 class="p-2">Create Lesson</h2>
                            <section class="main-container-lesson">
                                <h6><span>1&nbsp;</span>Lesson Title</h6>
                                <form>
                                    <div class="form-group lesson-title-wrapper"><input type="text" id="lesson-title-1" placeholder=" " required=""><label for="lesson-title-1">Lesson Title</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="lesson-description-1" placeholder=" " required=""></textarea><label for="lesson-description-1">Lesson Description</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="objectives-1" placeholder=" " required=""></textarea><label for="lesson-description-1">Objectives</label></div>
                                </form>
                            </section>
                            <section class="main-container-lesson">
                                <h6><span>2</span>Pre Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container-1"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType-1">Choose Question Type</label><select class="mb-2 form-select" id="questionType-1">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select><button class="btn mb-3 addQuestion-btn" id="add-question-btn-1" type="button" onclick="addQuestion()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question</button></div>
                            </section>
                            <section class="main-container-lesson">
                                <h6><span>3</span>Games Builder (Optional)</h6>
                                <p class="text-muted mb-2">Create a game activity with 5–10 items (Matching, Flashcard, Fill in the Blank, Spelling, Speak, Image Quiz).</p>
                                <div class="mb-3 quiz"><label class="form-label" for="gametype">Choose a Game Type</label><select class="mb-2 form-select" id="gameSelect">
                                        <option value="" selected="">Select Type</option>
                                        <option value="matching">Matching</option>
                                        <option value="flashcard">Flash Card</option>
                                        <option value="spelling">Spelling</option>
                                        <option value="speak">Speak</option>
                                        <option value="imagequiz">Image Quiz</option>
                                    </select></div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="matching-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Matching Game</h5><button class="btn btn-sm reset-btn" type="button" data-target="matching-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="matching-container"></div><button class="btn mb-3 add-game" id="addMatchingBtn" type="button">Add Another Pair</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="flashcard-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Flashcard Game</h5><button class="btn btn-sm reset-btn" type="button" data-target="flashcard-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="flashcard-container"></div><button class="btn mb-3 add-game" id="addFlashcardBtn" type="button">Add Another Card</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="spelling-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Fill-in-the-Blank</h5><button class="btn btn-sm reset-btn" type="button" data-target="spelling-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="spelling-container"></div><button class="btn mb-3 add-game" id="addSpellingBtn" type="button">Add Another Word</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="speak-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Speech</h5><button class="btn btn-sm reset-btn" type="button" data-target="speak-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="speak-container"></div><button class="btn mb-3 add-game" id="addSpeakBtn" type="button">Add Another Prompt</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="imagequiz-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Image Quiz</h5><button class="btn btn-sm reset-btn" type="button" data-target="imagequiz-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="imagequiz-container"></div><button class="btn mb-3 add-game" id="addImageQuizBtn" type="button">Add Another Image Quiz</button>
                                </div>
                            </section>
                            <section class="main-container-lesson">
                                <div class="row">
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>4</span>Upload Learning Material</h6>
                                        <p class="text-muted">Select a PowerPoint or PDF file (.ppt or .pptx) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone-1"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop files here</p><small class="text-muted">Files Supported: PDF, PPT, PPTX</small><br><label class="btn-upload" for="fileInput-1">Choose File</label><br><small class="text-muted">Maximum size: 5MB</small><input type="file" id="fileInput-1" class="file-input" accept=".ppt,.pptx">
                                            </div>
                                            <div class="mb-3 file-info" id="fileNameDisplay-1">
                                                <p id="fileName-1" class="file-name">Paragraph</p>
                                                <p id="fileSize-1" class="file-size">Paragraph</p>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-3" placeholder=" " required=""><label for="file-title-3">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-4" placeholder=" " required=""><label for="file-title-4">Subtitle</label></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>5</span>Upload Video/s</h6>
                                        <p class="text-muted mb-2">Select a video file (e.g., .mp4, .mov, .webm) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone2-1"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop video here</p><small class="text-muted">Files Supported: MP4, MOV, WEBM&nbsp;</small><br><label class="btn-upload" for="videoInput-1">Choose File</label><br><small class="text-muted">Maximum size: 5MB</small><input type="file" id="videoInput-1" class="video-input" accept="video/*">
                                            </div>
                                            <div id="videoPreview-1" class="video-preview"><video id="previewVideo-1" controls=""></video>
                                                <div class="video-controls"><button id="playPauseBtn-1">Play</button></div>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-5" placeholder=" " required=""><label for="file-title-5">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="video-title-1" placeholder=" " required=""><label for="video-title-1">Subtitle</label></div>
                                            <div class="upload-url-container">
                                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-link-45deg me-2">
                                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"></path>
                                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"></path>
                                                    </svg>Or Add a Video URL</h4>
                                                <div class="url-input-group"><input type="url" id="urlInput" class="url-input" placeholder="https://shareprojectdikename.com/csv-file"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="main-container-lesson">
                                <h6><span>6</span>Post Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container2-1"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType2-1">Choose Question Type</label><select class="mb-2 form-select" id="questionType2-1">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select><button class="btn mb-3 addQuestion-btn" id="add-question-btn2-1" type="button" onclick="addQuestion2()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question</button></div>
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
                            <div class="d-flex flex-wrap gap-3 p-4"><button class="btn me-2 publish-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle me-2">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                    </svg>Publish Lesson</button><button class="btn btn-outline-secondary save-draft-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-save me-2">
                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z"></path>
                                    </svg>Save As Draft</button></div>
                        </div>
                    </div>
                    <div class="create"><button class="btn floating-create-btn" id="createLessonBtn-1" type="button" aria-label="Create Lesson"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                            </svg></button></div>
                </div>
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
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
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
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
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
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
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
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3" class="tab-content">
                    <div class="p-3 people-main-container">
                        <div class="mb-4 teacher-ab">
                            <div class="student-header">
                                <div style="display: flex ;     flex-grow: 1;     flex-wrap: wrap;     align-items: baseline;">
                                    <h2 class="student-title">Teachers</h2>
                                </div>
                            </div>
                            <div class="teacher-item"><img class="img-fluid avatar-teacher" alt="Man with laptop and woman playing cello" width="1080" height="1080" src="assets/img/photo-1755541516453-201559bec161.jpg">
                                <p class="mb-0 teacher-name">Jeffrey Belson</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
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
                                <p class="mb-0 student-name">Anna</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/2.png">
                                <p class="mb-0 student-name">Bella</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/10.png">
                                <p class="mb-0 student-name">Joseph Marco</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="deleteModal" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg border-0 rounded-2">
                <div class="modal-header">
                    <h5 class="modal-title text-danger d-flex align-items-center gap-2" id="deleteModalLabel" style="font-size: 18px;">Confirm Deletion<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-triangle text-danger me-2">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                        </svg></h5><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal" style="font-size: 12px;"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="text-muted mb-2" style="font-size: 18px;">Are you sure you want to delete this subject?</p>
                    <p class="text-secondary small" style="font-size: 15px;">This action cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center"><button class="btn btn-light px-4" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn px-4 deleteSub-btn" type="button">Delete</button></div>
            </div>
        </div>
    </div>
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