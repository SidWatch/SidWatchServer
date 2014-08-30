<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->string('emailaddress', 255)->unique();
				$table->string('password', 100);
				$table->string('firstname', 50)->nullable();
				$table->string('lastname', 50)->nullable();
				$table->timestamps();
			});
		
		Schema::create('accesskeys', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->string('accesskey');
				$table->string('secretkey');
				$table->string('bucketname');
				$table->DateTime('datetime');
				$table->timestamps();
			});
		
		Schema::create('sites', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->string('monitorid', 10)->unique();
				$table->string('name', 50);
				$table->string('timezone', 10);
				$table->float('utcoffset');
				$table->float('latitude');
				$table->float('longitude');
				$table->timestamps();
			});
		
		Schema::create('stations', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->string('callsign', 30)->unique();
				$table->string('country', 255)->nullable();
				$table->string('location', 255)->nullable();
				$table->string('notes', 255)->nullable();
				$table->float('frequency')->nullable();
				$table->float('latitude')->nullable();
				$table->float('longitude')->nullable();
				$table->timestamps();
			});
		
		Schema::create('files', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->dateTime('datetime');
				$table->string('filename', 255);
				$table->boolean('processed')->default(false);
				$table->boolean('archived')->default(false);
				$table->boolean('available')->default(false);
				$table->timestamps();
				
				$table->foreign('siteid')->references('id')->on('sites');	
			});
		
		Schema::create('stationreadings', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->dateTime('readingdatetime');
				$table->bigInteger('stationid')->unsigned();
				$table->float('readingmagnitude');
				$table->timestamps();
				
				$table->foreign('siteid')->references('id')->on('sites');
				$table->foreign('stationid')->references('id')->on('stations');
			});
		
		Schema::create('sitespectrums', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->dateTime('readingdatetime');
				$table->integer('samplespersecond');
				$table->integer('nfft');
				$table->integer('samplingformat');
				$table->string('sourcefilename', 255);
				$table->timestamps();
				
				$table->foreign('siteid')->references('id')->on('sites');
			});
		
		Schema::create('sitespectrumdata', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('sitespectrumid')->unsigned();
				$table->float('frequency');
				$table->float('readingmagnitude');
				
				$table->foreign('sitespectrumid')->references('id')->on('sitespectrums');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
