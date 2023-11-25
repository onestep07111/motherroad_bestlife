<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_user;
use App\Models\m_authority;

class UserinfoIndex extends Component
{
    public $liveModal = false;//モーダルウインドウ
    public $authority;//権限コード	
    public $user_name;//名前
    public $affiliation;//所属
    public $operation;//稼働
    public $loginid;//ログインID	
    public $password;//パスワード	
    public $email;//E-mail	
    public $Id;
    public $editWork = false;
    public $search='';

    public function showUserinfoModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function userinfoPost(){
        $this->validate([
            'authority' => 'required',
            'user_name' => 'required',
            'operation' => 'required',
        ]);
        m_user::create([
            'authority' => $this->authority,
            'user_name' => $this->user_name,
            'affiliation' => $this->affiliation,
            'operation' => $this->operation,
            'loginid' => $this->loginid,
            'password' => $this->password,
            'email' => $this->email,
        ]);
        $this->reset();
    }
    
    public function showEditUserinfoModal($id){
        $userinfo = m_user::findOrFail($id);
        $this->Id = $userinfo->id;
        $this->authority = $userinfo->authority;
        $this->user_name = $userinfo->user_name;
        $this->affiliation = $userinfo->affiliation;
        $this->operation = $userinfo->operation;
        $this->loginid = $userinfo->loginid;
        $this->password = $userinfo->password;
        $this->email = $userinfo->email;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updateUserinfo($Id){
        $this->validate([
            'authority' => 'required',
            'user_name' => 'required',
            'operation' => 'required',
        ]);
        m_user::where('id',$Id)->update([          
            'authority' => $this->authority,
            'user_name' => $this->user_name,
            'affiliation' => $this->affiliation,
            'operation' => $this->operation,
            'loginid' => $this->loginid,
            'password' => $this->password,
            'email' => $this->email,
        ]);
        session()->flash('message','更新しました！');
    }
    
    public function deleteUserinfo($id){
        $userinfo = m_user::findOrFail($id);
        $userinfo->delete();
        $this->reset();
    }
    
    public function render()
    {
        $authoritys = m_authority::select('id','authority_nm');
        if( $this->search!="" ){
            return view('livewire.userinfo-index',compact('authoritys'), [
                'userinfos' => m_user::Where('user_name','like','%'.$this->search.'%')
                ->orderBy('id','DESC')->paginate(15),authoritys,
            ]);
        }else{
            $m_user = new m_user();
            // $userinfos = $m_user->m_user_get::orderBy('id','DESC')->paginate(15);
            return view('livewire.userinfo-index',compact('authoritys'), [
                'userinfos' => m_user::select('id','authority','user_name','affiliation','operation','loginid','password','email')
                ->orderBy('id','DESC')->paginate(15),
            ]);
        }
    }
}
