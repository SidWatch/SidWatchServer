<?php

/**
 * class SiteSeeder
 *
 * Description for class SiteSeeder
 *
 * @author:
*/
class SiteSeeder extends Seeder {

	public function run()
	{
		DB::table('sites')->delete();

		$site = new Site;
		$site->MonitorId = '00001';
		$site->Name = 'testsite';
		$site->Timezone = 'MDT';
		$site->UtcOffset = -7;
		$site->Latitude = 39.0;
		$site->Longitude = -104.0;
		$site->save();
	}
}

?>