/* https://www.hackerrank.com/challenges/weather-observation-station-20/problem?isFullScreen=true */
/* Weather Observation Station 20 MediumSQL (Intermediate) */  
SELECT ROUND(LAT_N,4) FROM (
SELECT ROW_NUMBER() OVER(ORDER BY LAT_N asc) AS med,LAT_N
FROM STATION) a
WHERE med =(SELECT ROUND(COUNT(*) / 2)
FROM STATION);
