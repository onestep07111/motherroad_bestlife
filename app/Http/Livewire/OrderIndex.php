<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\order;
use App\Models\m_authority;

class OrderIndex extends Component
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

    public function showorderModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function orderPost(){
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
    
    public function showEditorderModal($id){
        $order = m_user::findOrFail($id);
        $this->Id = $order->id;
        $this->authority = $order->authority;
        $this->user_name = $order->user_name;
        $this->affiliation = $order->affiliation;
        $this->operation = $order->operation;
        $this->loginid = $order->loginid;
        $this->password = $order->password;
        $this->email = $order->email;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updateorder($Id){
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
    
    public function deleteorder($id){
        $order = m_user::findOrFail($id);
        $order->delete();
        $this->reset();
    }

    public function render()
    {
        $authoritys = m_authority::select('id','authority_nm');
        if( $this->search!="" ){
            return view('livewire.order-index',compact('authoritys'), [
                'orders' => order::Where('user_name','like','%'.$this->search.'%')
                ->orderBy('id','DESC')->paginate(15),authoritys,
            ]);
        }else{
            return view('livewire.order-index',compact('authoritys'), [
                'orders' => order::select('Order_NO','Order_date','status','simei','simei_kananm','prefectures','payment_method','Payment_day'
                ,'shipment_day','delivery_date','delivery_time','delivery_company','Baggage_slip_number','goods_no','Product_image','goods_nm','Order_ID','cancel_date','delivery_status')
                ->orderBy('Order_NO','DESC')->paginate(5),
            ]);
        }
    }
}
