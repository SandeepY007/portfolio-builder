<?php

namespace App\Models;

use App\Enums\SkillStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => SkillStatusEnum::class
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
