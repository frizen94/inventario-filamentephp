<?php

namespace App\Models;

use App\Traits\HasEncryptedAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Weapon extends Model
{
    use HasFactory, HasEncryptedAttributes;

    protected $fillable = [
        'serial_number',
        'model',
        'manufacturer',
        'caliber',
        'status',
        'notes',
        'equipment_type_id',
        'user_id',
    ];

    protected $encrypted = [
        'serial_number',
        'notes',
    ];

    public function equipmentType(): BelongsTo
    {
        return $this->belongsTo(EquipmentType::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
