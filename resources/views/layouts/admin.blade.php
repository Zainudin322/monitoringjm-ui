<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Jasa Marga">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JMLINX') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <!-- Favicon -->
 <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
  

    @stack('css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @if (Auth::user()->role->id == 1)
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon">
            <img src="{{asset('img/jasa.png')}}" width="100%">
            </div> -->
            <!-- <div class="sidebar-brand-text mx-3">JasaMarga <sup>2</sup></div> -->
            <!-- </a> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Nav::isRoute('home') }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>
            <!-- Nav Item -->
            <!-- <li class="nav-item {{ Nav::isRoute('basic.index') }}">
            <a class="nav-link" href="{{ route('basic.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span>
            </a>
        </li>

        <!-- Nav Item
        <li class="nav-item {{ Nav::isRoute('role.index') }}">
            <a class="nav-link" href="{{ route('role.index') }}">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Role</span>
            </a>
        </li> -->

            <!-- Nav Item -->
            <li class="nav-item {{ Nav::isRoute('application.index') }}">
                <a class="nav-link" href="{{ route('application.index') }}">
                    <i class="fas fa-fw fas fa-folder-open"></i>
                    <span>Data Aplikasi</span>
                </a>
            </li>

            <!-- <li class="nav-item {{ Nav::isRoute('group.index') }}">
                <a class="nav-link" href="{{ route('group.index') }}">
                    <i class="fas fa-fw fas fa-layer-group"></i>
                    <span>Data Group</span>
                </a>
            </li> -->

            <!-- Nav Item -->
            <!-- <li class="nav-item {{ Nav::isRoute('permission.index') }}">
            <a class="nav-link" href="{{ route('permission.index') }}">
                <i class="fas fa-fw fa-user-cog"></i>
                <span>Admin</span>
            </a>
        </li> -->

            <a data-toggle="collapse" aria-expanded="false" href="#submenu1"
                class="nav-item {{ Nav::isRoute('#submenu1') }} list-group-item-action bg-dark text-white">
                <div class="nav-link">
                    <i class="fas fa-fw fas fa-cogs"></i>
                    <span class="menu-collapsed">Setting</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="nav-item collapse sidebar-submenu">
                <a class="nav-link" href="{{ route('group.index') }}"
                    class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-fw fas fa-layer-group"></i>
                    <!-- <i class="fas fa-fw fa-users-cog"></i> -->
                    <span class="menu-collapsed">Data Group</span>
                </a>
                {{-- <a class="nav-link" href="{{ route('permission.index') }}"
                    class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span class="menu-collapsed">Admin</span>
                </a> --}}
                <a class="nav-link" href="{{ route('basic.index') }}"
                    class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-fw fa-users"></i>
                    <span class="menu-collapsed">User</span>
                </a>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        @endif

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <a href="{{ route('home') }}">
                    <img src="{{asset('img/LandiNG.png')}}" width="75%">
                </a>    

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="container-fluid">

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- <nav class="navbar navbar-light bg-light">
                                <form class="form-search" method="get" id="s" action="/">
                                    <div class="input-append">
                                        <input type="text" class="input-medium search-query" name="s"
                                            placeholder="Search" value="">
                                        <button type="submit" class="add-on btn btn-sm btn-outline-secondary"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </nav> -->

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                Dropdown - Messages
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li> -->

                            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name
                                        }}</span>
                                    @if (Auth::user()->image == null)
                                    <figure class="img-profile rounded-circle avatar font-weight-bold"
                                        data-initial="{{ Auth::user()->name[0] }}"></figure>
                                    @else
                                    <img class="img-profile rounded-circle avatar font-weight-bold" style="object-fit:cover;" src="{{ asset("images/" . Auth::user()->image . "") }}" alt="">
                                    @endif
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Profile') }}
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('note.index') }}">
                                        <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i> 
                                        Catatan
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Keluar') }}
                                    </a>
                                </div>
                            </li>

                        </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @stack('notif')
                    @yield('main-content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright my-auto">
                        <!-- To the right -->
                        <div class="float-right d-none d-sm-inline">Suported by Allah Swt
                        </div>
                        <!-- Default to the left -->
                        <strong>Copyright &copy; 2021 <a href="https://www.youtube.com/channel/UCVr1sgVvLNTQgOJxHqlDXkQ">Nodi Official</a>.</strong> All rights reserved.
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Apakah anda yakin?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih tombol Keluar untuk meninggalkan akun.</div>
                <div class="modal-footer">
                    <button class="btn " type="button" data-dismiss="modal">{{ __('Batal') }}</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{
                        __('Keluar') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    @stack('js')
</body>

</html>