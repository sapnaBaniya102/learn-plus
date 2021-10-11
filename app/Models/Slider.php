<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
           protected $fillable=(
        [ 'name', 'img_link', 'status', 'header', 'sub_heading', 'text', 'btn', 'btnlink']
    );
}
