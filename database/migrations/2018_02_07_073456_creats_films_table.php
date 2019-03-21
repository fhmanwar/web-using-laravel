<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Film;

class CreatsFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->date('tanggal');
            $table->string('poster');
            $table->string('sinopsis');            
            $table->timestamps();///informasi kapan dibuat
        });
        // $faker=Faker\factory::create();//
        // for($i=0;$i<10;$i++){
        //     $film = new Film();
        //     $film->nama = $faker->word;
        //     $film->jurusan = $faker->word;
        //     $film->deskripsi = $faker->varchar($maxNbChars = 200);
        //     $film->tanggal_tutup = $faker->date($format = 'Y-m-d', $max = '+5 years');
        //     $film->poster = $faker->imageUrl($width = 620, $height = 877); 
        //     $film->save();
        //   }
  
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
