/* https://www.hackerrank.com/challenges/weather-observation-station-18/problem?isFullScreen=true */
/* Weather Observation Station 18 MediumSQL (Basic) */
SELECT ROUND((MAX(LAT_N) - MIN(LAT_N) + MAX(LONG_W) - MIN(LONG_W)), 4) AS D
FROM STATION;
