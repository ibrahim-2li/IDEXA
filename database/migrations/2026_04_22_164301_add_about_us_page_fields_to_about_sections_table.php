<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->string('about_us_heading')->nullable();
            $table->text('about_us_p1')->nullable();
            $table->text('about_us_p2')->nullable();
            $table->string('about_us_highlight_title')->nullable();
            $table->text('about_us_highlight_text')->nullable();
            $table->string('about_us_image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->dropColumn([
                'about_us_heading',
                'about_us_p1',
                'about_us_p2',
                'about_us_highlight_title',
                'about_us_highlight_text',
                'about_us_image'
            ]);
        });
    }
};
