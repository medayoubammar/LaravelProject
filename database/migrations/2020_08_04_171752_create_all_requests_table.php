<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantity');
            $table->string('adress');
            $table->string('disc');
            $table->string('restoname');
            $table->string('etat')->nullable()->default('Not valid');
            
            $table->bigInteger('Resto_id');
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
        Schema::dropIfExists('all_requests');
    }
}
