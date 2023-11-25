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
        Schema::create('m_order_statuses', function (Blueprint $table) {
            $table->comment('注文ステータスマスタ');
            $table->integer('status')->length (1)->primary()->comment('ステータス');
            $table->integer('picking')->length (1)->default(0)->comment('ピッキング対象');
            $table->integer('shipping')->length (1)->default(0)->comment('出荷対象');
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
        Schema::dropIfExists('m_order_statuses');
    }
};
