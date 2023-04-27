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
        function updateSchoolCache()
        {
            if(Cache::has('schools')){
                Cache::forget('schools');
            }
    
            Cache::rememberForever('schools', function(){
                return School::all();
            });
        }

        static::created(function (School $school) {
            updateSchoolCache();
        });

        static::updated(function(School $school){
            updateSchoolCache();
        });

        static::deleted(function(School $school){
            updateSchoolCache();
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
}
