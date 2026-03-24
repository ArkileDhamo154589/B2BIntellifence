<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    /**
     * Τα πεδία που επιτρέπεται να συμπληρωθούν μαζικά (Mass Assignment).
     */
    protected $fillable = [
        'name',
        'type',
        'status',
        'plan_id',
        'subscription_ends_at',
    ];

    /**
     * Casts για αυτόματη μετατροπή τύπων δεδομένων.
     */
    protected $casts = [
        'subscription_ends_at' => 'datetime',
    ];

    /**
     * Σχέση: Μια εταιρεία έχει πολλούς χρήστες.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Σχέση: Μια εταιρεία ανήκει σε ένα Πακέτο (Plan).
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Helper: Έλεγχος αν η εταιρεία είναι ενεργή.
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * Helper: Έλεγχος αν είναι B2B (Provider).
     */
    public function isProvider(): bool
    {
        return $this->type === 'provider';
    }
}
