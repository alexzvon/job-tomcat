<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tomcat extends Model
{
    use HasFactory;

    protected $table = 'tomcat';

    protected $fillable = [
        'species_id',
        'old',
        'name',
        'img'
    ];

    public function species() {
        return $this->hasOne(Species::class, 'id', 'species_id');
    }
}
