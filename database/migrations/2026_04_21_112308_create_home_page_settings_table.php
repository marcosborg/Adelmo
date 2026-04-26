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
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_tagline')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('theme_colors')->nullable();
            $table->json('nav_links')->nullable();
            $table->string('nav_cta_label')->nullable();
            $table->string('nav_cta_href')->nullable();
            $table->string('hero_badge')->nullable();
            $table->text('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_primary_cta_label')->nullable();
            $table->string('hero_primary_cta_href')->nullable();
            $table->string('hero_secondary_cta_label')->nullable();
            $table->string('hero_secondary_cta_href')->nullable();
            $table->json('hero_notes')->nullable();
            $table->string('hero_panel_label')->nullable();
            $table->json('hero_panels')->nullable();
            $table->json('hero_stats')->nullable();
            $table->json('trust_items')->nullable();
            $table->string('about_badge')->nullable();
            $table->text('about_title')->nullable();
            $table->text('about_description')->nullable();
            $table->json('about_points')->nullable();
            $table->string('services_badge')->nullable();
            $table->text('services_title')->nullable();
            $table->text('services_description')->nullable();
            $table->json('services')->nullable();
            $table->string('tvde_badge')->nullable();
            $table->text('tvde_title')->nullable();
            $table->text('tvde_description')->nullable();
            $table->json('tvde_points')->nullable();
            $table->json('tvde_metrics')->nullable();
            $table->string('results_badge')->nullable();
            $table->text('results_title')->nullable();
            $table->text('results_description')->nullable();
            $table->json('results')->nullable();
            $table->string('process_badge')->nullable();
            $table->text('process_title')->nullable();
            $table->text('process_description')->nullable();
            $table->json('process_steps')->nullable();
            $table->string('testimonials_badge')->nullable();
            $table->text('testimonials_title')->nullable();
            $table->text('testimonials_description')->nullable();
            $table->json('testimonials')->nullable();
            $table->string('contact_badge')->nullable();
            $table->text('contact_title')->nullable();
            $table->text('contact_description')->nullable();
            $table->json('contact_details')->nullable();
            $table->string('contact_form_button_label')->nullable();
            $table->text('contact_form_note')->nullable();
            $table->text('contact_success_message')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('footer_copyright')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_settings');
    }
};
