<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Alexis Projet</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
        <body class="container-fluid row" id="background">

        <nav class="menuIcones">
            <ul>
                <li class="navItem" id="profilImage"><a href="?category=profil"><img src="../img/profil.png" alt="icone profil personnel"></a></li>
                <li class="navItem" id="qualificationImage"><a href="?category=qualifications"><img src="../img/qualifications.png" alt="icone qualifications"></a></li>
                <li class="navItem" id="experienceImage"><a href="?category=experience"><img src="../img/experience.png" alt="icone expériences professionnel"></a></li>   
                <li class="navItem" id="etudesImage"><a href="?category=etudes"><img src="../img/etudes.png" alt="icone études"></a></li>
                <li class="navItem" id="contactImage"><a href="?category=contact"><img src="../img/contact.png" alt="icone contactez moi"></a></li>
            </ul>
        </nav>

        <header>
                <span class="Titre">
                    <h1 class="titrePresentation">Alexis Bellé</h1>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque perferendis accusamus eius harum iusto laboriosam! Sit aliquid amet, sequi tempore quibusdam voluptates reiciendis ipsum, necessitatibus sapiente unde repellat id ab!
                    </p>
                </span>
                
        </header>
        <main>


            <div class= "container">
                <div class="menu">
                    <?php $iconeSelection = "profil"; 
                        
                        if(!empty($_GET)) {
                            
                        $categoryValue = $_GET["category"];

                        if($categoryValue === "contact") {
                            $iconeSelection = "contact";
                        }

                        else if ($categoryValue === "etudes") {
                            $iconeSelection = "etudes";
                        }

                        else if ($categoryValue === "experience") {
                            $iconeSelection = "experience";
                        }

                        else if ($categoryValue === "profil") {
                            $iconeSelection = "profil";
                        }

                        else if ($categoryValue === "qualifications") {
                            $iconeSelection = "qualifications";
                        }

                        else {$iconeSelection ="";}

                        }

                        require_once "../php/" . $iconeSelection . ".tpl.php";
                        ?>
                        
                </div>
            </div>

            
                

        </main>

    </body>
    <script src="../js/loadTemplate.js"></script>
</html>
