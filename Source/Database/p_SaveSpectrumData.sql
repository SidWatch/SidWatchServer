DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_SaveSpectrumData`(IN _sitespectrumid bigint,
									   IN _frequency float(15,6),
									   IN _readingmagnitude float(15,6))
BEGIN

	SELECT @id := id
	FROM sitespectrumdata
	where sitespectrumid = _sitespectrumid
	AND frequency = _frequency;
	
	if @id is null then
		begin	
			INSERT INTO sitespectrumdata (sitespectrumid, frequency, readingmagnitude)
			VALUES (_sitespectrumid, _frequency, _readingmagnitude);
		end;
	else
		begin
			UPDATE sitespectrumdata
			SET readingmagnitude = _readingmagnitude
			WHERE id = @id;
		end;
	end if;
END$$
DELIMITER ;
