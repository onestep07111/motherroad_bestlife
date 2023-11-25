<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    use HasFactory;

    protected $table = 'm_users';
    public $timestamps = false;
    
    public function m_user_get(){

        // $this::select('m_sheet_kotei.*')->where('PROGRAM_ID', $program_id)->get();
        
        return $this::select('m_users.*')
        // ->selectRaw('func_operation(m_users.operation) as operationnm')
        ->selectRaw("(CASE m_users.operation WHEN 0 THEN '' WHEN 1 THEN '稼働中' END) AS operationnm")
        ->get();

    }
}
