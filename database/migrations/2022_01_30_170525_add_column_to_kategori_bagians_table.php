<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToKategoriBagiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_bagians', function (Blueprint $table) {
            $table->string('email')->after('name')->nullable();
            $table->text('alamat')->after('email')->nullable();
            $table->string('no_tlp')->after('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_bagians', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('alamat');
            $table->dropColumn('no_tlp');
        });
    }
}
