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
        Schema::create('m_transaction_laws', function (Blueprint $table) {
            $table->comment('特定商取引法マスタ');
            $table->integer('id')->length (5)->primary()->comment('特定商取引法ID');
            $table->string('shop_nm')->length (200)->comment('ショップ名');
            $table->string('shop_english_nm')->length (200)->nullable(true)->comment('ショップ名(英語表記）');
            $table->string('operation_administrator')->length (50)->nullable(true)->comment('運営責任者');
            $table->string('operation_english_nm')->length (200)->nullable(true)->comment('運営責任者(英語表記）');
            $table->string('post_code')->length (7)->nullable(true)->comment('郵便番号');
            $table->integer('prefectures')->length (2)->nullable(true)->comment('都道府県コード');
            $table->string('address1')->length (200)->nullable(true)->comment('住所１');
            $table->string('address2')->length (200)->nullable(true)->comment('住所２');
            $table->string('address1_english')->length (200)->nullable(true)->comment('住所(英語表記)１');
            $table->string('address2_english')->length (200)->nullable(true)->comment('住所(英語表記)２');
            $table->string('tel1')->length (4)->nullable(true)->comment('電話１');
            $table->string('tel2')->length (4)->nullable(true)->comment('電話２');
            $table->string('tel3')->length (4)->nullable(true)->comment('電話３');
            $table->string('Store_business_hours')->length (50)->nullable(true)->comment('店舗営業時間');
            $table->string('business_license')->length (50)->nullable(true)->comment('営業許可免許');
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
        Schema::dropIfExists('m_transaction_laws');
    }
};
