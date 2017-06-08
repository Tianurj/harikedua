<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan ()
    {
    	$a = "2";
    	$b = "2";
    	return view('index', compact('a','b'));
    }



    //
    public function jurusan ()
    {
    	$c = "RPL";
    	$d = "TKR";
    	$e = "TSM";
    	$f = "SENI";
    	$g = "PERAWAT";
    	return view('jrs', compact('c','d','e','f','g'));
    }


    //
    public function kelas ()
    {
    	$h = "X RPL 1";
    	$i = "X RPL 2";
    	$j = "X RPL 3";
    	$k = "XI RPL 1";
    	$l = "XI RPL 3";
    	return view('kls', compact('h','i','j','k','l'));
    }


   //
    public function ekstakulikuller ()
    {
    	$m = "Basket";
    	$n = "Voli";
    	$o = "Futsal";
    	$p = "Marawis";
    	$q = "Osis";
    	return view('eskul', compact('m','n','o','p','q'));
    }


    //
    public function namaguru ()
    {
    	$r = "Lisna";
    	$s = "Sri";
    	$t = "Dewi";
    	$u = "Neneng";
    	$v = "Rizky";
    	return view('guru', compact('r','s','t','u','v'));
    }


    //
    public function matapelajaran ()
    {
    	$w = "Kimia";
    	$x = "Mtk";
    	$y = "Ipa";
    	$z = "Inggris";
    	$aa = "Penjas";
    	return view('matpel', compact('w','x','y','z','aa'));
    }

    public function parameter ($a)
    {
    	return view('welcome2', compact('a'));
    }
    
}
