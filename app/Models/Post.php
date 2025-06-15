<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'user_id');
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,'post_tag');
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'post_category');
    }
    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }
}
