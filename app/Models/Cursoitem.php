<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cursoitem
 *
 * @property $id
 * @property $curso_id
 * @property $index
 * @property $titulo
 * @property $urlvideo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cursoitem extends Model
{
    
    static $rules = [
		'curso_id' => 'required',
		'index' => 'required',
		'titulo' => 'required',
		'urlvideo' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['curso_id','index','titulo','urlvideo','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    

}
