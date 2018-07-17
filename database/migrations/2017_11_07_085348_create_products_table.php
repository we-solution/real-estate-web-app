<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('cat_id')->unsigned()->nullable();
            $table->text("title");
            $table->text("title_en");
            $table->string("images")->toArray();
            $table->text("desc");
            $table->text("desc_en");
            $table->boolean("status")->nullable()->default(true);
            $table->float("price")->default(0);
            $table->string("latitude");
            $table->string("longitude");
            $table->string("phones")->toArray();
            $table->string("email")->default("");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
