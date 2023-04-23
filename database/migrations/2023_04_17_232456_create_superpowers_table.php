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
        Schema::create('superpowers', function (Blueprint $table) {
            $table->id();
            $table->foreignId ('user_id');
            $table -> boolean ('active')->default(true);
            $table-> string('name'); 
            $table-> longText('description')-> nulltable();
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
        Schema::dropIfExists('superpowers');
    }
};
