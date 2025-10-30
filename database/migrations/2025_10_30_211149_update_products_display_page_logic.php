<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update existing products: 'home' -> 'homepage'
        DB::table('products')->where('display_page', 'home')->update(['display_page' => 'homepage']);
        
        // Add category_id column for parent category tracking
        Schema::table('products', function (Blueprint $table) {
            $table->string('parent_category')->nullable()->after('display_page');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('parent_category');
        });
    }
};
