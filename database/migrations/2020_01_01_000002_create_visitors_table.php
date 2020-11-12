<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('visitors', function (Blueprint $table) {
            // Columns
            $table->bigIncrements('id');
            $table->unsignedBigInteger('date_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('quantity');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('date_id', 'visitors_date_id_foreign')->references('id')->on('dates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
}
