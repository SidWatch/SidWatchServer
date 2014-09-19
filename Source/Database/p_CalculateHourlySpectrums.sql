-- --------------------------------------------------------------------------------
-- Routine DDL
-- Note: comments before and after the routine body will not be stored by the server
-- --------------------------------------------------------------------------------
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_CaluclateHourlySpectrums`(IN _siteid bigint)
BEGIN

delete from sitehourlyspectrum
where siteid = _siteid;

insert into sitehourlyspectrum (siteid, timezone, readingdate, readinghour, spectrumcount)
SELECT siteid, 'local' as timezone, Date(date_add(readingdatetime, interval sites.utcoffset hour)), 
	   Hour(date_add(readingdatetime, interval sites.utcoffset hour)), count(*)
FROM sitespectrums ss
JOIN sites on ss.siteid = sites.id
WHERE siteid = _siteid
GROUP BY Date(date_add(readingdatetime, interval sites.utcoffset hour)), Hour(readingdatetime);

insert into sitehourlyspectrum (siteid, timezone, readingdate, readinghour, spectrumcount)
SELECT siteid, 'utc' as timezone, Date(readingdatetime), Hour(readingdatetime), count(*)
FROM sitespectrums ss
WHERE siteid = _siteid
GROUP BY Date(readingdatetime), Hour(readingdatetime);

END