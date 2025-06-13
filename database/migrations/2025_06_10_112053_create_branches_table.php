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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable(); 
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
     
        DB::table('branches')->insert([
            ['title' => json_encode(['en' => 'IT', 'ku' => 'تێکنەلۆجیای زانیاری'])],
            ['title' => json_encode(['en' => 'Language', 'ku' => 'زمان'])],
            ['title' => json_encode(['en' => 'AI', 'ku' => ' ژیری دەستژرد'])],
            ['title' => json_encode(['en' => 'Business', 'ku' => ' بزنس و بەڕێوەبردن '])],
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
