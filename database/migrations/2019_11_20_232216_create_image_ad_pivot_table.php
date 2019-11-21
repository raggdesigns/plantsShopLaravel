<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageAdPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_ad', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('ad_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_ad');
    }
}
