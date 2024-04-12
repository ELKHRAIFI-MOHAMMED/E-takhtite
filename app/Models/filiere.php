<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_filiere',
        'nomber_module'
    ];

    protected $primaryKey = 'id_filiere';

    protected $table = 'filieres';

    public $timestamps = false;

    public function groupes()
    {
        return $this->hasMany(Groupe::class, 'id_filiere', 'id_filiere');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'affectation_module', 'id_filiere', 'id_module');
    }
}
