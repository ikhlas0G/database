<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // hello for somthing new
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'name', 'description', 'price'];

    use HasFactory;
}
