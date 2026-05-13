<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('reponses')]
class Reponse extends Model
{
    use HasFactory;

    protected $fillable = array('title');
}
