<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

  public function achievements(): \Illuminate\Database\Eloquent\Relations\HasMany
  {
    return $this->hasMany(Achievement::class, 'rank_id', 'id');
  }
}
