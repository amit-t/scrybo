<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('users', function(Blueprint $table){
                    
                    $table->increments( 'id' );
                    $table->string( 'user_id', 36 );
                    $table->string( 'device_id', 16 );
                    $table->string( 'app_id', 36 );
                    $table->string( 'first_name', 45 );
                    $table->string( 'last_name', 45 );
                    $table->string( 'email', 45 );
                    $table->string( 'password', 60 );
                    $table->string( 'country' );
                    $table->string( 'state' );
                    $table->string( 'city' );
                    $table->integer( 'mobile_ext' );
                    $table->integer( 'mobile_no' );
                    $table->double( 'reg_gps_lat' );
                    $table->double( 'reg_gps_lon' );
                    $table->double( 'log_gps_lat' );
                    $table->double( 'log_gps_lon' );
                    $table->enum( 'is_reg', array( 'yes', 'no' ) );
                    $table->enum( 'is_log', array( 'yes', 'no' ) );
                    $table->enum( 'is_admin', array( 'yes', 'no' ) );
                    $table->unique( array( 'device_id', 'app_id', 'email', 'password' ) );
                    
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
