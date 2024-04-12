<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_groupe',
        'nombre_stagiaire',
        'id_filiere',
        'annee',
    ];

    protected $primaryKey = 'id_groupe';

    protected $table = 'groupes';

    public $timestamps = false;

    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class, 'id_groupe', 'id_groupe');
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_filiere', 'id_filiere');
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'id_groupe', 'id_groupe');
    }
}

