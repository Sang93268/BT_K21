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
        Schema::create('cong_viecs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nha_tuyen_dung');
            $table->integer('id_danh_muc');
            $table->integer('id_dia_diem');
            $table->string('tieu_de');
            $table->string('slug_tieu_de');
            $table->text('mo_ta');
            $table->text('yeu_cau');
            $table->integer('luong_toi_thieu');
            $table->integer('luong_toi_da');
            $table->date('ngay_dang');
            $table->date('han_nop');
            $table->integer('tinh_trang')->default(1);
            $table->string('ten_cong_ty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cong_viecs');
    }
};
