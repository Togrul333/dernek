<?php

namespace App\Models;

use App\Traits\DocumentTrait;
use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Donation extends Model
{
    use HasFactory,TranslationTrait,DocumentTrait;

    protected $guarded = [];

    public $with = ['translation'];

    public function translations()
    {
        return $this->hasMany(DonationTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(DonationTranslation::class)
            ->where('locale',Session::get('locale'));
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function getSlugAttribute()
    {
        return $this->translation->slug;
    }
}
