<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


class Trabajador extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'dni',
        'destiny',
        'email',
        'tallaCamiseta',
        'tallaPantalon',
        'tallaCalzado'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    /**
     * The uniformidad that belong to the trabajador.
     */
    public function uniformidads(): BelongsToMany
    {
        return $this->belongsToMany(Uniformidad::class)->withTimestamps();;
    }

    public function getLimitedUniformidads()
    {
        // dd($this->belongsToMany(Uniformidad::class)->withPivot(['created_at', 'trabajador_id', 'uniformidad_id'])->orderByPivot('created_at', 'DESC')->take(4));
        // return  $this->belongsToMany(Uniformidad::class)->withPivot('created_at')->orderByPivot('created_at', 'DESC')->take(3);
        return  $this->belongsToMany(Uniformidad::class)->withPivot('created_at', 'trabajador_id', 'uniformidad_id')->orderByPivot('created_at', 'DESC')->take(2);
    }

    public function getUniformidadsEntregadas()
    {
        // dd($this->belongsToMany(Uniformidad::class)->withPivot(['created_at', 'trabajador_id', 'uniformidad_id'])->orderByPivot('created_at', 'DESC')->take(4));
        // return  $this->belongsToMany(Uniformidad::class)->withPivot('created_at')->orderByPivot('created_at', 'DESC')->take(3);
        return  $this->belongsToMany(Uniformidad::class, 'trabajador_uniformidad', 'trabajador_id', 'uniformidad_id')->withTimestamps();
    }

}