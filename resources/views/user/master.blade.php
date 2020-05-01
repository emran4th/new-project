<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.partials._head')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('user.partials._sidebar')

        <!-- top navigation -->
        @include('user.partials._topbar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    @yield('page_title')
                </div>
                <div class="clearfix"></div>
                @yield('page_container')
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
@include('user.partials._script')
@include('sweetalert::alert')
</body>
</html>
