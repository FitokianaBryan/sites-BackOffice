<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


use App\Models\Auteur;
use App\Models\Publication;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = ['id','categorie','titre','resume','image','contenu','idauteur'];
    public $timestamps = false;

    public function getAuteur() {
        return Auteur::find($this->attributes['idauteur']);
    }

    public function getPublication() {
        $publication = Publication::firstWhere('idarticle',$this->attributes['id']);
        if($publication) return $publication;
        else return new Publication();
    }

    public function getEtat() {
        $publication = Publication::firstWhere('idarticle',$this->attributes['id']);
        if($publication->etat == 1) return "publié";
        else return "supprimé";
    }

    public function getLastNews() {
        $publication = Publication::latest('published_at')->first();
        return self::find($publication->idarticle);
    }

    public function getSlugtitle() {
        return Str::slug($this->attributes['titre']);
    }

}
