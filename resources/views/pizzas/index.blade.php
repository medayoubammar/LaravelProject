
@extends('layouts.app')

@section('content')

<center>
<div class="wrapper index-wrap">
    <!-- @for($i = 0 ; $i < count($pizzas) ; $i++)
           <p>{{$pizzas[$i]['name']}}**price :{{$pizzas[$i]['price']}}</p>
           @endfor
     -->
    <h1>Pizza orders</h1>


    @foreach($pizzas as $i)
    
        <!-- {{$loop->index}}/  {{$i['name']}} --  {{$i['price']}} DT -->

        <!--  name : {{ $i->name }} // type : {{ $i->type }} // toppings : @foreach($i->toppings as $top) *{{ $top }} -->
        <div class="pizza-itemm">
        <img src="/img/pizza.png" alt="pizza icone">
        </div>
        <h4> <a href="/pizzas/{{ $i->id }}">{{ $i->name }}</a> </h4>
       
       <!-- @endforeach -->
      

    @endforeach

</div>

@endsection