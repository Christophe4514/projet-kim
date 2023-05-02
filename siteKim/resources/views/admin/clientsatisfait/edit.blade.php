
@extends('admin_layout.admin')

@section('title')
Modification du Partenaire
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('clientsatisfaits.index')}}">Partenaires</a></li>
<li class="breadcrumb-item active">Modifier le Partenaire</li>
@endsection
@section('content')
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modification du Partenaire</h3>
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
      {!! Form::model($clientsatisfait, [
        'method' => 'PATCH',
        'route' => ['clientsatisfaits.update', $clientsatisfait->id],
        'enctype' => 'multipart/form-data',
    ]) !!}
    @csrf
    <div class="card-body">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Nom') }}:</strong>
                {!! Form::text('designation', null, ['placeholder' => 'Titre', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            {{ Form::label('', 'Image', [
                'for' => 'exampleInputFile',
            ]) }}
            <div class="input-group">
                <div class="custom-file">
                    {{ Form::file('logo_client', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                    {{ Form::label('', 'Choose file', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
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



