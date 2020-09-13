@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <p class="title"> Order for : {{ $pizza->name }} </p>
    <p> type : {{ $pizza->type }} </p>
    <p> coockTime : {{ $pizza->cooktimmme }} </p>
    <p> Extra Toppings : </p>
    <ul>
        @foreach($pizza->toppings as $top)

        <li>
            {{ $top }}
        </li>

        @endforeach
    </ul>
    <div>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn">Complete this order</button>
        </form>

    </div>
</div>
<h5>
    <a href="{{ route('pizzas.index')  }}">back to all pizzas</a>
</h5>
@endsection