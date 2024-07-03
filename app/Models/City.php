<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
