<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'city',
        'address',
        'email',
        'phoneNumber',
        'cv',
        'gitHub',

    ];
}
