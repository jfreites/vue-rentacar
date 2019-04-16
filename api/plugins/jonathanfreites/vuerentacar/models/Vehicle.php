<?php namespace JonathanFreites\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jonathanfreites_vuerentacar_vehicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
