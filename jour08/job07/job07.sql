SELECT * FROM `etudiants` WHERE `naissance`<= DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -18 YEAR)