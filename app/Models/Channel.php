<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'channel_number'];
    protected $with = ['emissions'];


    public function emissions()
    {
        return $this->hasMany(Emission::class);
    }
}
