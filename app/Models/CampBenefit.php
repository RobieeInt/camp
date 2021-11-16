<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CampBenefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'camp_id',
        'name'
    ];

    /**
     * Get the user that owns the CampBenefit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function Camp(): BelongsTo
    // {
    //     return $this->hasMany(Camp::class, 'camp_id', 'id');
    // }

    /**
     * Get all of the Camp for the CampBenefit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Camp(): HasMany
    {
        return $this->hasMany(Camp::class);
    }
}
