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
        Schema::create('m_masters', function (Blueprint $table) {
            $table->comment('マスタ設定');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->string('category')->length (50)->comment('カテゴリ');
            $table->string('data1')->length (200)->nullable(true)->comment('データ1');
            $table->string('data2')->length (200)->nullable(true)->comment('データ2');
            $table->string('data3')->length (200)->nullable(true)->comment('データ3');
            $table->string('data4')->length (200)->nullable(true)->comment('データ4');
            $table->string('data5')->length (200)->nullable(true)->comment('データ5');
            $table->string('data6')->length (200)->nullable(true)->comment('データ6');
            $table->string('data7')->length (200)->nullable(true)->comment('データ7');
            $table->string('data8')->length (200)->nullable(true)->comment('データ8');
            $table->string('data9')->length (200)->nullable(true)->comment('データ9');
            $table->string('data10')->length (200)->nullable(true)->comment('データ10');
            $table->string('data11')->length (200)->nullable(true)->comment('データ11');
            $table->string('data12')->length (200)->nullable(true)->comment('データ12');
            $table->string('data13')->length (200)->nullable(true)->comment('データ13');
            $table->string('data14')->length (200)->nullable(true)->comment('データ14');
            $table->string('data15')->length (200)->nullable(true)->comment('データ15');
            $table->string('data16')->length (200)->nullable(true)->comment('データ16');
            $table->string('data17')->length (200)->nullable(true)->comment('データ17');
            $table->string('data18')->length (200)->nullable(true)->comment('データ18');
            $table->string('data19')->length (200)->nullable(true)->comment('データ19');
            $table->string('data20')->length (200)->nullable(true)->comment('データ20');
            $table->string('row_id')->length (200)->nullable(true)->comment('列ID');
            $table->integer('rank')->length (3)->nullable(true)->comment('列ID');
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
        Schema::dropIfExists('m_masters');
    }
};
