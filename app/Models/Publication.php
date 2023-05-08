<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publication';
    protected $fillable = ['id','idarticle','etat','publish_at','update_at'];
    public $timestamps = false;
}
