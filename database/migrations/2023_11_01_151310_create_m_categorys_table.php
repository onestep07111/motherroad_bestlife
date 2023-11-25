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
        Schema::create('m_categorys', function (Blueprint $table) {
            $table->comment('カテゴリマスタ');
            $table->integer('id')->length (5)->primary()->comment('カテゴリID');
            $table->string('category_nm')->length (50)->nullable(true)->comment('カテゴリ名');
            $table->integer('parent_category_id')->length (200)->nullable(true)->comment('親カテゴリID');
            $table->integer('hierarchy')->length (1)->nullable(true)->comment('階層');
            $table->integer('display_rank')->length (2)->nullable(true)->comment('表示ランク');
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
        Schema::dropIfExists('m_categorys');
    }
};
