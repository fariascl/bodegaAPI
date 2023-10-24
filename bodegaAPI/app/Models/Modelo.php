<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $table = 'modelos';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'nombre',
        'marca_id'
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
