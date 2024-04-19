<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id('id');
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->integer('kategoriaId');
           /*  $table->foreignId('kategoriaId')->references('id')->on('kategorias'); */
            $table->timestamps();
        });
        /* Teszt::create([
            'kerdes' => 'Melyik a kedvenc konyved?',
            'v1' => 'Nincs',
            'v2' => 'EZ',
            'v3' => 'Az',
            'v4' => 'Mindegyik',
            'helyes' => 'v1',
            'kategoriaId' =>1,
            
        ]);
        Teszt::create([
            'kerdes' => 'Melyik a kedvenc kutyad?',
            'v1' => 'Mopsz',
            'v2' => 'Tacsko',
            'v3' => 'Agar',
            'v4' => 'Nincs',
            'helyes' => 'v2',
            'kategoriaId' =>2,
            
        ]);
        Teszt::create([
            'kerdes' => 'Melyik a kedvenc novenyed?',
            'v1' => 'Liliom',
            'v2' => 'Cseresznyefa',
            'v3' => 'Orgona',
            'v4' => 'Nincs',
            'helyes' => 'v3',
            'kategoriaId' =>3,
            
        ]); */

    }

    /**
     * Reverse the migrations.
     */
   
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
