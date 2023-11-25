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
        Schema::create('orders', function (Blueprint $table) {
            $table->comment('注文データ');
            $table->integer('Order_NO')->length (5)->primary()->comment('注文番号');
            $table->string('Order_date')->length (50)->comment('受注日');
            $table->string('status')->length (50)->comment('ステータス');
            $table->string('simei')->length (200)->nullable(true)->comment('お名前');
            $table->string('simei_kananm')->length (50)->comment('お名前(フリガナ)');
            $table->string('prefectures')->length (50)->comment('都道府県');
            $table->string('payment_method')->length (50)->comment('お支払方法');
            $table->string('Payment_day')->length (50)->comment('入金日');
            $table->string('shipment_day')->length (50)->comment('発送日');
            $table->string('delivery_date')->length (50)->comment('お届け日指定');
            $table->string('delivery_time')->length (50)->comment('お届け時間帯指定');
            $table->string('delivery_company')->length (50)->comment('お届け先：配送業者');
            $table->string('Baggage_slip_number')->length (50)->comment('お届け先：お荷物伝票番号');
            $table->string('goods_no')->length (50)->comment('商品コード');
            $table->string('Order_ID')->length (50)->comment('注文ID');
            $table->string('cancel_date')->length (50)->comment('キャンセル日');
            $table->string('delivery_status')->length (50)->comment('配送状況');
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
        Schema::dropIfExists('orders');
    }
};
