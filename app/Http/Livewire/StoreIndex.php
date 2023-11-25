<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_store;

class StoreIndex extends Component
{
    public $title;//タイトル
    public $newImage;//画像
    public $price;//価格
    public $description;//詳細
    public $Id;
    public $oldImage;
    public $editWork = false;
    public $search='';

    public function showBookModal(){
        $this->reset();
        $this->liveModal = true;
    }
    
    public function companyPost(){
        $this->validate([
            'title' => 'required',
            'newImage' => 'image|max:2048',
            'price' => 'integer|required',
            'description' => 'required',
        ]);
        $image = $this->newImage->store('public/books');
        Book::create([
            'title' => $this->title,
            'image' => $image,
            'price' => $this->price,
            'description' => $this->description,
        ]);
        $this->reset();
    }
    
    public function showEditBookModal($id){
        $book = Book::findOrFail($id);
        $this->Id = $book->id;
        $this->title = $book->title;
        $this->oldImage = $book->image;
        $this->price = $book->price;
        $this->description = $book->description;
        $this->editWork = true;
        $this->liveModal = true;
    }
    
    public function updateBook($Id){
        $this->validate([
            'title' => 'required',
            'price' => 'integer|required',
            'description' => 'required',
        ]);
        if($this->newImage){
            $image = $this->newImage->store('public/books');             
            Book::where('id',$Id)->update([          
                    'title' => $this->title,
                    'image' => $image,
                    'price' => $this->price,
                    'description' => $this->description,
            ]);
        }else{         
            Book::where('id',$Id)->update([          
                    'title' => $this->title,
                    'price' => $this->price,
                    'description' => $this->description,
            ]);
        }
        session()->flash('message','更新しました！');
    }
    
    public function deleteBook($id){
        $book = Book::findOrFail($id);
        Storage::delete($book->image);
        $book->delete();
        $this->reset();
    }
    
    public function render()
    {   
        return view('livewire.store-index', [
            'stores' => m_store::select('id','store_nm','store_type','store_master_id','mail_send_acount'
            ,'tax_kbn','business_manager_id','business_manager_password','yahoo_id','yahoo_password','public_key'
            ,'public_key_version','yahoo_token','store_id','zip_size','bid_notification_email','bid_inventory','auto_relisting_enddate','auto_relisting_endtime'
            ,'auction_end_relisting','image_join','max_image_sheets','max_image_join','master_column'
            )->paginate(1),
        ]);

    }
}
