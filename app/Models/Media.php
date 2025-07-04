<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Media extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class,'post_id');
    }
}
