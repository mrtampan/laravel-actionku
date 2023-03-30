<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CobaController extends Controller
{
    public function index(){
        $testi = ['product' => ['desk' => ['price' => 100]]];
        
        dd(Arr::get($testi, 'product.desk.price'));
        // dd($testi['product']['desk']['price']);
    }
}
