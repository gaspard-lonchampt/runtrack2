SELECT etage.nom, salles.capacite, salles.nom AS "Biggest Room" 
FROM salles 
INNER JOIN etage ON salles.id_etage = etage.id 
ORDER BY capacite DESC LIMIT 1