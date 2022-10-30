<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_info', function (Blueprint $table) {
            $table->id();
            $table->string('photo',50);
            $table->string('logo',50);
            $table->string('name',50);
            $table->string('poste',50);
            $table->string('email',50);
            $table->string('phone',15);
            $table->string('fix',15);
            $table->string('website',100);
            $table->string('address',100);
            $table->string('description');
            $table->string('facbook',100);
            $table->string('instagram',100);
            $table->string('linkedin',100);
            $table->string('youtube',100);
            $table->string('tiktok',100);
            $table->string('twitter',100);
            $table->string('line',100);
            $table->string('pinterest',100);
            $table->string('renren',100);
            $table->string('vk',100);
            $table->string('wechat',100);
            $table->string('weibo',100);
            $table->string('tencent_weibo',100);
            $table->foreignId('id_comstme_login ')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_info');
    }
}
