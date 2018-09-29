<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('shops')) {
            Schema::create('shops', function (Blueprint $table) {
                $table->increments('shop_id');
                $table->tinyInteger('shop_type')->default(0);
                $table->string('shop_name', 50);
                $table->unsignedInteger('shop_owner');
                $table->tinyInteger('shop_status')->default(0);
                $table->timestamps();

                //$table->foreign('shop_owner')->references('member_id')->on('members');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
