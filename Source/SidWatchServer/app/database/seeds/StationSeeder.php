<?php

/**
 * class StationSeeder
 *
 * Description for class StationSeeder
 *
 * @author:
*/
class StationSeeder extends Seeder {

	public function run()
	{
		DB::table('stations')->delete();

		$station = new Station();
		$station->CallSign = '3SB';
		$station->Frequency = 10600;
		$station->Latitude = 35.60;
		$station->Longitude = 103.33;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	

		$station = new Station();
		$station->CallSign = 'Alpha1';
		$station->Frequency = 11904.761;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'Alpha2';
		$station->Frequency = 12648.809 ;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'RAN1';
		$station->Frequency = 13000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'UVA';
		$station->Frequency = 14600 ;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'Alpha3';
		$station->Frequency = 14880.952 ;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'UIK';
		$station->Frequency = 15000 ;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'JXN';
		$station->Frequency = 16400;
		$station->Latitude = 59.51;
		$station->Longitude = 10.52;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'FTA';
		$station->Frequency = 16800;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'SAQ';
		$station->Frequency = 17200;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'Channel One';
		$station->Frequency = 17900;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'Channel One (2)';
		$station->Frequency = 18000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'UFQE';
		$station->Frequency = 18100;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'VTX';
		$station->Frequency = 18200;
		$station->Latitude = 8.47;
		$station->Longitude = 77.40;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'HWU';
		$station->Frequency = 18300;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'RDL 2';
		$station->Frequency = 18900;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'GBZ';
		$station->Frequency = 19600;
		$station->Latitude = 52 ;
		$station->Longitude = -3;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'UGE';
		$station->Frequency = 19700;
		$station->Latitude = -21.8;
		$station->Longitude = 114.2;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'NWC';
		$station->Frequency = 19800;
		$station->Latitude = -21.8;
		$station->Longitude = 114.2;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'VLF';
		$station->Frequency = 20000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'ICV';
		$station->Frequency = 20270;
		$station->Latitude = 40.88;
		$station->Longitude = 9.68;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'RJH - 1';
		$station->Frequency = 20500;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = '3SA';
		$station->Frequency = 20600;
		$station->Latitude = 25.03;
		$station->Longitude = 111.67;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'HWU - 1';
		$station->Frequency = 20900;
		$station->Latitude = 40.7;
		$station->Longitude = 1.25;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'HWU - 2';
		$station->Frequency = 21050;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();		
		
		$station = new Station();
		$station->CallSign = 'RDL';
		$station->Frequency = 21100;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'GYA';
		$station->Frequency = 21400;
		$station->Latitude = 51;
		$station->Longitude = 2;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NPM';
		$station->Frequency = 21400;
		$station->Latitude = 20.4;
		$station->Longitude = -158.2;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
			
		$station = new Station();
		$station->CallSign = 'HWV';
		$station->Frequency = 21750;
		$station->Latitude = 40.7;
		$station->Longitude = 1.25;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'GQD';
		$station->Frequency = 22100;
		$station->Latitude = 52 ;
		$station->Longitude = -1;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'JJI';
		$station->Frequency = 22200;
		$station->Latitude = 32.04;
		$station->Longitude = 130.81;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'RJH - 2';
		$station->Frequency = 23000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'Channel One - 3';
		$station->Frequency = 23100;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();		
		
		$station = new Station();
		$station->CallSign = 'DHO38';
		$station->Frequency = 23400;
		$station->Latitude = 53;
		$station->Longitude = 33;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();		
		
		$station = new Station();
		$station->CallSign = 'NAA';
		$station->Frequency = 24000;
		$station->Latitude = 44.65;
		$station->Longitude = -67.3;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();		
		
		$station = new Station();
		$station->CallSign = 'NLK';
		$station->Frequency = 24800;
		$station->Latitude = 48.2;
		$station->Longitude = -121.92;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'RJH - 3';
		$station->Frequency = 25000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();	
		
		$station = new Station();
		$station->CallSign = 'PWB';
		$station->Frequency = 25000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'RJH - 4';
		$station->Frequency = 25100;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NML';
		$station->Frequency = 25200;
		$station->Latitude = 46.35;
		$station->Longitude = -98.33;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'RJH - 5';
		$station->Frequency = 25500;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 1';
		$station->Frequency = 25700;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
			
		$station = new Station();
		$station->CallSign = 'CAA2A';
		$station->Frequency = 26600;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'TBB';
		$station->Frequency = 26700;
		$station->Latitude = 37.43;
		$station->Longitude = 27.55;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();		
		
		$station = new Station();
		$station->CallSign = 'NOV - 2';
		$station->Frequency = 27500;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 3';
		$station->Frequency = 27600;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 4';
		$station->Frequency = 27700;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 5';
		$station->Frequency = 27900;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 6';
		$station->Frequency = 29300;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 7';
		$station->Frequency = 29400;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NOV - 8';
		$station->Frequency = 29600;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'PWI';
		$station->Frequency = 30000;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'UGKZ';
		$station->Frequency = 30300;
		$station->Latitude = null;
		$station->Longitude = null;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NRK';
		$station->Frequency = 37500;
		$station->Latitude = 65;
		$station->Longitude = -18;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NAU';
		$station->Frequency = 40750;
		$station->Latitude = 18.40;
		$station->Longitude = -67.18;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
		
		$station = new Station();
		$station->CallSign = 'NSC';
		$station->Frequency = 45900;
		$station->Latitude = 38;
		$station->Longitude = 13;
		$station->Country = null;
		$station->Location = null;
		$station->Notes = null;
		$station->save();
					
	}
}

?>