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
        Schema::create('team_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('id_team');
            $table->foreignId('id_team_require_documents');
            $table->string('name');
            $table->string('type');
            $table->string('ext')->nullable();
            $table->bigInteger('file_size')->nullable();
            $table->integer('sort');
            $table->string('url_document')->nullable();
            $table->integer('is_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_documents');
    }
};
