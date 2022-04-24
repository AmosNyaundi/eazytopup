<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    protected $table = 'agents';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    // protected $fillable = [
    //     'uniqueId',
    //     'ref',
    //     'name',
    //     'phone',
    //     'region',
    //     'status',
    // ];

    // public function commission()
    // {
    //     return $this->belongsTo(Commission::class);
    // }

    // public function client()
    // {
    //     return $this->belongsTo(Clients::class);
    // }


}
