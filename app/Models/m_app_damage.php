<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_app_damage extends Model
{
    use HasFactory;
    protected $fillable = ['item_id','title','description','parent_id','rank','delete_flg'];
}
