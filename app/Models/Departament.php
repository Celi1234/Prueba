<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departament
 *
 * @property $id
 * @property $departament_name
 * @property $departament_info
 * @property $departament_image
 * @property $created_at
 * @property $updated_at
 *
 * @property CommentsSection[] $commentsSections
 * @property Food[] $foods
 * @property TouristsDestination[] $touristsDestinations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departament extends Model
{
    
    static $rules = [
		'departament_name' => 'required',
		'departament_info' => 'required',
		'departament_image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departament_name','departament_info','departament_image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentsSections()
    {
        return $this->hasMany('App\Models\CommentsSection', 'id_departaments', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foods()
    {
        return $this->hasMany('App\Models\Food', 'id_departaments', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function touristsDestinations()
    {
        return $this->hasMany('App\Models\TouristsDestination', 'id_departaments', 'id');
    }
    

}
