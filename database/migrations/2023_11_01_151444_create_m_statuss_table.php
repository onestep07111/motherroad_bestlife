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
        Schema::create('m_statuss', function (Blueprint $table) {
            $table->comment('ステータスマスタ');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->string('status_nm')->length (100)->comment('ステータス名');
            $table->integer('display_seq')->length (2)->nullable(true)->comment('表示順');
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
        Schema::dropIfExists('m_statuss');
    }
};
