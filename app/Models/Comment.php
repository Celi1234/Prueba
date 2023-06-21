<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @property $id
 * @property $comment_type
 * @property $comment_date
 * @property $id_foods
 * @property $id_departaments
 * @property $id_tourists_destinations
 * @property $created_at
 * @property $updated_at
 *
 * @property Comida $comida
 * @property Departament $departament
 * @property TouristsDestination $touristsDestination
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comment extends Model
{
    
    static $rules = [
		'comment_type' => 'required',
		'comment_date' => 'required',
		'id_foods' => 'required',
		'id_departaments' => 'required',
		'id_tourists_destinations' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comment_type','comment_date','id_foods','id_departaments','id_tourists_destinations'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comida()
    {
        return $this->hasOne('App\Models\Comida', 'id', 'id_foods');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departament()
    {
        return $this->hasOne('App\Models\Departament', 'id', 'id_departaments');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function touristsDestination()
    {
        return $this->hasOne('App\Models\TouristsDestination', 'id', 'id_tourists_destinations');
    }
    

}
