<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'jadwal';

    /**
     * Run the migrations.
     * @table jadwal
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->char('Kode_Sesi', 8);
            $table->date('Waktu_Ajar');
            $table->char('NRP', 10);
            $table->char('Materi', 16);

            $table->index(["Materi"], 'Materi');

            $table->index(["NRP"], 'NRP');


            $table->foreign('Materi', 'Materi')
                ->references('Kode_Materi')->on('materi')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('NRP', 'NRP')
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
