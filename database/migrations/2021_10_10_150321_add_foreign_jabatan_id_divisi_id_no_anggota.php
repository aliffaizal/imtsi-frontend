<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignJabatanIdDivisiIdNoAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->unsignedBigInteger('divisi_id')->nullable();
            $table->integer('no_anggota')->nullable()->unique();


            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
            $table->foreign('divisi_id')->references('id')->on('divisi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('jabatan_id');
            $table->dropColumn('divisi_id');
            $table->dropColumn('no_anggota');

            $table->dropForeign('jabatan_id');
            $table->dropForeign('divisi_id');

        });
    }
}
