<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Slot
 * @package App\Models
 */
class Slot extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'start',
        'end'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }


}
