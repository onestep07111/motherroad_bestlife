<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_kikaku;

class SkuIndex extends Component
{
    public $liveModal = false;//モーダルウインドウ
    public $Sku_nm;//場所名	
    public $delete_flg;//削除FLG	
    public $Id;
    public $editWork = false;
    public $search='';

    public function showSkuModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function SkuPost(){
        $this->validate([
            'Sku_nm' => 'required',
        ]);
        m_user::create([
            'Sku_nm' => $this->Sku_nm,
            'delete_flg' => $this->delete_flg,
        ]);
        $this->reset();
    }
    
    public function showEditSkuModal($id){
        $Sku = m_Sku::findOrFail($id);
        $this->Id = $Sku->id;
        $this->Sku_nm = $Sku->Sku_nm;
        $this->delete_flg = $Sku->delete_flg;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updateSku($Id){
        $this->validate([
            'Sku_nm' => 'required',
        ]);
        m_Sku::where('id',$Id)->update([          
            'Sku_nm' => $this->Sku_nm,
            'delete_flg' => $this->delete_flg,
        ]);
        session()->flash('message','更新しました！');
    }
    
    public function deleteSku($id){
        $Sku = m_Sku::findOrFail($id);
        $Sku->delete();
        $this->reset();
    }
    
    public function render()
    {
        if( $this->search!="" ){
            return view('livewire.sku-index', [
                'Skus' => m_kikaku::Where('kikau_nm','like','%'.$this->search.'%')
                ->orderBy('kikaku_cd','ASC')->paginate(15),
            ]);
        }else{
            return view('livewire.sku-index', [
                'Skus' => m_kikaku::select('kikaku_cd','kikau_nm','delete_flg')
                ->orderBy('kikaku_cd','ASC')->paginate(15),
            ]);
        }
    }
}
