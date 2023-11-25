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
        Schema::create('m_shelfes', function (Blueprint $table) {
            $table->comment('棚マスタ');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->string('shelf_nm')->length (100)->comment('棚名');
            $table->integer('display')->length (1)->nullable(true)->comment('アプリ選択肢表示');
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
        Schema::dropIfExists('m_shelfes');
    }
};
