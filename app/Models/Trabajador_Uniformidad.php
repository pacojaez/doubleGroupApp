<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador_Uniformidad extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trabajador_uniformidad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'trabajador_id',
        'uniformidad_id',
        'created_at',
        'updated_at'
    ];

    // /**
    //  * The event map for the model.
    //  *
    //  * @var array<string, class-string>
    //  */
    // protected $dispatchesEvents = [
    //     'created_at' => TeamCreated::class,
    //     'updated_at' => TeamUpdated::class,
    //     'deleted_at' => TeamDeleted::class,
    // ];
}