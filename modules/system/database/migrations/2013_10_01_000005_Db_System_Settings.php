<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('system_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item')->nullable()->index();
            $table->mediumtext('value')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('system_settings');
    }
};
