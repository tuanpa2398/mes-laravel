<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MES')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/toastify.min.css') }}">
    <link href="{{ asset('assets/boostrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
</head>

<body>
    <div style="background: linear-gradient(180deg,#eaeaed 10%,#e7e7ee 40%,#dedee9,#ced0e2)">
        <div class="d-flex flex-column min-vh-100">
            <div class="d-flex align-items-center justify-content-between px-xl-5">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <div>
                        <img class="" src="{{ asset('assets/images/WLorigin.svg') }}" alt="logo"
                            style="width: 60px; height: 60px;" />
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fw-bold text-uppercase gradient-text">Tuyên Quang</div>
                        <div class="fw-medium" style="font-size: 13px; line-height: 16px; color: #374151;">Nhà máy Thái
                            Bình</div>
                    </div>
                    <div>
                        <i class="fa fa-exchange" aria-hidden="true" style="cursor: pointer"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3 bg-white rounded-3 p-1">
                    <div class="d-flex align-items-center justify-content-center gap-2 px-2 py-2 rounded-3"
                        style="background-color: #17506B;">
                        <svg style="font-size: 24px; color: #FFFFFF;" stroke="currentColor" fill="none" stroke-width="2"
                            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4h6v6h-6z"></path>
                            <path d="M14 4h6v6h-6z"></path>
                            <path d="M4 14h6v6h-6z"></path>
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        </svg>
                        <span class="fw-medium" style="font-size: 18px; color: #FFFFFF; ">Workspace</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 px-2 py-2">
                        <svg style="font-size: 24px" stroke="currentColor" fill="none" stroke-width="2"
                            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z"></path>
                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                            <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05"></path>
                        </svg>
                        <span class="fw-medium" style="font-size: 18px; color: #374151; ">Quản lý người dùng</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 px-2 py-2">
                        <svg style="font-size: 24px" stroke="currentColor" fill="none" stroke-width="2"
                            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                            </path>
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                            </path>
                            <path d="M9 17v-5"></path>
                            <path d="M12 17v-1"></path>
                            <path d="M15 17v-3"></path>
                        </svg>
                        <span class="fw-medium" style="font-size: 18px; color: #374151; ">Báo cáo</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3 bg-white rounded-3 p-1 px-2" style="cursor: pointer">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                                <i class="far fa-bell"></i>
                                <span class="badge badge-warning navbar-badge">15</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"
                                style="left: inherit; right: 0px;">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                                    <span class="float-right text-muted text-sm">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i> 8 friend requests
                                    <span class="float-right text-muted text-sm">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> 3 new reports
                                    <span class="float-right text-muted text-sm">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div>

            </div>
            <div>
                @yield('content')
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/boostrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastify.js') }}"></script>

    @if(session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                gravity: "top",
                position: "center",
                backgroundColor: "#16a34a",
                stopOnFocus: true,
            }).showToast();
        </script>
    @endif

    @if(session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                gravity: "top",
                position: "center",
                backgroundColor: "#dc2626",
                stopOnFocus: true,
            }).showToast();
        </script>
    @endif
</body>

</html>