<form class="form" method="POST" action="{{ url('') }}/trabajadores" enctype="multipart/form-data">
    @csrf
<div class="pl-4 mb-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Ingrese Informacion de la Empresa</h4>
            <form class="mt-3 form-horizontal">
                <div class="row">
                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Selecciona un plan</label>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="id_plancontableamarre" required>
                                @foreach ($plancontables as $plancontable)
                                    <option value="{{ $plancontable->id }}"> {{ $plancontable->id }}-{{ $plancontable->descripcion_plancontable }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Selecciona DEBE </label>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="id_plancontabledebe" required>
                                @foreach ($plancontables as $plancontable)
                                    <option value="{{ $plancontable->id }}">{{ $plancontable->elemento_plancontable }}{{ $plancontable->descripcion_plancontable }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Selecciona un HABER</label>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="id_plancontablehaber" required>
                                @foreach ($plancontables as $plancontable)
                                    <option value="{{ $plancontable->id }}">{{ $plancontable->elemento_plancontable }} {{ $plancontable->descripcion_plancontable }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">estado_amarre</label>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="estado_amarre" value="{{ old('estado_amarre') }}" placeholder="RUC-10 CIFRAS">
                        </div>
                    </div>

                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">tiposaldo_amarre</label>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="tiposaldo_amarre" value="{{ old('tiposaldo_amarre') }}" placeholder="RUC-10 CIFRAS">
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>
<ul class="list-inline text-center mt-4 mb-0">
    <button type="submit" class="btn btn-success mr-2">Guardar</button>
</ul>
</form>

