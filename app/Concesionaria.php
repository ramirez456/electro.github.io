<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Concesionaria extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'concesionaria';
    protected $fillable = [
        'razon', 'ruc', 'direccion','telefono',
    ];
}
