<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class activity extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translations = ['activity_name', 'activity_desc'];
    protected $guarded = ['id'];
}
