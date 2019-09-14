<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            // insert property columns
            $table->float('BathsTotal');
            $table->float('BedsTotal');
            $table->string('City');
            $table->decimal('ListPrice', 10, 2);
            $table->integer('MLSNumber');
            $table->integer('Matrix_Unique_ID')->primary();
            $table->string('Neighborhood');
            $table->string('PostalCode');
            $table->float('SqftTotal');
            $table->string('StateOrProvince');
            $table->string('StreetDirPrefix');
            $table->string('StreetName');
            $table->integer('StreetNumber');
            $table->string('StreetSuffix');
            $table->float('TaxAmount');
            $table->string('TransactionType');
            $table->integer('YearBuilt');

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
        Schema::dropIfExists('properties');
    }
}
