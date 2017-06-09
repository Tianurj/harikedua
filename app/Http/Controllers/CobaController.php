<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;

class CobaController extends Controller
{
    //
    public function test ()
    {
    	$aa = coba::all();
    	return $aa;
    }

    public function test2 ($id)
    {
    	$aa = coba::find($id);
    	return $aa;
    }

    public function indeex ()
    {
    	$tampilan = coba::all();
    	return view ('indeex', compact('tampilan'));
    }

    public function data ($test)
    {
    	$dutaa = ['binatang' => ['gajah' , 'kucing' , 'anjing' , 'semut' , 'kelinci'],
    			  'kendaraan' => ['motor' , 'mobil' , 'bus' , 'becak' , 'truk'],
    			  'laptop' => ['hp' , 'asus' , 'lenovo' , 'axioo' , 'apple']];
    	$ahaha = $dutaa[$test];
    	return view ('data', compact('ahaha'));
    }

}