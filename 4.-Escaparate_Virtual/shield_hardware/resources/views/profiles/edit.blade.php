@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Perfil de usuario</div>
				<div class="panel-body">
                                        @if (Session::has('message'))
                                            <p class="alert alert-success"> {{ Session::get('message') }} </p>
					@endif
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whopss!!</strong> Hay algunos problemas con los datos.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                                        {!! Form::model($profile, ['route' => ['profile.users.update', Auth::user()] , 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
                                                        {!! Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                                                    <div class="col-md-6">
                                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escriba su nombre']) !!}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        {!! Form::label('last_name', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}
                                                    <div class="col-md-6">
                                                        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Escriba sus apellidos']) !!}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        {!! Form::label('birthdate', 'Fecha de Nacimiento', ['class' => 'col-md-4 control-label']) !!}
                                                    <div class="col-md-6">
                                                        {!! Form::text('birthdate', null, ['class' => 'form-control', 'placeholder' => 'Escriba su fecha de nacimiento']) !!}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        {!! Form::label('hobbies', 'Aficciones', ['class' => 'col-md-4 control-label']) !!}
                                                    <div class="col-md-6">
                                                        {!! Form::text('hobbies', null, ['class' => 'form-control', 'placeholder' => 'Escriba sus aficciones']) !!}
                                                    </div>
                                                </div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Guardar Cambios
								</button>
							</div>
						</div>
                                </div>
					{!! Form::close() !!}
				</div>
                                 {!! Form::model($profile, ['route' => ['profile.users.destroy', Auth::user()] , 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
                                            <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-danger">
                                                                    Eliminar Usuario
                                                            </button>
                                                    </div>
                                            </div>
                                    {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection