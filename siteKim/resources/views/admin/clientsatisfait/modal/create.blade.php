{!! Form::open(['route' => 'clientsatisfaits.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
@csrf
<div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Création du Partenaire</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Nom') }}:</strong>
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    {{ Form::label('', 'Image', [
                        'for' => 'exampleInputFile',
                    ]) }}
                        <div class="input-group">
                            <div class="custom-file">
                            {{ Form::file('clientsatisfait_image', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                            {{ Form::label('', 'Choose file', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn gray btn-outline-secondary"
                    data-dismiss="modal">{{ __('quitter') }}</button>
                <button type="submit" class="btn btn-success">{{ __('Ajouter') }}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
<!-- .container-fluid -->
