<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'identifiant',
        'motdepasse',
        'confirmationmotdepasse',
        'nomcomplet',
        'role',
        'restrictionacces',
        'email',
        'telephone',
        'equipe',
        'modedetravail'
        ];
}
