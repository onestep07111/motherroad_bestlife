<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Goods;
use App\Models\m_user;
use App\Models\m_authority;

class GoodsIndex extends Component
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

    public function showgoodsModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function goodsPost(){
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
    
    public function showEditgoodsModal(){
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updategoods($Id){
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
    
    public function deletegoods($id){
        $goods = m_user::findOrFail($id);
        $goods->delete();
        $this->reset();
    }

    public function render()
    {
        $authoritys = m_authority::select('id','authority_nm');
        if( $this->search!="" ){
            return view('livewire.goods-index',compact('authoritys'), [
                'goods' => Goods::Where('user_name','like','%'.$this->search.'%')
                ->orderBy('id','DESC')->paginate(15),authoritys,
            ]);
        }else{
            return view('livewire.goods-index',compact('authoritys'), [
                'goods' => Goods::select('goods_no','standard_nm','disp_item_nm','category_id','Stock_location','Stock_location2','Purchase_price','Selling_price','Stock_Number','yahoo_shipping_pattern','yahoo_goods_nm','registered_store','registered_person','registration_date','Product_image')
                ->orderBy('goods_no','DESC')->paginate(5),
            ]);
        }
    }
}
