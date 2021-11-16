<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Camp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'price'
    ];

    public function getIsRegisteredAttribute() {
        if (!Auth::check()) {
            return false;
        }

        return Checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }

    /**
     * Get the Campbenefit that owns the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function Campbenefit(): BelongsTo
    // {
    //     return $this->belongsTo(CampBenefit::class, 'id', 'camp_id');
    // }

    /**
     * Get all of the comments for the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Campbenefit(): HasMany
    {
        return $this->hasMany(Campbenefit::class, 'camp_id', 'id');
    }

    /**
     * The Campbenefit that belong to the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // public function Campbenefit(): BelongsToMany
    // {
    //     return $this->belongsToMany(Campbenefit::class, 'camps', 'id', 'id');
    // }
}
