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
        Schema::create('m_payment_methods', function (Blueprint $table) {
            $table->comment('支払方法マスタ');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->string('payment_method_nm')->length (200)->comment('元々の支払い方法');
            $table->integer('payment_classification')->length (2)->nullable(true)->comment('支払い分類');
            $table->integer('start_money')->length (5)->nullable(true)->comment('利用条件開始金額');
            $table->integer('end_money')->length (5)->nullable(true)->comment('利用条件終了金額');
            $table->integer('delete_flg')->length (1)->default(0)->comment('削除FLG');
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
        Schema::dropIfExists('m_payment_methods');
    }
};
