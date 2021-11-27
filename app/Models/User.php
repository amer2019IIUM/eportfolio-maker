<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

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
     */
    public function educations(): HasMany
    {
        return $this->hasMany( Education::class );
    }
    
     /**
     * @return HasMany
     */
    public function experiences(): HasMany
    {
        return $this->hasMany( Experience::class );
    }

     /**
     * @return HasMany
     */
    public function interests(): HasMany
    {
        return $this->hasMany( Interest::class );
    }

     /**
     * @return HasMany
     */
    public function profiles(): HasMany
    {
        return $this->hasMany( Profile::class );
    }
    
         /**
     * @return HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany( Project::class );
    }

             /**
     * @return HasMany
     */
    public function skills(): HasMany
    {
        return $this->hasMany( Skill::class );
    }
}
