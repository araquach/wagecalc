<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('salon');
            $table->string('position');
            $table->integer('holiday_entitlement');
            $table->decimal('basic_wage', 8, 2);
            $table->integer('hours_pd')->unsigned();
            $table->integer('days_pw')->unsigned();
            $table->integer('target_multiplier')->unsigned();
            $table->integer('commission_value')->unsigned();
            $table->integer('percentage_return')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_members');
    }
}
