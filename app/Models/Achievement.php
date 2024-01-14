<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
  use HasFactory;

  protected $guarded = ['id'];
  protected $with = ['rank', 'level', 'user'];

  public function rank(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(Rank::class, 'rank_id', 'id');
  }

  public function level()
  {
    return $this->belongsTo(Level::class, 'level_id', 'id');
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }
}
