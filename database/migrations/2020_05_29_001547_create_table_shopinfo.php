<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableShopinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //  创建  数据库  
    public function up()
    {
        Schema::create('shopinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //  回滚时  删除数据库
    public function down()
    {
        Schema::drop('shopinfo');
    }
}
