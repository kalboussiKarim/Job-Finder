<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'url',
        'salary',
        
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

   
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name'=> $name]);
        $this->tags()->attach($tag);
    }
}
