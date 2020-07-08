@extends('layouts.layout')

    @section('content')
       
       <div class="content">
       <img src="/img/pizza.jpg" alt="Pizza House">
           <div class="title m-b-md">
               <h3>Pizzas Page</h3> 

            <!-- The $name and $age are variables that gets the data passed/sent from the router or controller as variables -->
               <p>{{ $name }}</p>              
               <p>{{ $age }}</p>
             
           </div>

   
       </div>
   
   @endsection    

