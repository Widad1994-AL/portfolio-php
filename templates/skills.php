<?php
$competences = [
    "Développer une application de Recette de Cuisine 
      (compétences sur la partie front-end) " => [
        "Coder une interface en HTML,CSS,Javascript",
        "Technologies utilisés : HTML5,CSS,Javascript,boucles,fonctions,tableaux,objets",
        "Réaliser des interfaces utilisateur statiques web ou web mobile",
        "Développer la partie dynamique des interfaces utilisateur web ou web mobile",
        "Création de composants de l'interface utilisateur avec React JS",


    ],
    " Création d'un portfolio en PHP 
      (compétences sur la partie back-end) " => [
        "Acquérir des compétences sur l'algorithmique (résolution de problémes en sous-étapes)",
        "Création d'un portfolio en php en utilisant HTML,Tailwind CSS,Routeur php ",
        "Développer des composants métier côté serveur",
        "Documenter le déploiement d’une application dynamique web ou web mobile",

    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tâches et Compétences</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #005a8d;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h1>Tâches et Compétences à Approfondir</h1>

<table>
    <thead>
        <tr>
            <th>Activités types</th>
            <th>Compétences professionnelles</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($competences as $activite => $taches): ?>
            <tr>
                <td><?= htmlspecialchars($activite) ?></td>
                <td>
                    <ul>
                        <?php foreach ($taches as $tache): ?>
                            <li><?= htmlspecialchars($tache) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>






















































