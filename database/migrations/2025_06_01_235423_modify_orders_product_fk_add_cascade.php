<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // 1) Drop the existing foreign key on product_id
            $table->dropForeign(['product_id']);

            // 2) Re-add it with onDelete('cascade') (and keep onUpdate('cascade'))
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Rollback: drop the cascade FK
            $table->dropForeign(['product_id']);

            // Re-create the original version (no onDelete cascade, only onUpdate)
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade');
                  // (no onDelete => default RESTRICT/NO ACTION)
        });
    }
};
