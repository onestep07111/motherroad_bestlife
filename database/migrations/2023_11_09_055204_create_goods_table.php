<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->comment('商品マスタ');
            $table->integer('goods_no')->length (5)->primary()->comment('商品番号');
            $table->string('standard_nm')->length (50)->comment('商品名');
            $table->integer('category_id')->length (3)->nullable(true)->comment('カテゴリID');
            $table->integer('item_cd')->length (3)->nullable(true)->comment('アイテムCD');
            $table->integer('Stock_location')->length (2)->nullable(true)->comment('在庫場所');
            $table->string('supplier')->length (100)->nullable(true)->comment('仕入先');
            $table->integer('Purchase_price')->length (8)->nullable(true)->comment('仕入価格');
            $table->integer('Selling_price')->length (8)->nullable(true)->comment('販売価格');
            $table->integer('Stock_Number')->length (3)->nullable(true)->comment('在庫数');
            $table->integer('rank')->length (3)->nullable(true)->comment('ランク');
            $table->integer('Free_shipping')->length (1)->nullable(true)->comment('送料無料発送');
            $table->string('Product_image')->length (200)->nullable(true)->comment('商品画像');
            $table->integer('In_store_category')->length (3)->nullable(true)->comment('店内カテゴリ');
            $table->integer('yahoo_shipping_pattern')->length (3)->nullable(true)->comment('ヤフオク送料パターン');
            $table->integer('Main_stock_location')->length (3)->nullable(true)->comment('主な在庫場所');
            $table->string('yahoo_goods_nm')->length (100)->nullable(true)->comment('ヤフオク｜商品名');
            $table->integer('exhibition_mall')->length (3)->nullable(true)->comment('出品モール');
            $table->integer('exhibition_status')->length (1)->nullable(true)->comment('出品状態');
            $table->integer('Listing_days')->length (3)->nullable(true)->comment('出品日数');
            $table->date('Order_date')->nullable(true)->comment('受注日');
            $table->date('payment_day')->nullable(true)->comment('入金日');
            $table->integer('sales_mall')->length (3)->nullable(true)->comment('販売モール');
            $table->integer('registered_store')->length (3)->nullable(true)->comment('登録店舗');
            $table->integer('registered_person')->length (3)->nullable(true)->comment('登録者');
            $table->date('registration_date')->nullable(true)->comment('登録日');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('変更日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
};
