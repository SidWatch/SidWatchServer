-- --------------------------------------------------------------------------------
-- Routine DDL
-- Note: comments before and after the routine body will not be stored by the server
-- --------------------------------------------------------------------------------
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_CalculateDailySpectrums`(IN _siteid bigint)
BEGIN

delete from sitedailyspectrum
where siteid = _siteid;

insert into sitedailyspectrum (siteid, timezone, readingdate, spectrumcount)
SELECT siteid, 'local' as timezone, Date(date_add(readingdatetime, interval sites.utcoffset hour)), count(*)
FROM sitespectrums ss
JOIN sites on ss.siteid = sites.id
WHERE siteid = _siteid
GROUP BY Date(date_add(readingdatetime, interval sites.utcoffset hour));

insert into sitedailyspectrum (siteid, timezone, readingdate, spectrumcount)
SELECT siteid, 'utc' as timezone, Date(readingdatetime), count(*)
FROM sitespectrums ss
WHERE siteid = _siteid
GROUP BY Date(readingdatetime);

END