
@extends('admin_layout.admin')

@section('title')
Modification du project
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification du project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('projects.index')}}">Projects</a></li>
              <li class="breadcrumb-item active">Edit project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modification d'un project</h3>
              </div>

              @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all(); as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </ul>

              </div>
      @endif
      @if (Session::has('status'))
              <div class="alert alert-success">
                  {{Session::get('status')}}
              </div>
      @endif
      {!! Form::model($project, [
        'method' => 'PATCH',
        'route' => ['projects.update', $project->id],
        'enctype' => 'multipart/form-data',
    ]) !!}
    @csrf
    <div class="card-body">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Nom') }}:</strong>
                {!! Form::text('project_name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Description') }}:</strong>
                {!! Form::textarea('project_description', null, [
                    'class' => 'form-control',
                    'rows' => 2,
                    'name' => 'project_description',
                    'id' => 'project_description',
                    'onkeypress' => "return nameFunction(event);"]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        {{ Form::label('', 'Image 1', [
            'for' => 'exampleInputFile',
        ]) }}
            <div class="input-group">
                <div class="custom-file">
                {{ Form::file('project_image1', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                {{ Form::label('', 'Choose image', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            {{ Form::label('', 'Image 2', [
                'for' => 'exampleInputFile',
            ]) }}
                <div class="input-group">
                    <div class="custom-file">
                    {{ Form::file('project_image2', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                    {{ Form::label('', 'Choose image', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                {{ Form::label('', 'Image 3', [
                    'for' => 'exampleInputFile',
                ]) }}
                    <div class="input-group">
                        <div class="custom-file">
                        {{ Form::file('project_image3', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                        {{ Form::label('', 'Choose image', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    {{ Form::label('', 'Image 4', [
                        'for' => 'exampleInputFile',
                    ]) }}
                        <div class="input-group">
                            <div class="custom-file">
                            {{ Form::file('project_image4', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                            {{ Form::label('', 'Choose image', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    {{Form::label('', 'Project service')}}
                        {{Form::select('project_service', $services, null, ['placeholder'=>'Select service',
                            'class'=>'form-control select2'
                        ])}}
                </div>
    </div>
    <div class="card-footer">
        {{Form::submit('Save', ['class'=>'btn btn-success'])}}
      </div>
      {!! Form::close() !!}
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('scripts')
<!-- jquery-validation -->
<script src="backend/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="backend/plugins/jquery-validation/additional-methods.min.js"></script>



<!-- AdminLTE App -->
<script src="backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script src="backend/dist/js/demo.js"></script>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection


