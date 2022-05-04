<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // hace referencia al StudentController a la forma 2
    protected $fillable = ['nombre', 'apellido', 'dni', 'email', 'password'];
}
