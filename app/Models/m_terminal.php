<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_terminal extends Model
{
    use HasFactory;

    protected $fillable = ['id','terminal_nm','delete_flg'];

}
