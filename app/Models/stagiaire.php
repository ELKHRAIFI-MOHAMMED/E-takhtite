<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_stagiaire',
        'prenom_stagiaire',
        'email',
        'numero',
        'id_groupe',
    ];

    protected $primaryKey = 'id_stagiaire';

    protected $table = 'stagiaires';

    public $timestamps = false;

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'id_groupe', 'id_groupe');
    }
}







