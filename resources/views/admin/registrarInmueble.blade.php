@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark mb-3" style="max-width">
                <div class="card-header">{{ __('Registrar Inmueble') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('almacenarInmueble') }}">
                        @csrf
						
                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                            	<input name=precio type="number" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio') }}">
                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        	</div>
                        </div>

                        <div class="form-group row">
                            <label for="alicuota" class="col-md-4 col-form-label text-md-right">{{ __('Alicuota') }}</label>

                            <div class="col-md-6">
                            	<input name="alicuota" type="number" class="form-control @error('alicuota') is-invalid @enderror" value="{{ old('alicuota') }}">
								
								@error('alicuota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        	</div>
                        </div>

						@foreach($types as $type)
							<div class="form-group row mb-0">
	                            <div class="col-md-6 offset-md-4">
									<div class="form-group form-check row mb-0">
									    <input name="type_id" type="radio" value="{{$type->id}}">
									    <label class="form-check-label">{{$type->name}}</label>
									</div>
	                            </div>
                        	</div>
						@endforeach
						
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrar Inmueble') }}
                                </button>
                                <button href="{{url('listadoInmuebles')}}" type="submit" class="btn btn-success">
                                    {{ __('Volver') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

