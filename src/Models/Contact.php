<?php

//namespace App\Models;
namespace Bright\Contactform\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        'email',
        'subject',
        'message'
    ];
}
