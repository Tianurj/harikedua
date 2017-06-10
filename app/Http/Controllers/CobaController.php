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

    public function indeex ($a)
    {
        $tampilan = coba::where('nama','like', '%'. $a. '%')->orwhere('jurusan','like', '%' .$a. '%')->get();
        return $tampilan;
    }


}