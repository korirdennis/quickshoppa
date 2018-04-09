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
            $table->integer( 'category_id' )->unsigned();
            $table->string( 'title' );
            $table->string('image');
            $table->text('details');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('discount');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->unsigned()->index();
      
            $table->foreign( 'category_id' )
                  ->references( 'id' )->on( 'categories' )
                  ->onDelete( 'cascade' )
                  ->onUpdate( 'cascade' );
            
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
