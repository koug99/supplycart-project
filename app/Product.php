<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    
    //Primary Key
    public $primaryKey = 'id';

    //timestamps
    public $timestamps =true;
}
