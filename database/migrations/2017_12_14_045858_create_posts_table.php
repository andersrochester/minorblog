<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

		//
		// Jag forsoker att hålla det sa svenskt som mojligt, skippar prickar och ringar
		// Anders Rochester, dec 2017
		//

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('rubrik', 60);
            $table->text('ingress');
            $table->longtext('innehall');
            $table->string('forfattare', 60);
            $table->string('status', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
