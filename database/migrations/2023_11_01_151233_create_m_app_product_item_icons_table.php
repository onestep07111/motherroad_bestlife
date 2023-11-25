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
        Schema::create('m_app_product_item_icons', function (Blueprint $table) {
            $table->comment('商品画像マスタ');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->string('item_id')->length (6)->comment('アイテムID');
            $table->integer('image_path')->length (300)->nullable(true)->comment('画像のパス');
            $table->integer('rank')->length (2)->nullable(true)->comment('ランク');
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
        Schema::dropIfExists('m_app_product_item_icons');
    }
};
