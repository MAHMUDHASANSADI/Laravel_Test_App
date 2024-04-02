<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = "about_sections";
    protected $fillable = ["introHeadings", "introImages", "introTexts", "profileHeadings", "profileImages", "profileTexts", "profileFacebook", "profileLinkedIn", "profileTwitter", "faqsTitles", "faqsImage", "faqsQuestion1", "faqsQuestion2", "faqsQuestion3"];
}

