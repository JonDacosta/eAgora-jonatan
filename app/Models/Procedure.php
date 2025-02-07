<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'publication_type',
        'status',
        'reservations',
        'id_person',
        'expiration',
    ];
}
