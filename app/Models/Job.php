<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'salary', 'location', 'schedule', 'url', 'featured', 'employer_id'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tag(string $tagName): void
    {
        $tag = Tag::firstOrCreate(['name' => $tagName]);

        $this->tags()->attach($tag);
    }
}
