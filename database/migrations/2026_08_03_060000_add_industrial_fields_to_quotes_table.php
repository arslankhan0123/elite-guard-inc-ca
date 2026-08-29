<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->string('company_name')->nullable()->after('name');
            $table->string('country')->nullable()->after('phone');
            $table->foreignId('product_id')->nullable()->after('country')->constrained()->nullOnDelete();
            $table->string('business_line')->nullable()->after('product_id');
            $table->string('equipment_condition')->nullable()->after('business_line');
            $table->string('quantity')->nullable()->after('equipment_condition');
            $table->date('required_by')->nullable()->after('quantity');
        });
    }

    public function down(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn([
                'company_name', 'country', 'product_id', 'business_line',
                'equipment_condition', 'quantity', 'required_by',
            ]);
        });
    }
};
