<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suscription
 *
 * @property $id
 * @property $personal_information
 * @property $suscription_date
 * @property $payment_type
 * @property $card_type
 * @property $id_foods
 * @property $created_at
 * @property $updated_at
 *
 * @property Food $food
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suscription extends Model
{
    
    static $rules = [
		'personal_information' => 'required',
		'suscription_date' => 'required',
		'payment_type' => 'required',
		'card_type' => 'required',
		'id_foods' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personal_information','suscription_date','payment_type','card_type','id_foods'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function food()
    {
        return $this->hasOne('App\Models\Food', 'id', 'id_foods');
    }
    

}
