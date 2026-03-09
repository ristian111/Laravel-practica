<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Importamos el trait
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory, HasUuids; // Inyectamos metodos a esta clase

    protected $fillable = ['nombre', 'precio_venta', 'precio_compra', 'unidad_medida', 'categoria_id'];

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

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
