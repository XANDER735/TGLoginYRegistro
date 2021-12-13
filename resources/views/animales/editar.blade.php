<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@extends('layouts.app')
@section('content')
<div class="container">
           
    <div class="row p-2 mb-2 bg-primary bg-gradient text-white p-1 text-center"><h1>EDITAR ANIMALES</h1></div>
    <form action="{{ route('animales.actualizar', $animal->especie) }}" method="post">

        @csrf
        <!--directiva metodo patch, o put-->
        @method('patch')
        <div class="row bg-warning bg-gradient text-black">
                        <div class="form-group col order-1 position-relative p-2 mb-2">
                                <label for="">ESPECIE</label>
                                <input class="form-control" type="text" name="especie" value="{{old('especie', $animal->especie) }}"  onchange="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="form-group col order-3 position-relative p-2 mb-2">
                                <label for="">FAMILIA</label>
                                <input class="form-control" type="text" name="familia" value="{{old('familia',$animal->familia) }}"  onchange="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="form-group col order-4 position-relative p-2 mb-2">
                                <label for="">NOMBRE</label>
                                <input class="form-control" type="text" name="nombre" value="{{old('nombre',$animal->nombre) }}"  onchange="javascript:this.value=this.value.toUpperCase();">
                        </div>
        </div>
        <div class="row bg-warning bg-gradient text-black">
                        
                        <div class="form-group col order-2 position-relative p-2 mb-2">
                                <label for="">GENERO</label>
                                <input class="form-control" type="text" name="genero" value="{{old('genero',$animal->genero) }}"  onchange="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="form-group col order-3 position-relative p-2 mb-2">
                                <label for="">LONGEVIDAD</label>
                                <input class="form-control" type="text" name="longevidad" value="{{ old('longevidad',$animal->longevidad) }}">
                        </div>
                        <div class="form-group col order-5 position-relative p-2 mb-2">
                            <label for="">LONGITUD</label>
                            <input class="form-control" type="text" name="longitud" value="{{ old('longitud',$animal->longitud) }}">
                        </div>
                        <div class="form-group col order-4 position-relative p-2 mb-2">
                                <label for="">PESO</label>
                                <input class="form-control" type="text" name="peso" value="{{ old('peso',$animal->peso) }}">
                        </div>

        </div>
        <div class="row">
                <div class="col order-4 p-2 mb-2 bg-warning bg-gradient text-black">
                        <label for="">INFORMACION</label>
                        <textarea class="form-control" name="informacion">{{old('informacion',$animal->informacion) }}</textarea>
                </div>        
        </div>
        <div class="row">
                <div class="col-md-12 col order-4 p-2 mb-2">
                        <input type="file" name="imagen"class="form-control bg-warning bg-gradient text-black" required>
                      </div>
        
    </div>
        <div class="form-group" style="margin-top: 24px;">
                <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>
@endsection