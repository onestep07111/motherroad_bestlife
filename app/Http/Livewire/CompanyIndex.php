<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_company;

class CompanyIndex extends Component
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
        return view('livewire.company-index', [
            'companys' => m_company::select('id','company_nm','company_kana_nm','company_english_nm','chief_administrator'
            ,'order_reception_email','order_reception_email','source_email','send_error_reception','bill_registration_number','regular_holiday'
            ,'tax_rate','tax_rate','free_shipping_conditions','ems_id','ems_password','xml_Service_Site_ID','xml_Service_Password','dhl_export_account'
            )->paginate(1),
        ]);

    }
}
