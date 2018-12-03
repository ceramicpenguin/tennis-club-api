<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model {

    protected $fillable = ['name'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
