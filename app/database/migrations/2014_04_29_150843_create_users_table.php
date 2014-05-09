<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
                    $table->increments( 'id' );
                    $table->string( 'user_id', 36 );
                    $table->string( 'user_device_id', 16 );
                    $table->string( 'user_app_id', 36 );
                    $table->string( 'user_first_name', 45 );
                    $table->string( 'user_last_name', 45 );
                    $table->string( 'user_email', 45 );
                    $table->string( 'user_password', 60 );
                    $table->string( 'user_country' );
                    $table->string( 'user_state' );
                    $table->string( 'user_city' );
                    $table->integer( 'user_mobile_ext' );
                    $table->integer( 'user_mobile_no' );
                    $table->double( 'user_reg_gps_lat' );
                    $table->double( 'user_reg_gps_lon' );
                    $table->double( 'user_log_gps_lat' );
                    $table->double( 'user_log_gps_lon' );
                    $table->enum( 'user_is_reg', array( 'yes', 'no' ) );
                    $table->enum( 'user_is_log', array( 'yes', 'no' ) );
                    $table->unique( array( 'user_device_id', 'user_app_id', 'user_email', 'user_password' ) );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users', function(Blueprint $table)
		{
                    
                });
	}

}
