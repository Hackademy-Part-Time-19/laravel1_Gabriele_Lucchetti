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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title',100);
            $table->string('category',50);
            $table->string('description',250);
            $table->text('body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles',function (Blueprint $table) {
            $table->dropColumn('titles');
            $table->dropColumn('categories');
            $table->dropColumn('descriptions');
            $table->dropColumn('body');

        });
       
    }
};
