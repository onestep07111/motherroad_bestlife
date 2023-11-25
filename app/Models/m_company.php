<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_company extends Model
{
    use HasFactory;

    protected $fillable = ['id','company_nm','company_kana_nm','company_english_nm','chief_administrator'];
}
