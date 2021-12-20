<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory,HasApiTokens;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'linkedin',
        'twitter',
        'facebook',
        'github',
        'phone_no',
    ];

     /**
     * @return HasMany
     * Get user's educations
     */
    public function educations(): HasMany
    {
        return $this->hasMany( Education::class );
    }
    
     /**
     * @return HasMany
     * Get user's experiences
     */
    public function experiences(): HasMany
    {
        return $this->hasMany( Experience::class );
    }

     /**
     * @return HasMany
     * Get user's interests
     */
    public function interests(): HasMany
    {
        return $this->hasMany( Interest::class );
    }

     /**
     * @return HasMany
     * Get user's profiles
     */
    public function profiles(): HasMany
    {
        return $this->hasMany( Profile::class );
    }
    
         /**
     * @return HasMany
     * Get user's projects
     */
    public function projects(): HasMany
    {
        return $this->hasMany( Project::class );
    }

             /**
     * @return HasMany
     * Get user's skills
     */
    public function skills(): HasMany
    {
        return $this->hasMany( Skill::class );
    }
}
