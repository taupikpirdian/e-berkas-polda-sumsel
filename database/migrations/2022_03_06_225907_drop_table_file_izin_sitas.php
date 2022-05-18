<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTableFileIzinSitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('file_izin_sitas');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('file_izin_sitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code_id');
            $table->unsignedBigInteger('izin_sita_id');
            $table->string('original_name');
            $table->string('name');
            $table->string('type_file');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }
}
