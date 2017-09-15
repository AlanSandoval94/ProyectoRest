<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementosController extends Controller
{
    //
    public function getIndex(){
    	return "Index";
    }

    public function getElementos(){
    	return "Elementos"
    }
}
