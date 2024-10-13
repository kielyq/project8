<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
<<<<<<< HEAD
            $table->unsignedBigInteger('id')->primary();
            $table->string('name');
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
                      
=======
            $table->usignedBigInteger('id')->primary();
            $table->string('name');
            $table->timestamp('create_at');
            $table->timestamp('update_at');
>>>>>>> 7729f2b943a64c9aaa8c0ac7fcf4efd26fe1bedd
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
