<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;
    protected $fillable = ['radicado','clienteNombre','contraparteNombre','clienteCedula','contraparteCedula','tipo','clase','anuo','estado','micrositio','emailjuzgado'];

}
