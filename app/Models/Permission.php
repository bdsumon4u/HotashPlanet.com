<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['group', 'action'];

    protected static function boot()
    {
        static::addGlobalScope('oldest', function ($query) {
            return $query->oldest('id');
        });
    }

    /**
     * All permissions grouped by group.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     * @throws \Exception
     */
    public static function grouped()
    {
        return cache()->rememberForever('permissions', function () {
            return static::all()->groupBy('group');
        });
    }
}
