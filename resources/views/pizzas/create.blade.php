
@extends('layouts.app')
@section('content')
<div class="wrapper creat-pizza">
    <h3>Creat a new pizza</h3>
    <form action="/pizzas" method="POST">
    @csrf
        <label for="names">Your Name:</label>
        <input type="text" name="name" id="name" />
        <label for="types">Your type:</label>
        <select name="type" id="type">
            <option value="thon">thon</option>
            <option value="salami">salami</option>
            <option value="jben">jben</option>
            <option value="scalope">scalope</option>
        </select>
        <label for="coock">Coock Time:</label>
        <input type="number" name="cooktimmme" id="cooktimmmme">
       <div>
           <label>Extra topping:</label><br>
           <input type="checkbox" name="toppings[]" value="frite">frite <br/>
           <input type="checkbox" name="toppings[]" value="catchup">catchup <br/>
           <input type="checkbox" name="toppings[]" value="hrisa">hrisa <br/>
</div> 
        <input type="submit" name="submit" value="OrderPizza">
    </form>
</div>
@endsection