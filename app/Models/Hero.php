<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = "hero_sections";
    protected $fillable = ["heroText", "bgImagesLink", "videoLink"];
}
