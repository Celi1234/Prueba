<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TouristsDestination
 *
 * @property $id
 * @property $name_destination
 * @property $ubication
 * @property $location_history
 * @property $id_departaments
 * @property $created_at
 * @property $updated_at
 *
 * @property CommentsSection[] $commentsSections
 * @property Departament $departament
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TouristsDestination extends Model
{
    
    static $rules = [
		'name_destination' => 'required',
		'ubication' => 'required',
		'location_history' => 'required',
		'id_departaments' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_destination','ubication','location_history','id_departaments'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentsSections()
    {
        return $this->hasMany('App\Models\CommentsSection', 'id_tourists_destinations', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departament()
    {
        return $this->hasOne('App\Models\Departament', 'id', 'id_departaments');
    }
    

}
