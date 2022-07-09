<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emission extends Model
{
    use HasFactory;

    protected $fillable = ['channel_id', 'start', 'show_id'];

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
