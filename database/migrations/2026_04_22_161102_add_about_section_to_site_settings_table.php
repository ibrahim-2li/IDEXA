<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('about_title')->nullable()->after('hero_title');
            $table->text('about_p1')->nullable()->after('about_title');
            $table->text('about_p2')->nullable()->after('about_p1');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn(['about_title', 'about_p1', 'about_p2']);
        });
    }
};
