SELECT e.nom AS etage_nom, s.nom AS "Biggest Room", s.capacite
FROM salles s
JOIN etages e ON s.etage_id = e.id
WHERE s.capacite = (
    SELECT MAX(capacite)
    FROM salles
);