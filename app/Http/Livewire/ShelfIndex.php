<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_user;
use App\Models\m_authority;
use App\Models\m_shelf;

class shelfIndex extends Component
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

    public function showshelfModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function shelfPost(){
        $this->validate([
            'shelf_nm' => 'required',
        ]);
        m_shelf::create([
            'shelf_nm' => $this->shelf_nm,
            'display' => $this->display,
            'delete_flg' => $this->delete_flg,
        ]);
        $this->reset();
    }
    
    public function showEditShelfModal($id){
        $shelf = m_shelf::findOrFail($id);
        $this->Id = $shelf->id;
        $this->authority = $shelf->authority;
        $this->user_name = $shelf->user_name;
        $this->affiliation = $shelf->affiliation;
        $this->operation = $shelf->operation;
        $this->loginid = $shelf->loginid;
        $this->password = $shelf->password;
        $this->email = $shelf->email;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updateShelf($Id){
        $this->validate([
            'shelf_nm' => 'required',
        ]);
        m_shelf::where('id',$Id)->update([          
            'shelf_nm' => $this->shelf_nm,
            'display' => $this->display,
            'delete_flg' => $this->delete_flg,
        ]);
        session()->flash('message','更新しました！');
    }
    
    public function deleteShelf($id){
        $shelf = m_shelf::findOrFail($id);
        $shelf->delete();
        $this->reset();
    }
    
    public function render()
    {
        if( $this->search!="" ){
            return view('livewire.shelf-index', [
                'shelfs' => m_shelf::Where('shelf_nm','like','%'.$this->search.'%')
                ->orderBy('id','DESC')->paginate(15),
            ]);
        }else{
            return view('livewire.shelf-index', [
                'shelfs' => m_shelf::select('id','shelf_nm','display','delete_flg')
                ->orderBy('id','DESC')->paginate(15),
            ]);
        }
    }
}
