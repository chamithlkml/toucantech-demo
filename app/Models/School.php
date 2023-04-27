<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class School extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Implementing the created hook event to store school data to the cache
     *
     * @return void
     */
    protected static function booted(): void
    {

        static::created(function (School $school) {
            School::updateSchoolCache();
        });

        static::updated(function(School $school){
            School::updateSchoolCache();
        });

        static::deleted(function(School $school){
            School::updateSchoolCache();
        });
    }

    /**
     * ORM relationship introduction
     *
     * @return HasMany
     */
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }

    public static function updateSchoolCache(): void{
        if(Cache::has('schools')){
            Cache::forget('schools');
        }

        Cache::rememberForever('schools', function(){
            return School::all();
        });
    }
}
