<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Odonto Misiones</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin-lte//plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    {{-- Select con buscador --}}
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/admin-lte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('assets/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/admin-lte/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('assets/extensiones/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    {{-- Toastr --}}
    <link href="{{asset('assets/extensiones/toastr/toastr.min.css')}}" rel="stylesheet" />


    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset("assets/admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css") }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('admin-lte.navbar')

        @include('admin-lte.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <br>
            <div class="container-fluid">
                @yield('content')
            </div>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="{{asset('assets/admin-lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('assets/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/admin-lte/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/admin-lte/dist/js/demo.js')}}"></script>
    {{-- Datatable --}}
    <script src="{{asset('assets/extensiones/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/extensiones/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    {{-- Scrip para cargar el datatable --}}
    <script src="{{asset('assets/js/incluirDatatable.js')}}"></script>
    {{-- Toastr --}}
    <script src="{{asset('assets/extensiones/toastr/toastr.min.js')}}"></script>
    {{-- Multiselect (Select2) --}}
    <script src="{{asset('assets/extensiones/select2/js/select2.full.min.js')}}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset("assets/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js") }}"></script>

    {{-- Si el mensaje que enviamos es success --}}
    @if (session('success'))
    <script>
        toastr.success(' {{ session('success') }} ', 'Correcto')
    </script>
    @endif
    {{-- Si el mensaje que enviamos es error --}}
    @if (session('error'))
    <script>
        toastr.error(' {{ session('error') }} ', 'Error')
    </script>
    @endif

    @stack('scripts')
    {{-- stack es para que cualquiera otra pagina tenga los scripts --}}
</body>

</html>
