/* https://www.hackerrank.com/challenges/the-report/problem?isFullScreen=true */
/* The Report MediumSQL (Intermediate) */ 
select CASE
when Grade > 7 THEN S.NAME
ELSE NULL
END AS Names ,
G.Grade ,
S.Marks
from Students AS S
inner join Grades as G
on S.Marks between G.Min_Mark and G.Max_Mark
order by G.Grade desc ,
Names ASC ,
S.Marks asc;
