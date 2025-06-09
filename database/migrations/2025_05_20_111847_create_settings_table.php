<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->json('value')->nullable(); 
            $table->timestamps();
        });

        DB::table(table: 'settings')->insert(
            [
            ['key' => 'contact_email',    'value' => json_encode(['en' => 'info@example.com','ku'=>'a'])],
            ['key' => 'contact_phone',    'value' => json_encode(['en' => '07507860090','ku'=>'07507860090'])],
            ['key' => 'contact_address',  'value' => json_encode(['en' => 'Erbil, Zanko new village (D310) ','ku'=>'هەولێر گوندی زانکۆ'])],
            ['key' => 'contact_link',     'value' => json_encode(['en' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51549.59170247494!2d44.033341!3d36.145878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4007256fffe20c69%3A0x78415b0e75480300!2sMegaMind%20Plus%20Academy!5e0!3m2!1sen!2siq!4v1749468773816!5m2!1sen!2siq','ku'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51549.59170247494!2d44.033341!3d36.145878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4007256fffe20c69%3A0x78415b0e75480300!2sMegaMind%20Plus%20Academy!5e0!3m2!1sen!2siq!4v1749468773816!5m2!1sen!2siq'])],
            ['key' => 'social_fac',       'value' => json_encode(['en' => 'https://facebook.com','ku'=>'a'])],
            ['key' => 'social_lin',       'value' => json_encode(['en' => 'https://linkedin.com','ku'=>'a'])],
            ['key' => 'about_page',       'value' => json_encode(['en' => 'about as','ku'=>'a'])],
            ]
            );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
