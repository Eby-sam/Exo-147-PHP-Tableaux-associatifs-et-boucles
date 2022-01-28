<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici


//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici

array_push($videotheque,
    array(
        'nom' => 'Spider-Man Homecoming',
        'date' => 2017,
        'realisateur' => 'Jon Watts',
        'acteurs' => array(
            "Tom Holland", "Michael Keaton","Robert Downey Jr.", "Marisa Tomei", "Zendaya"),
        'Résumé' => ""
    ),
    array(
        'nom' => 'Avengers Endgame',
        'date' => 2019,
        'realisateur' => "Joe Russo",
        'acteurs' => array(
            "Robert Downey Jr.", "Chris Evans", "Chris Hemsworth", "Scarlett Johansson", "Jeremy Renner", "Mark Ruffalo", "Josh Brolin", "Karen Gillan"),
        'Résumé' => "Le Titan Thanos ayant réussi à s'approprier les six Pierres d'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif 
        de pulvériser la moitié de la population de l'Univers d'un claquement de doigts. Les quelques Avengers et Gardiens de
         la Galaxie ayant survécu, Steve Rogers, Thor, Natasha Romanoff, Tony Stark, Carol Danvers, Clint Barton, Bruce Banner,
          James Rhodes, Nébula et Rocket espèrent réparer le méfait de Thanos. Ils le retrouvent mais il s'avère que ce dernier
           a détruit les pierres et Thor le décapite. Cinq ans plus tard, alors que chacun essaie de continuer sa vie et
            d'oublier les nombreuses pertes dramatiques, Scott Lang, alias Ant-Man, parvient à s'échapper de la Dimension
             subatomique où il était coincé depuis la disparition du Docteur Hank Pym, de sa femme Janet Van Dyne et de sa fille 
             Hope Van Dyne. Lang propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs 
             alliés et coéquipiers : récupérer les Pierres d'Infinité dans le passé grâce au royaume quantique. Pour ce faire, à 
             l'aide des connaissances scientifiques de Bruce Banner et de Tony Stark, ils vont se scinder en plusieurs groupes pour 
             partir chercher les gemmes dans diverses époques passées…"
    ),
    array(
        'nom' => 'BabySitting',
        'date' => 2014,
        'realisateur' => 'Philippe Lacheau',
        'acteurs' => array(
            "Philippe Lacheau", "Vincent Desagnat", "Enzo Tomasini", "Tarek Boudali", "Gérard Jugnot"),
        'Résumé' => "Franck, agent d'accueil aux éditions Schaudel, souhaite devenir dessinateur de bande dessinée.
         Alors lorsque son patron lui propose de lire une ébauche à condition qu'il garde son fils ce soir, Franck 
         ne peut pas refuser. Le problème, c'est qu'il s'agit du jour de son anniversaire et ses amis ne comptent pas
          laisser tomber la fête qu'ils avaient préparée."
    )
);

foreach ($videotheque as $index) {
    foreach ($index as $propriete => $valeur) {
        if(is_array($valeur)){
            echo "acteurs : ";
            foreach($valeur as $index2){
                echo $index2.", ";
            }
            echo "<br><br>";
        }
        else{
            echo $propriete . " : " . $valeur . "<br>";
        }
        echo "<br>";
    }
}
echo "<br><br>";