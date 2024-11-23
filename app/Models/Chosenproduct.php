<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chosenproduct extends Model
{
    protected $table = 'chosen_product';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'name', 'description', 'price', 'discount', 'best_seller', 'new_arrival', 'quantity'];
    use HasFactory;
}
