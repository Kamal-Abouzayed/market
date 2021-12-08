@include('dashboard.partials.header')
@include('dashboard.partials.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('dashboard.partials.navbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@include('dashboard.partials.footer')
