<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $categoria_id
 * @property $docente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Cursoitem[] $cursoitems
 * @property Docente $docente
 * @property Listadeseo[] $listadeseos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'categoria_id' => 'required',
		'docente_id' => 'required',
        'imagen' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','categoria_id','docente_id', 'imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursoitems()
    {
        return $this->hasMany('App\Models\Cursoitem', 'curso_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listadeseos()
    {
        return $this->hasMany('App\Models\Listadeseo', 'curso_id', 'id');
    }
    

}
