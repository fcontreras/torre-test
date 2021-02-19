<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => 'created'
    ];

    protected $fillable = [
        'name',
        'status',
        'description',
        'project_category_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projectCategoryId()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
