<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'number',
        'room_id',
        'abonent_id'
    ];
}
