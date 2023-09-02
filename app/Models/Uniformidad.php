<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Uniformidad extends Model
{
    use HasFactory, SoftDeletes;

    protected $softDelete = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'color',
        'talla'
    ];

    /**
     * The trabajador that belong to the uniformidad.
     */
    public function trabajadors(): BelongsToMany
    {
        return $this->belongsToMany(Trabajador::class)->withTimestamps();;
    }

}