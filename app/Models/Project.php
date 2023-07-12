<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "content",
        "deadline",
        "type_id"
    ];
    public function type() {
        return $this->belongsTo(Type::class);
    }
    public function tag() {
        return $this->belongsToMany(Tag::class);
    }
}
