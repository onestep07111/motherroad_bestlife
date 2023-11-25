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
        Schema::create('m_users', function (Blueprint $table) {
            $table->comment('メンバー管理マスタ');
            $table->integer('id')->length (5)->primary()->comment('ID');
            $table->integer('authority')->length (1)->comment('権限コード');
            $table->string('user_name')->length (100)->nullable(true)->comment('名前');
            $table->string('affiliation')->length (100)->nullable(true)->comment('所属');
            $table->integer('operation')->length (1)->nullable(true)->comment('稼働');
            $table->string('loginid')->length (255)->nullable(true)->comment('ログインID');
            $table->string('password')->length (255)->nullable(true)->comment('パスワード');
            $table->string('email')->length (255)->nullable(true)->comment('E-mail');
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
        Schema::dropIfExists('m_users');
    }
};
