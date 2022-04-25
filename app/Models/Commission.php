<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $table = 'purchase';

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agents::class);
    }
}
