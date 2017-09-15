<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemCategoria extends Model
{
    //
    public function toArray($request)
{
    return [
        'id' => $this->id,
        'item_name' => $this->item_name,
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'path' => $this->path,
    ];
}
}
