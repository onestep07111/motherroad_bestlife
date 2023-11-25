<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_place;

class BulkregistrationIndex extends Component
{
    public $liveModal = false;//モーダルウインドウ
    public $place_nm;//場所名	
    public $delete_flg;//削除FLG	
    public $Id;
    public $editWork = false;
    public $search='';

    public function showPlaceModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function PlacePost(){
        $this->validate([
            'place_nm' => 'required',
        ]);
        m_user::create([
            'place_nm' => $this->place_nm,
            'delete_flg' => $this->delete_flg,
        ]);
        $this->reset();
    }
    
    public function showEditPlaceModal($id){
        $place = m_place::findOrFail($id);
        $this->Id = $place->id;
        $this->place_nm = $place->place_nm;
        $this->delete_flg = $place->delete_flg;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updatePlace($Id){
        $this->validate([
            'place_nm' => 'required',
        ]);
        m_place::where('id',$Id)->update([          
            'place_nm' => $this->place_nm,
            'delete_flg' => $this->delete_flg,
        ]);
        session()->flash('message','更新しました！');
    }
    
    public function deletePlace($id){
        $place = m_place::findOrFail($id);
        $place->delete();
        $this->reset();
    }
    
    public function render()
    {
        if( $this->search!="" ){
            return view('livewire.bulkregistration-index', [
                'places' => m_place::Where('place_nm','like','%'.$this->search.'%')
                ->orderBy('id','ASC')->paginate(15),
            ]);
        }else{
            return view('livewire.bulkregistration-index', [
                'places' => m_place::select('id','place_nm','delete_flg')
                ->orderBy('id','ASC')->paginate(15),
            ]);
        }
    }
}
