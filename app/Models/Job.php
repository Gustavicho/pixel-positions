<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'salary', 'location', 'schedule', 'url', 'featured', 'employer_id'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
