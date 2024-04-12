<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_module',
        'masse_horaire',
    ];

    protected $primaryKey = 'id_module';

    protected $table = 'modules';

    public $timestamps = false;

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'id_module', 'id_module');
    }

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class, 'affectation_module', 'id_filiere', 'id_module');
    }
}