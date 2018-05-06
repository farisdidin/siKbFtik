<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonasiTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'donasi';

    /**
     * Run the migrations.
     * @table donasi
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Kode_Donasi');
            $table->char('Donatur', 16);
            $table->string('Nomor_Rekening', 50);
            $table->string('Pemilik_Rekening', 50);
            $table->unsignedInteger('Jumlah');

            $table->index(["Donatur"], 'Donatur');


            $table->foreign('Donatur', 'Donatur')
                ->references('ID_Donatur')->on('donatur')
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
