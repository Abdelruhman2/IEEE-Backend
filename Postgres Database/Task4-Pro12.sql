/*https://www.hackerrank.com/challenges/weather-observation-station-5/problem?isFullScreen=true*/
SELECT CITY c, LENGTH(CITY) l
FROM   STATION
ORDER BY l DESC, c ASC
LIMIT 1;

SELECT CITY c, LENGTH(CITY) l
FROM   STATION
ORDER BY l ASC, c ASC
LIMIT 1;
