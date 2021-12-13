<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
<body class="bg-success bg-gradient text-white">

    @extends('layouts.plantilla')
    @section('title','Animales')
    @section('content')
    <div class="container">
        <div class="row bg-danger bg-gradient text-white p-1 text-center"><h3>ANIMALES</h3></div>
        <div class="row">
    <!--directiva de blade-->
    @forelse ($animales as $animal)
    <button class="col-3 btn btn-outline-warning"><div><img src="/img/{{$animal->imagen}}" alt="" style="width:100%;">
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
        <div class="row p-2 mb-2 bg-danger bg-gradient text-white p-1 text-center">
        <p>No hay Animales!</p>
        </div>    
    @endforelse 
   </div>
    @endsection
    </body>