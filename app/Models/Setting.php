<?php

namespace App\Models;

use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Setting extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function translations()
    {
        return $this->hasMany(SettingTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(SettingTranslation::class)
            ->where('locale',Session::get('locale'));
    }
    public function translate($code)
    {
        return $this->translations->where('locale',$code)->first();
    }
}
