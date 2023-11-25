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
        Schema::create('m_companys', function (Blueprint $table) {
            $table->comment('会社マスタ');
            $table->integer('id')->length (3)->primary()->comment('会社ID');
            $table->string('company_nm')->length (200)->comment('会社名');
            $table->string('company_kana_nm')->length (200)->nullable(true)->comment('会社名(フリガナ)');
            $table->string('company_english_nm')->length (200)->nullable(true)->comment('会社名(英語表記)');
            $table->string('chief_administrator')->length (50)->nullable(true)->comment('管理責任者');
            $table->string('order_reception_email')->length (200)->nullable(true)->comment('商品注文受付メールアドレス');
            $table->string('address_inquiries_email')->length (200)->nullable(true)->comment('問い合わせ受付メールアドレス');
            $table->string('source_email')->length (200)->nullable(true)->comment('メール送信元');
            $table->string('send_error_reception')->length (200)->nullable(true)->comment('送信エラー受付');
            $table->string('bill_registration_number')->length (100)->nullable(true)->comment('適格請求書登録番号');
            $table->string('regular_holiday')->length (7)->nullable(true)->comment('定休日');
            $table->integer('tax_rate')->length (2)->nullable(true)->comment('消費税率');
            $table->integer('taxation_rules')->length (1)->nullable(true)->comment('課税規則');
            $table->integer('free_shipping_conditions')->length (1)->nullable(true)->default(0)->comment('送料無料条件');
            $table->string('ems_id')->length (100)->nullable(true)->comment('EMSID');
            $table->string('ems_password')->length (100)->nullable(true)->comment('EMSIPASSWORD');
            $table->string('xml_Service_Site_ID')->length (100)->nullable(true)->comment('XML Service Site ID');
            $table->string('xml_Service_Password')->length (100)->nullable(true)->comment('XML Service Password');
            $table->string('dhl_export_account')->length (100)->nullable(true)->comment('DHL 輸出用アカウント番号');
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
        Schema::dropIfExists('m_companys');
    }
};
