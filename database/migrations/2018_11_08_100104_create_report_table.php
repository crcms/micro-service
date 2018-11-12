<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('status')->default(0)->comment('状态,1:等待,2完成');
            $table->string('name', 50)->comment('名称');
            $table->string('path')->comment('路径');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bl_reports');
    }
}
