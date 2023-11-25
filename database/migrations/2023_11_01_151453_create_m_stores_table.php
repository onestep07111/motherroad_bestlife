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
        Schema::create('m_stores', function (Blueprint $table) {
            $table->comment('店舗マスタ');
            $table->integer('id')->length (5)->primary()->comment('店舗ID');
            $table->string('store_nm')->length (200)->comment('店舗名');
            $table->integer('store_type')->length (2)->nullable(true)->comment('店舗種別');
            $table->string('store_master_id')->length (50)->nullable(true)->comment('店舗別販売価格マスタID');
            $table->string('mail_send_acount')->length (200)->nullable(true)->comment('メール送信時のメールアカウント');
            $table->integer('tax_kbn')->length (1)->nullable(true)->comment('商品の消費税設定');
            $table->integer('business_manager_id')->length (2)->nullable(true)->comment('ビジネスマネージャーID');
            $table->string('business_manager_password')->length (200)->nullable(true)->comment('ビジネスマネージャーパスワード');
            $table->string('yahoo_id')->length (200)->nullable(true)->comment('ヤフーショッピング用Yahoo!ID');
            $table->string('yahoo_password')->length (200)->nullable(true)->comment('ヤフーショッピング用Yahoo!パスワード');
            $table->string('public_key')->length (1000)->nullable(true)->comment('公開鍵');
            $table->integer('public_key_version')->length (3)->nullable(true)->comment('公開鍵バージョン');
            $table->string('yahoo_token')->length (1000)->nullable(true)->comment('ヤフーショッピング用リフレッシュトークン');
            $table->string('store_id')->length (200)->nullable(true)->comment('ストアID');
            $table->integer('zip_size')->length (3)->nullable(true)->comment('ヤフオク用画像ZIPファイルの最大サイズ');
            $table->string('bid_notification_email')->length (200)->nullable(true)->comment('入札通知先メールアドレス');
            $table->integer('bid_inventory')->length (1)->nullable(true)->comment('入札で在庫連動');
            $table->integer('auto_relisting_enddate')->length (1)->nullable(true)->comment('自動再出品時の終了日');
            $table->integer('auto_relisting_endtime')->length (1)->nullable(true)->comment('自動再出品時の終了時間');
            $table->integer('auction_end_relisting')->length (1)->nullable(true)->comment('オークション終了時に自動で再出品する');
            $table->integer('image_join')->length (1)->nullable(true)->comment('画像結合をする/しない');
            $table->integer('max_image_sheets')->length (2)->nullable(true)->comment('最大画像登録枚数');
            $table->integer('max_image_join')->length (2)->nullable(true)->comment('最大画像結合枚数');
            $table->integer('master_column')->length (2)->nullable(true)->comment('対応するマスタ列');
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
        Schema::dropIfExists('m_stores');
    }
};
