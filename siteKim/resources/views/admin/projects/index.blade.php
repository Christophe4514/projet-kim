@extends('admin_layout.admin')
@section('title')
    Projects
@endsection
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Projects</li>
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
                                <h3 class="card-title">Tous les Projects de CDS</h3>
                            </div>
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>Description</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Service</th>
                                            <th>Partenaire</th>
                                            <th>Durée</th>
                                            <th>Vues</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $key => $project)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $project->project_name }}</td>
                                                <td>{{ $project->project_description }}</td>
                                                <td>

                                                    <img src="storage/project_images/{{ $project->project_image1 }}"
                                                        style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                        alt="project Image">
                                                </td>
                                                <td>

                                                    <img src="storage/project_images/{{ $project->project_image2 }}"
                                                        style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                        alt="project Image">
                                                </td>
                                                <td>{{ $project->project_service }}</td>
                                                <td>{{ $project->client_name }}</td>
                                                <td>{{ $project->duree }}</td>
                                                <td>{{ $project->nbre_visites() }}</td>
                                                <td>
                                                    @permission('Project', 'read')
                                                        <a class="btn btn-secondary" href="#"><i
                                                                class="nav-icon fas fa-file"></i></a>
                                                    @endpermission
                                                    @permission('Project', 'update')
                                                        <a class="btn btn-primary"
                                                            href="{{ route('projects.edit', $project->id) }}"><i
                                                                class="nav-icon fas fa-edit"></i></a>
                                                    @endpermission
                                                    @permission('Project', 'delete')
                                                        <a href="#" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#ModalDelete{{ $project->id }}" id="delete"><i
                                                                class="nav-icon fas fa-trash"></i></a>
                                                    @endpermission
                                                    @include('admin.projects.modal.delete')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>Description</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Service</th>
                                            <th>Partenaire</th>
                                            <th>Durée</th>
                                            <th>Vues</th>
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
    <script src="backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="backend/dist/js/bootbox.min.js"></script>
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
