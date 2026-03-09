<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Importamos el trait
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory, HasUuids; // Activamos la generación automática

    protected $fillable = ['nombre', 'descripcion'];

    /**
     * Si tu columna UUID no es la llave primaria, 
     * Laravel necesita saber cuál es la columna mágica.
     */
    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'uuid'; // Ahora Laravel buscará por esta columna en la base de datos
    }
}