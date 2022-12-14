<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $table = 'species';

    protected $fillable = [ 'live', 'name', 'desc' ];

    public function tomcats() {
        return $this->hasMany(Tomcat::class, 'species_id', 'id');
    }
}
