<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後端管理</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap5.min.css') }}">

    @yield('css')

</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        {{-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form> --}}
        <!-- Navbar-->
        
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    
                    <li><a class="dropdown-item" href="{{ asset('/backend/logout') }}">登出</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">管理者管理</div>
                        <a class="nav-link" href="{{ asset('backend/admin') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            管理者管理
                        </a>
                        <div class="sb-sidenav-menu-heading">系統管理</div>
                        <a class="nav-link collapsed" href="{{ asset('backend/product') }}" >
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            產品管理
                        </a>

                        <a class="nav-link collapsed" href="{{ asset('backend/ship') }}" >
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            運送方式管理
                        </a>

                        <div class="sb-sidenav-menu-heading">訂單管理</div>
                        <a class="nav-link" href="{{ asset('backend/order') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            訂單管理
                        </a>

                        <div class="sb-sidenav-menu-heading">內容管理</div>

                        <a class="nav-link collapsed" href="{{ asset('backend/qa') }}" >
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Q & A 管理
                        </a>
                        <a class="nav-link collapsed" href="{{ asset('backend/news') }}" >
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            最新消息管理
                        </a>
                        <a class="nav-link collapsed" href="{{ asset('backend/about-us') }}" >
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            關於我們管理
                        </a>
                        <a class="nav-link collapsed" href="{{ asset('backend/policies') }}" >
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            政策管理
                        </a>
                        <a class="nav-link collapsed" href="{{ asset('backend/mail_notify') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Mail 樣板管理
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            
        </div>
    </div> <!-- Page Wrapper -->

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}""></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap5.min.js') }}"></script>

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


    @yield('js')

    <script>
        new DataTable('#datatables');
    </script>

    @if (Session::has('message'))
        <script>
            alert('{{ Session::get('message') }}')
        </script>
    @endif

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

</body>

</html>
