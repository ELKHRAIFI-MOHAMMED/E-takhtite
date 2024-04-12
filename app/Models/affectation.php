<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule_formateur',
        'matricule_vacataire',
        'id_module',
        'id_groupe',
        'id_filiere',
    ];

    protected $primaryKey = 'id_affectation';

    protected $table = 'affectations';

    public $timestamps = true;

    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'matricule_formateur', 'matricule_vacataire');
    }

    public function vacataire()
    {
        return $this->belongsTo(Vacataire::class, 'matricule_vacataire', 'matricule_vacataire');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module', 'id_module');
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'id_groupe', 'id_groupe');
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_filiere', 'id_filiere');
    }
}
