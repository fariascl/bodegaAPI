<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'marcas';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'nombre'
    ];

    public function modelos()
    {
        return $this->HasMany(Modelo::class);
    }
}
