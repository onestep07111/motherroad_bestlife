<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_transaction_law;

class TransactionLawIndex extends Component
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
        return view('livewire.transaction-law-index', [
            'transactionLaws' => m_transaction_law::select('id','shop_nm','shop_english_nm','operation_administrator','operation_administrator','operation_english_nm'
            ,'post_code','prefectures','prefectures',"address1",'address2','address1_english','address2_english'
            ,'tel1','tel2','tel3','Store_business_hours','business_license'
            )->paginate(1),
        ]);

    }
}
