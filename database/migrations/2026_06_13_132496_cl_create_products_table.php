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
        Schema::create('cl_products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cl_product_category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');

            $table->string('slug')->unique();

            $table->string('sku')->nullable();

            $table->string('featured_image')->nullable();

            $table->longText('short_description')->nullable();

            $table->longText('description')->nullable();

            $table->string('benefits_title');

            $table->text('benefits_description')->nullable();

            $table->string('suitable_for')->nullable();
            
            $table->string('product_type')->nullable();
            $table->string('quality')->nullable();

            $table->decimal('price', 10, 2)->nullable();

            $table->string('external_link')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->boolean('show_in_home')->default(false);
            $table->boolean('is_active')->default(true);

            $table->integer('sort_order')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
