DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_SaveSpectrumData`(IN _sitespectrumid bigint,
									   IN _frequency float(15,6),
									   IN _readingmagnitude float(15,6),
									   IN _createdat datetime,
									   IN _updatedat datetime)
BEGIN

	SELECT @id := id
	FROM sitespectrumdata
	where sitespectrumid = _sitespectrumid
	AND frequency = _frequency;
	
	if @id is null then
		begin	
			INSERT INTO sitespectrumdata (sitespectrumid, frequency, readingmagnitude, 
										  created_at, updated_at)
			VALUES (_sitespectrumid, _frequency, _readingmagnitude, 
					_createdat, _updatedat);
		end;
	else
		begin
			UPDATE sitespectrumdata
			SET readingmagnitude = _readingmagnitude,
				 created_at = _createdat,
				 updated_at = _updatedat
			WHERE id = @id;
		end;
	end if;
END$$
DELIMITER ;
