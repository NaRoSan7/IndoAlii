<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indoali extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeGato',
        'MarcaGato'
    ];
 }
