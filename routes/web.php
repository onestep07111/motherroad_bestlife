<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BookIndex;
use App\Http\Livewire\CompanyIndex;
use App\Http\Livewire\UserinfoIndex;
use App\Http\Livewire\PlaceIndex;
use App\Http\Livewire\TerminalIndex;
use App\Http\Livewire\StoreIndex;
use App\Http\Livewire\ShelfIndex;
use App\Http\Livewire\TransactionLawIndex;
use App\Http\Livewire\GoodsIndex;
use App\Http\Livewire\OrderIndex;
use App\Http\Livewire\SkuIndex;
use App\Http\Livewire\BulkregistrationIndex;
use App\Http\Livewire\BulkregistrationorderIndex;
use App\Http\Livewire\ShippingcsvIndex;
use App\Http\Livewire\PaymentIndex;
use App\Http\Livewire\MastermanagementIndex;
use App\Http\Livewire\DeliveryIndex;
use App\Http\Livewire\BunchIndex;
use App\Http\Livewire\BulkregistrationimageIndex;
use App\Http\Livewire\BulkregistrationorderpaymentIndex;
use App\Http\Livewire\MobileGoodsIndex;
use App\Http\Livewire\MobileGoodsDetailIndex;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/books', BookIndex::class)->name('books.index');
Route::get('/sku', SkuIndex::class)->name('sku.index');
Route::get('/bunch', BunchIndex::class)->name('bunch.index');
Route::get('/delivery', DeliveryIndex::class)->name('delivery.index');
Route::get('/bulkregistration', BulkregistrationIndex::class)->name('bulkregistration.index');
Route::get('/bulkregistrationimage', BulkregistrationimageIndex::class)->name('bulkregistrationimage.index');
Route::get('/bulkregistrationorder', BulkregistrationorderIndex::class)->name('bulkregistrationorder.index');
Route::get('/bulkregistrationorderpayment', BulkregistrationorderpaymentIndex::class)->name('bulkregistrationorderpayment.index');
Route::get('/shippingcsv', ShippingcsvIndex::class)->name('shippingcsv.index');
Route::get('/payment', PaymentIndex::class)->name('payment.index');
Route::get('/mastermanagement', MastermanagementIndex::class)->name('mastermanagement.index');
Route::get('/goods', GoodsIndex::class)->name('goods.index');
Route::get('/order', OrderIndex::class)->name('order.index');
Route::get('/transactionLaws', TransactionLawIndex::class)->name('transactionLaws.index');
Route::get('/terminal', TerminalIndex::class)->name('terminal.index');
Route::get('/stores', StoreIndex::class)->name('stores.index');
Route::get('/shelfs', ShelfIndex::class)->name('shelfs.index');
Route::get('/places', PlaceIndex::class)->name('places.index');
Route::get('/userinfos', UserinfoIndex::class)->name('userinfos.index');
Route::get('/companys', CompanyIndex::class)->name('companys.index');
Route::get('/mobilegoods', MobileGoodsIndex::class)->name('mobilegoods.index');
Route::get('/mobilegoodsdetail', MobileGoodsDetailIndex::class)->name('mobilegoodsdetail.index');
Route::post('/mobilegoods_select', 'MobileGoodsIndex@mobilegoods_select')->name('mobilegoods_select')