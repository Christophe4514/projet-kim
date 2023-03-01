@extends('admin_layout.admin')
@section('title')
    Partenaires
@endsection
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Partenaires</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Partenaires</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-sm-right">
                                            @permission('Clientsatisfait','create')
                                                <a href="#" class="btn btn-success" style="color:white" data-toggle="modal" data-target="#ModalCreate">
                                                    <span style="color:white"></span> {{ __('Ajouter') }}
                                                </a>
                                                @include('admin.clientsatisfait.modal.create')
                                            @endpermission
                                        </div>
                                    </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientsatisfaits as $key => $clientsatisfait)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $clientsatisfait->designation }}</td>
                                                <td>

                                                    <img src="{{asset("storage/clientsatisfait_images/$clientsatisfait->logo_client ")}}"
                                                        style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                        alt="clientsatisfait Image">
                                                </td>
                                                <td>
                                                    @permission('clientsatisfait', 'update')
                                                        <a class="btn btn-primary"
                                                            href="{{ route('clientsatisfaits.edit', $clientsatisfait->id) }}"><i
                                                                class="nav-icon fas fa-edit"></i></a>
                                                    @endpermission
                                                    @permission('clientsatisfait', 'delete')
                                                        <a href="#" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#ModalDelete{{ $clientsatisfait->id }}" id="delete"><i
                                                                class="nav-icon fas fa-trash"></i></a>
                                                    @endpermission
                                                    @include('admin.clientsatisfait.modal.delete')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <!-- DataTables -->
    <script src="{{asset("backend/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("backend/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{asset("backend/dist/js/bootbox.min.js")}}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection