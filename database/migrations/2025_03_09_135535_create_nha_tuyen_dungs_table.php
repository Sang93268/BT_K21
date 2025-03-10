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
        Schema::create('nha_tuyen_dungs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cong_ty');
            $table->string('slug_cong_ty');
            $table->string('nguoi_dai_dien');
            $table->string('email');
            $table->string('password');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
            $table->text('mo_ta_cong_ty');
            $table->integer('cong_viec_da_dang')->default(0);
            $table->integer('tinh_trang')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nha_tuyen_dungs');
    }
};
