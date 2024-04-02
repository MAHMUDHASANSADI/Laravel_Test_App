<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $table = "subscriptions";
    protected $fillable = ["subscriptionTitle", "subscriptionBusiness", "subscriptionIcon", "subscriptionPlan", "subscriptionHeading", "subscriptionPrice", "subscriptionFeatures", "subscriptionKey1", "subscriptionKey2", "subscriptionKey3", "subscriptionKey4"];
}
