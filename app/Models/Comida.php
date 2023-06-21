<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comida
 *
 * @property $id
 * @property $food_name
 * @property $food_recipe
 * @property $ingredient
 * @property $id_departaments
 * @property $created_at
 * @property $updated_at
 *
 * @property CommentsSection[] $commentsSections
 * @property Departament $departament
 * @property Suscription[] $suscriptions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comida extends Model
{
    
    static $rules = [
		'food_name' => 'required',
		'food_recipe' => 'required',
		'ingredient' => 'required',
		'id_departaments' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['food_name','food_recipe','ingredient','id_departaments'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentsSections()
    {
        return $this->hasMany('App\Models\CommentsSection', 'id_foods', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departament()
    {
        return $this->hasOne('App\Models\Departament', 'id', 'id_departaments');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suscriptions()
    {
        return $this->hasMany('App\Models\Suscription', 'id_foods', 'id');
    }
    

}
