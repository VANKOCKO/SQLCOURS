Utilisez la base `world` pour cet exercice.

A partir de la question 9, il faudra utiliser les sous-requêtes.

Écrivez les requêtes permettant d'afficher :

1. La population totale du monde
   
   SELECT sum(Population)
   FROM  Country 

2. La liste des pays, triés par continent

    SELECT country.name, country.continent
    FROM Country 
    ORDER BY country.Continent

3. Le nombre de pays de chaque continent

    SELECT Continent,Count(Name)
    FROM Country 
    GROUP BY continent

4. La surface totale de chaque continent (calculée grâce à celle des pays)

    SELECT Continent,sum(SurfaceArea)
    FROM Country 
    GROUP BY continent

5. Le pays du monde ayant la plus grande espérance de vie

    SELECT name,LifeExpectancy
    FROM country
    WHERE Lifeexpectancy = (
         SELECT MAX(LifeExpectancy)
         FROM country
    )

    Ou plus simple 

    SELECT name, SUM(lifeExpectancy)
    FROM  contry
    
6. La richesse créée par tous les pays d'Asie

    SELECT  sum(GPNOld)
    FROM country 
    WHERE country.continent = "ASIE"
   
7. L'espérance de vie moyenne en Europe

8. La liste des pays, avec leur capitale et la langue officielle

9. Le nom du pays du monde ayant la plus grande espérance de vie (il y a un piège)

Bonus :

10. La population de chaque continent

11. La liste des types de gouvernements, avec pour chacun le pays ayant la plus grande espérance de vie

12. Le nombre de monarchies non constitutionnelles, par continent. On affichera le continent, et le nombre de monarchies pour chacun.

13. Pour chaque continent, le pays ou le PIB par tête est le plus élevé. On affichera le continent, le pays et le pib par tête.