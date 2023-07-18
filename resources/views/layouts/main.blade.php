<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layouts.profile')

    <!-- Main Sidebar Container -->
    @include('layouts.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            @yield('breadcrumb')
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.footer')
</div>
<!-- ./wrapper -->

@include('layouts.scripts')
</body>
</html>
