<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_terminal;

class TerminalIndex extends Component
{
    public $liveModal = false;//モーダルウインドウ
    public $terminal_nm;//	端末名		
    public $delete_flg;//削除FLG	
    public $Id;
    public $editWork = false;
    public $search='';

    public function showTerminalModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function TerminalPost(){
        $this->validate([
            'terminal_nm' => 'required',
        ]);
        m_terminal::create([
            'terminal_nm' => $this->terminal_nm,
            'delete_flg' => $this->delete_flg,
        ]);
        $this->reset();
    }
    
    public function showEditTerminalModal($id){
        $terminal = m_terminal::findOrFail($id);
        $this->Id = $terminal->id;
        $this->terminal_nm = $terminal->terminal_nm;
        $this->delete_flg = $terminal->delete_flg;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updateTerminal($Id){
        $this->validate([
            'terminal_nm' => 'required',
        ]);
        m_terminal::where('id',$Id)->update([          
            'terminal_nm' => $this->terminal_nm,
            'delete_flg' => $this->delete_flg,
        ]);
        session()->flash('message','更新しました！');
    }
    
    public function deleteTerminal($id){
        $terminal = m_terminal::findOrFail($id);
        $terminal->delete();
        $this->reset();
    }
    
    public function render()
    {
        if( $this->search!="" ){
            return view('livewire.terminal-index', [
                'terminals' => m_terminal::Where('terminal_nm','like','%'.$this->search.'%')
                ->orderBy('id','ASC')->paginate(15),
            ]);
        }else{
            return view('livewire.terminal-index', [
                'terminals' => m_terminal::select('id','terminal_nm','delete_flg')
                ->orderBy('id','ASC')->paginate(15),
            ]);
        }
    }
}
