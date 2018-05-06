<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostDiskusiTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'post_diskusi';

    /**
     * Run the migrations.
     * @table post_diskusi
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_Post');
            $table->string('Judul_Post', 50);
            $table->string('Pembuat', 50);
            $table->date('Tanggal_Post');

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
