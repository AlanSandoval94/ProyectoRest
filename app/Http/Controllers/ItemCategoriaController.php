<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\itemCategoria as itemCategoriaResource;

class ItemCategoriaController extends Controller
{
    //

    public function index()
    {

    }

    public function store()
    {
    	
    }

    public function show($id)
    {
    	return new itemCategoriaResource(itemCategoria::find($id));
    }

    public function update()
    {
    	
    }

    public function destroy()
    {
    	
    }
}
