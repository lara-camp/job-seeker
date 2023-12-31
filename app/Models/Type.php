<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $guarded = [];

    public function job_post(): HasMany
    {
        return $this->hasMany(JobPost::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'type_id', 'id');
    }

    // scope function

    public function scopeIsType($q, $type)
    {
        $q->where('type', $type);
    }
}
