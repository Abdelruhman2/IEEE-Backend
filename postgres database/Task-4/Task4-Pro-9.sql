/*https://www.hackerrank.com/challenges/weather-observation-station-8/problem?isFullScreen=true*/
SELECT DISTINCT CITY FROM STATION WHERE LEFT(LOWER(CITY),1) IN('a','e','i','o','u')
AND  RIGHT(CITY,1) IN('a','e','i','o','u');
