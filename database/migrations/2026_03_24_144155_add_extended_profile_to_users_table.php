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

            $table->string('last_name')->after('name')->nullable();

            $table->string('phone')->after('email')->nullable();
            $table->string('profile_photo')->after('password')->nullable();

            $table->foreignId('company_id')->after('id')->nullable()->constrained('companies')->onDelete('cascade');
            $table->string('role')->after('company_id')->default('staff');

            $table->boolean('is_active')->default(true);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
