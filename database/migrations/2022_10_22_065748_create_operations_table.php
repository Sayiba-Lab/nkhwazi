<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->string('op_id', 15)->unique()->nullable('false');
            $table->string('client_name', 25)->nullable(false);
            $table->string('client_email', 40)->nullable(true);
            $table->string('phone_number', 15)->nullable(false);
            $table->text('narrative', 2500)->nullable(true);
            $table->string('expected_outcome', 500)->nullable(true);
            $table->enum(['PENDING.REVIEWED', 'REVIEWED.APPROVED', 'REVIEWED.DENIED', 'REVIEWED.INPROGRESS', 'REVIEWED.SUSPENDED', 'REVIEWED.COMPLETED']);
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
        Schema::dropIfExists('operations');
    }
}
