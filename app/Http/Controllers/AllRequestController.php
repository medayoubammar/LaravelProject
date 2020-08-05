<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\AllRequest;

class AllRequestController extends Controller
{
   
    public function index()
    {
        $order = AllRequest::all();
        return view('home',['order' => $order]);
    }



    public function store()  //addOrder
    {
     $order = new AllRequest;
     $order->quantity = Request('quantity'); //from React
     $order->adress = Request('adress');  // from React
     $order->disc = Request('discreption');  //from React
     $order->Resto_id = auth()->user()->id;
     $order->restoname = auth()->user()->name;
     $order->save();
 
     return redirect('/')->with('msg','thanks for your order ');
 
    }
 
 
 
    public function getorders() //getALL
    {
   $order = AllRequest::all();
   return view('/allorder', ['order' => $order])
 
    }
 
 
    public function getById($id) //getByID
    {
   $order = AllRequest::findOrFail($id);
   return view('order.show', ['order' => $order])
 
    }
 
 
 
    public function destroy($id) //Delete
    {
   $order = AllRequest::findOrFail($id);
   $order->delete();
   return redirect('/allorder');
 
    }
 
    

}
