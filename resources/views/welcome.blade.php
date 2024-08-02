@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


{{--@foreach ($events as $event)
<p>{{ $event -> title}} -- {{$event -> description}}</p>
@endforeach--}}'
{{--endsection no fim do código após o comentário--}}

<div id="search-container" class="col-md-12">
    <h1>Busque um Eventos</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os exemplos dos próximos dias</p>
    @endif
    
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
               <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p> 
               <h5 class="card-title">{{ $event->title}}</h5>
               <p class="card-participants">{{count($event->users)}} Participantes</p>
               <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if (count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p> 
        @endif
    </div>
</div>


{{-- <!--<h1>Algum título</h1>
        <img src="/img/event1.jpg" alt="Banner" width="100%">
        @if(10>5)
        <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if ($nome == "Pedro")
        <p>O nome é Pedro!</p>
        @elseif($nome == "Paulo")
        <p>O nome é {{$nome}} e ele tem {{$idade2}} anos. E ele trabalha de {{$profissao}}.</p>
        @else
        <p>O nome não é Pedro!</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p> {{$i}} - {{ $arr[$i] }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

            @foreach ($nomes as $nome)
            <p> {{ $loop->index }} </p>
                <p>{{ $nome }}</p>
            @endforeach
            
        @php
            $name = "João";
            echo $name;
        @endphp -->--}}

<!--Comentário HTML-->
{{--Este é um comentário do Blade--}}
@endsection