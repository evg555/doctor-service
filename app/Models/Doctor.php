<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 * @package App\Models
 */
class Doctor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'category_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function slots()
    {
        return $this->belongsToMany(Slot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function records()
    {
        return $this->hasManyThrough(Record::class, Slot::class);
    }
}
