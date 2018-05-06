<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'artikel';

    /**
     * Run the migrations.
     * @table artikel
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Kode_Artikel');
            $table->char('Pembuat', 10);
            $table->string('Judul_Artikel', 50);
            $table->string('Isi_Artikel');
            $table->dateTime('Tanggal_Terbit');
            $table->tinyInteger('Status_Artikel');

            $table->index(["Pembuat"], 'Pembuat');


            $table->foreign('Pembuat', 'Pembuat')
                ->references('NRP')->on('pengajar')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
