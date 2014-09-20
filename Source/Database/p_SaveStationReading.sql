DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_SaveStationReading`(IN _siteid bigint,
										 IN _stationid bigint,
										 IN _readingdatetime datetime(6),
										 IN _readingmagnitude float,
										 IN _fileid bigint,
										 IN _createdat datetime,
										 IN _updatedat datetime)
BEGIN
	SELECT @id := id
	FROM stationreadings
	where siteid = _siteid
	AND stationid = _stationid
	AND readingdatetime = _readingdatetime;

	if @id is null then
		begin	
			INSERT INTO stationreadings (siteid, stationid, readingdatetime, readingmagnitude, 
										 fileid, created_at, updated_at)
			VALUES (_siteid, _stationid, _readingdatetime, _readingmagnitude,
					_fileid, _createdat, _updatedat);
		end;
	else
		begin
			UPDATE stationreadings
			SET siteid = _siteid, 
				stationid = _stationid, 
				readingdatetime = _readingdatetime, 
			    readingmagnitude = _readingmagnitude,
				fileid = _fileid, 
				updated_at = _updatedat
			WHERE Id = @id;
		end;
	end if;
END$$
DELIMITER ;
