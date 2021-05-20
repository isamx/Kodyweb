<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function ShowOrder()
   {
        $orderDetails = new \stdClass();

        $orderDetails -> ID = 154648;
        $orderDetails -> Date = "11/11/2015";
//        $orderDetails -> Product = ["thatermonser@gmail.com" , "localer@hotrainer.com" , "jokerainer@hotgain.com"];
//        $orderDetails -> Quantity = count($orderDetails->Product);



       return view("orderPage" , compact("orderDetails"));
    }
}
