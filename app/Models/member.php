<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    public $alive = 'yes';

    protected $fillable = [
        'name', 'Age', 'birthdate','pet','alive'

    ];
}
