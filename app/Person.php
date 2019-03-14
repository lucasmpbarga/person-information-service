<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Person extends Eloquent
{
    protected $connection = 'mongodbmlab';
    protected $collection = 'person';

    protected $fillable = ['firstName','lastName','birthday', 'phones'];
}
