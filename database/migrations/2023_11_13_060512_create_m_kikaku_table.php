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
        Schema::create('m_kikaku', function (Blueprint $table) {
            $table->comment('規格マスタ');
            $table->integer('kikaku_cd ')->length (5)->primary()->comment('規格コード');
            $table->string('kikau_nm')->length (50)->comment('規格名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kikaku');
    }
};
