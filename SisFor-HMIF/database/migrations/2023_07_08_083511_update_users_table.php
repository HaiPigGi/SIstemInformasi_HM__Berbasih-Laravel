<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_username_unique'); // Menghapus indeks unik pada kolom username
            $table->renameColumn('username', 'name'); // Mengubah kolom username menjadi name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name'); // Menghapus kolom name jika rollback migrasi
            $table->string('username')->unique(); // Menambahkan kembali kolom username dengan indeks unik
        });
    }
}
