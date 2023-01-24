<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    // use HasFactory;
    public $id; //Id vuelo
    public $name; //Nombre del avión
    public $model; //Modelo del avión
    public $yearMade; //Año de fabricación
    public $isActive; //Está operativo para volar
    public $currentAirport; //Aeropuerto actual dónde se encuentra "flying" si está volando
}
