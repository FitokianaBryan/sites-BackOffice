<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;
    protected $table = 'auteur';
    protected $fillable = ['id','nom','prenom','email','password'];
    public $timestamps = false;
}
