<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $table = 'agents';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    protected $fillable = [
        'uniqueId',
        'ref',
        'name',
        'phone',
        'region',
        'status',
    ];
}
