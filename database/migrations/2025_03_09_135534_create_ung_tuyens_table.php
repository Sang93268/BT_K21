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
        Schema::create('ung_tuyens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ung_vien');
            $table->integer('id_cong_viec');
            $table->date('ngay_ung_tuyen');
            $table->integer('tinh_trang')->default(1)->comment('0: Đã bị từ chối, 1: Đang xem xét, 2: Đã được chọn, 3: Đã đóng công việc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ung_tuyens');
    }
};
