<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expertise_areas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description_1');
            $table->text('description_2')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->default('/contact');
            $table->timestamps();
        });

        DB::table('expertise_areas')->insert([
            [
                'title' => 'SECURITY',
                'description_1' => 'e7 Security leverages the latest in secure printing to protect sensitive personal and corporate data. We serve diverse sectors, including banking, government, telecom, retail, hospitality, and transport, delivering advanced security and personalization solutions.',
                'description_2' => 'As a leader in secure printing and identity management, we support governments and global businesses with reliable, end-to-end data protection solutions.',
                'image' => '/images/security.png',
                'link' => '/contact',
            ],
            [
                'title' => 'PACKAGING',
                'description_1' => 'Like all industries in the 21st century, print needs to adapt to answer the future demands of clients and meet the global movement for more sustainable production. Packaging is ahead of the curve, using state-of-the-art technologies to produce innovative and environmentally friendly solutions to a diverse range of packaging.',
                'description_2' => null,
                'image' => '/images/packaging.png',
                'link' => '/contact',
            ],
            [
                'title' => 'PRINTING',
                'description_1' => "e7 Printing is a long-established regional powerhouse, a trusted partner across a range of publishing sectors that include newspapers, magazines and books, as well as large scale out-of-home print projects and educational materials. We constantly upgrade our print equipment so all our clients can rest assured that we'll always deliver the world-class premium service their print projects deserve.",
                'description_2' => null,
                'image' => '/images/printing.png',
                'link' => '/contact',
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('expertise_areas');
    }
};
