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
        Schema::create('m_authoritys', function (Blueprint $table) {
            $table->comment('権限マスタ');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->string('authority_nm')->length (100)->nullable(true)->comment('権限名');
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
        Schema::dropIfExists('m_authoritys');
    }
};
