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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('sex', ['male', 'female', 'other'])->nullable()->after('password');
            $table->enum('role', ['student', 'teacher', 'other'])->nullable()->after('password');
            $table->string('image')->nullable()->after('password');
            $table->unsignedBigInteger('class_id')->nullable('true')->after('password');
            $table->foreign('class_id')->references('id')->on('my_classes')->onDelete('set null');
            $table->string('roll_number')->nullable()->after('password');
            $table->integer('age')->nullable()->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('role');
            $table->dropColumn('image');
            $table->dropForeign(['class_id']);
            $table->dropColumn('class_id');
            $table->dropColumn('roll_number');
            $table->dropColumn('age');
        });
    }
};
