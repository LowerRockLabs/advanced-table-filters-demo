<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'name',
        'email',
        'password',
        'sort',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active' => 'boolean',
        'sort' => 'integer',
    ];

    protected $with = ['parent:id,name'];

    public function parent(): HasOne
    {
        return $this->hasOne(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasOne(self::class, 'id', 'parent_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    protected function farrr(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => ((! empty($attributes['name']) ? ucfirst($attributes['name']).',' : '').strtolower($attributes['id'])),
        );
    }
}
