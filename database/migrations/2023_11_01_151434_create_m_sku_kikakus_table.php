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
        Schema::create('m_sku_kikakus', function (Blueprint $table) {
            $table->comment('SKU_規格マスタ');
            $table->integer('sku_id')->length (5)->primary()->comment('SKUコード');
            $table->integer('kikaku_cd')->length (5)->primary()->comment('規格コード');
            $table->string('standard_nm')->length (50)->comment('規格名');
            $table->string('classification_nm')->length (50)->nullable(true)->comment('分類名');
            $table->string('classification_cd')->length (50)->nullable(true)->comment('分類コード');
            $table->integer('rank')->length (2)->nullable(true)->comment('ランク');
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
        Schema::dropIfExists('m_sku_kikakus');
    }
};
