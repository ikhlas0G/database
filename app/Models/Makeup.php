<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makeup extends Model
{
    protected $table = 'makeup';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'name', 'description', 'price', 'discount', 'best_seller', 'new_arrival'];
    use HasFactory;
}
