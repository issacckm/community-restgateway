<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('members')) {
            Schema::create('members', function (Blueprint $table) {
                $table->increments('member_id');
                $table->tinyInteger('member_type')->default(0);
                $table->string('member_account', 50);
                $table->string('member_password', 20);
                $table->string('member_private_key', 64);
                $table->tinyInteger('member_status')->default(0);
                $table->timestamps();
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
        Schema::dropIfExists('members');
    }
}
