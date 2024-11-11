<?php

// app/Models/Promo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start_date', 'end_date', 'sales_before', 'sales_after', 'description', 'dishes_available', 'image'];


   
}

