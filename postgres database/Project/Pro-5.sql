/* https://www.hackerrank.com/challenges/weather-observation-station-19/problem?isFullScreen=true */
/* Weather Observation Station 19 MediumSQL (Basic) */ 
SELECT ROUND(sqrt(POWER(MAX(LAT_N) - MIN(LAT_N),2) + POWER(MAX(LONG_W) - MIN(LONG_W),2)), 4) AS D
FROM STATION;
