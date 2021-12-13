@extends('layouts.app')

@section('content')
<body class="bg-success bg-gradient text-white">
    {{--@extends('layouts.plantilla')--}}
    @section('title','Animales')
    @section('content')
    
    <div class="container">
        <div class="row bg-danger bg-gradient text-white p-1 text-center"><h3>ANIMALES</h3></div>
        <div class="row">
    <!--directiva de blade-->
    @forelse ($animales as $animal)
    <button class="col-3 btn btn-outline-warning"><div><img src="/img/{{ $animal->imagen }}" alt="" style="width:100%;">
            <div class=""><h3>{{ $animal->especie}}</h3></div>
                            <a href="{{ route('animales.editar', $animal->especie) }}">Editar</a>
                            <a href="{{ route('animales.ver', $animal->especie) }}">Ver</a>
                            <a href="" onclick="if(confirm('¿Eliminar {{ $animal->especie }} ?'))event.preventDefault();
                                document.getElementById('borrar-{{ $animal->especie }}').submit();">Eliminar</a>
                            <form id="borrar-{{ $animal->especie }}" method="post"
                                    action="{{ route('animales.eliminar', $animal->especie)}}">
                                    @csrf
                                    @method('DELETE')
                            </form>
                        
            </div></button>
        @empty
        </div><div class="row bg-danger bg-gradient text-white p-1 text-center">
        <p>No hay Animales!</p>
        </div>    
    @endforelse 
   </div>
    @endsection
    </body>
@endsection