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
				$table->float('utcoffset', 4, 2);
				$table->float('latitude', 12, 8);
				$table->float('longitude', 12, 8);
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
				$table->float('frequency', 15, 6)->nullable();
				$table->float('latitude', 12, 8)->nullable();
				$table->float('longitude', 12, 8)->nullable();
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
				$table->dateTime('readingdatetime', 6);
				$table->bigInteger('stationid')->unsigned();
				$table->float('readingmagnitude', 15, 6);
				$table->bigInteger('fileid')->unsigned();
				$table->timestamps();
				
				$table->foreign('siteid')->references('id')->on('sites');
				$table->foreign('stationid')->references('id')->on('stations');
				$table->foreign('fileid')->references('id')->on('files');
			});
		
		Schema::create('sitespectrums', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->dateTime('readingdatetime', 6);
				$table->integer('samplespersecond');
				$table->integer('nfft');
				$table->integer('samplingformat');
				$table->bigInteger('fileid')->unsigned();
				$table->timestamps();
				
				$table->foreign('siteid')->references('id')->on('sites');
				$table->foreign('fileid')->references('id')->on('files');
			});
		
		Schema::create('sitespectrumdata', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('sitespectrumid')->unsigned();
				$table->float('frequency', 15, 6);
				$table->float('readingmagnitude', 15, 6);
				$table->timestamps();
				
				$table->foreign('sitespectrumid')->references('id')->on('sitespectrums');
				$table->unique(array('sitespectrumid', 'frequency'));
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::drop('stationreadings');
		Schema::drop('sitespectrumdata');
		Schema::drop('sitespectrums');
		
		Schema::drop('files');
		
		Schema::drop('sites');
		
		Schema::drop('users');
		Schema::drop('accesskeys');
		Schema::drop('stations');
		
		
	}

}
