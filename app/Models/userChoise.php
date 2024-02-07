<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userChoise extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    use HasFactory;

    protected $fillable = ['userUniqueIdphp', 'firstChoise', 'secondChoise', 'thirdChoise'];
    protected $attributes = [
        'secondChoise' => '', // Set default value here
        'thirdChoise' => '', // Set default value here
    ];
}
