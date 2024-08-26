<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Cập nhật cột role_id để có giá trị mặc định là 2
            $table->unsignedBigInteger('role_id')->default(2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Khôi phục cột về trạng thái ban đầu nếu cần
            $table->unsignedBigInteger('role_id')->change();
        });
    }
}
