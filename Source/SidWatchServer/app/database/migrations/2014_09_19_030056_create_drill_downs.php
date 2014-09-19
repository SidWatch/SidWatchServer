<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrillDowns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sitedailyspectrum', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->string('timezone', 10);
				$table->date('readingdate');
				$table->integer('spectrumcount');
				
				$table->foreign('siteid')->references('id')->on('sites');
				$table->unique(array('siteid', 'timezone', 'readingdate'));
			});
		
		Schema::create('sitehourlyspectrum', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->string('timezone', 10);
				$table->date('readingdate');
				$table->tinyInteger('readinghour');
				$table->integer('spectrumcount');
				
				$table->foreign('siteid')->references('id')->on('sites');
				$table->unique(array('siteid', 'timezone', 'readingdate', 'readinghour'), 'shs_siteid_tz_rd_rh');
			});
		
		Schema::create('siteaveragespectrum', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';
				$table->bigIncrements('id');
				$table->bigInteger('siteid')->unsigned();
				$table->string('timezone', 10);
				$table->date('readingdate');
				$table->tinyInteger('readinghour');
				$table->tinyInteger('readingminute');
				$table->integer('spectrumcount');
				
				$table->foreign('siteid')->references('id')->on('sites');
				$table->unique(array('siteid', 'timezone', 'readingdate', 'readinghour', 'readingminute'), 'sas_site_tz_rd_rh_rm');
			});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sitedailyspectrum');
		Schema::drop('sitehourlyspectrum');
		Schema::drop('siteaveragespectrum');
	}

}
