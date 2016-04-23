<?php namespace Kevupton\Bookings\Models;

use Kevupton\Ethereal\Models\Ethereal;

class Classification extends Ethereal {
    // table name
    protected $table = 'classifications';
    public $primaryKey = 'code';
    public $timestamps = true;

    // validation rules
    public static $rules = array(
        'code' => 'required|code|string|max:5',
        'name' => 'required|string|max:64'
    );

    protected $fillable = array(
        'code', 'name'
    );

    public static $relationsData = array(
        'events' => array(self::HAS_MANY, Event::class),
    );
}
