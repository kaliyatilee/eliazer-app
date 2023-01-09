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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_id")->nullable();
            $table->string("category_id");
            $table->string("name");
            $table->string("description");
            $table->string("price");
            $table->string("in_stock");
            $table->string("image_path_id")->nullable();
            $table->string("added_by")->nullable();
            $table->string("edited_by")->nullable();
            $table->boolean("on_promotion")->default(1)->change();
            $table->boolean("bln_active")->default(1)->change();
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
        Schema::dropIfExists('products');
    }
};
