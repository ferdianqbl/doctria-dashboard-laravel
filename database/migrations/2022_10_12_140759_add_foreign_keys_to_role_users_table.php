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
        Schema::table('role_users', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_role_users_to_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('role_id', 'fk_role_users_to_roles')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_users', function (Blueprint $table) {
            $table->dropForeign('fk_role_users_to_users');
            $table->dropForeign('fk_role_users_to_roles');
        });
    }
};
