<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('added_by');
            $table->integer('user_id')->unsigned()->onDelete('cascade');
            $table->integer('category_id')->unsigned()->onDelete('cascade');
            $table->integer('brand_id')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('video_provider')->nullable();
            $table->string('video_link')->nullable();
            $table->double('unit_price',20,2);
            $table->double('purchase_price',20,2)->nullable();
            $table->integer('variant_product');
            $table->string('choice_options')->nullable();
            $table->string('colors')->nullable();
            $table->text('variations')->nullable();
            $table->string('unit')->nullable();
            $table->integer('min_qty');
            $table->integer('low_stock_quantity')->nullable();
            $table->double('discount',20,2)->nullable();
            $table->string('discount_type')->nullable();
            $table->double('tax',20,2)->nullable();
            $table->string('tax_type')->nullable();
            $table->string('shipping_type')->nullable();
            $table->text('shipping_cost')->nullable();
            $table->tinyInteger('is_quantity_multiplied');
            $table->integer('est_shipping_days')->nullable();
            $table->integer('num_of_sale');
            $table->text('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_img')->nullable();
            $table->string('pdf')->nullable();
            $table->string('slug');
            $table->double('rating',8,2);
            $table->string('barcode')->nullable();
            $table->integer('digital');
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
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
}
