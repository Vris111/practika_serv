<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonents extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'division',
        'date_of_birth',
        'division_id',
        'divisions',
        'division_name'
    ];
}
