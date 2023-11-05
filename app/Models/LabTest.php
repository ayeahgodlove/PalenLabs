<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LabTest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
       "name",
        "category_id",
       "shortName",
       "description",
       "price",
       "icon",
       "image",
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
