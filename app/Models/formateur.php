<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'numero_tel',
        'specialiste',
    ];

    protected $primaryKey = 'matricule_formateur';

    protected $table = 'formateurs';

    public $timestamps = true;

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'matricule_formateur', 'matricule_formateur');
    }
}