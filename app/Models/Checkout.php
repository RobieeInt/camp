<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'camp_id',
        'card_number',
        'cvv',
        'expired',
        'is_paid',
    ];

    public function setExpiredAttribute($value){
        $this->attributes['expired'] = date('Y-m-t', strtotime($value)); //ketika nyimpen kolom expired parsing dlu
    }

    /**
     * Get the Camp that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Camp(): BelongsTo //relasiin checkout ke camp
    {
        return $this->belongsTo(Camp::class);
    }
}
