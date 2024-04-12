<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'numero_tel',
        'specialiste',
    ];

    protected $primaryKey = 'matricule_vacataire';

    protected $table = 'vacataires';

    public $timestamps = true;

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'matricule_formateur', 'matricule_vacataire');
    }
}