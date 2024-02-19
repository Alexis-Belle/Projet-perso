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
                    <div class="menuRight">
                    <?php $iconeSelection = "profil"; 
                        
                        if(!empty($_GET)) {
                            
                        $categoryValue = $_GET["category"];

                        if($categoryValue = "contact") {
                            $iconeSelection = "contact";
                        }

                        else if ($categoryValue = "etudes") {
                            $iconeSelection = "etudes";
                        }

                        else if ($categoryValue = "experience") {
                            $iconeSelection = "experience";
                        }

                        else if ($categoryValue = "profil") {
                            $iconeSelection = "profil";
                        }

                        else if ($categoryValue = "qualifications") {
                            $iconeSelection = "qualifications";
                        }

                        else {$iconeSelection ="";}

                        }

                        require_once "../php/" . $iconeSelection . ".tpl.php";
                        ?>
                        

                    </div>
                    <div class="menuLeft">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, ipsam beatae, sint, cupiditate officia alias quam molestiae nostrum nesciunt illo totam. Fugiat quo nulla at expedita, esse sequi error. Illo ea nobis beatae? Maiores, laboriosam dolorum vel voluptas doloribus nihil odit omnis veniam quis architecto optio culpa vitae. Doloremque doloribus nesciunt aperiam dolore accusantium! Culpa velit deleniti sint fugit incidunt nisi iste nam numquam at perspiciatis excepturi in aperiam dolore vero aliquid nihil voluptatibus, architecto ea sapiente consequuntur? Unde at doloremque reprehenderit quos eos repellendus odio praesentium, placeat sunt natus quasi autem mollitia officia officiis earum voluptatum illo sit vero cupiditate soluta. Necessitatibus aspernatur eveniet culpa ipsum nobis! Deleniti beatae voluptatibus error labore quis, dolorum accusamus explicabo facilis enim assumenda consectetur autem distinctio aliquam ipsam non animi amet, officia repudiandae omnis perferendis. Aperiam hic iste pariatur beatae tempore iusto. Ipsam, dolores ipsum, rem aspernatur nesciunt beatae, repellendus illo eaque exercitationem provident iusto labore mollitia ducimus autem saepe nobis minus voluptate delectus! Modi quae ullam at inventore voluptas sint, consectetur libero voluptatum facilis tempore exercitationem rem eligendi expedita magni dolor debitis tenetur. Reiciendis, mollitia repudiandae tempora ducimus quisquam qui dolores quod! Repudiandae quis tenetur corrupti. Aliquid quae eligendi, porro quia delectus magni sunt fugit quas atque eveniet dolorem assumenda minus nostrum repudiandae exercitationem impedit perferendis non? Architecto atque culpa molestias molestiae corporis maxime hic id minus ipsam reprehenderit enim ipsum quos, facilis itaque amet laborum laudantium at, odio commodi praesentium dolor dolore facere? Eum laboriosam accusamus nostrum nobis amet aut voluptates sint adipisci accusantium quod nisi error labore velit eius repellendus rerum, iste natus sit modi ducimus, saepe similique recusandae! Cupiditate vero nesciunt recusandae quia necessitatibus provident eligendi maiores tenetur quod doloremque explicabo dolores, ipsa repellendus neque ducimus accusantium nobis vel reiciendis voluptatem fugiat, voluptates, officiis facere nihil. Reprehenderit facilis debitis modi, repellendus harum tenetur quidem, voluptatem mollitia fuga alias hic pariatur nisi! Nobis ad asperiores dolore sit omnis, placeat obcaecati repudiandae accusamus quaerat molestias quos delectus nam ipsum sint libero, pariatur voluptate odit sapiente at nulla corporis recusandae excepturi quasi! Tempora reiciendis veniam dolor. Voluptates dolorum reprehenderit animi veritatis placeat veniam cum soluta corrupti! Quo dignissimos corporis perferendis temporibus, id officia molestias quasi nemo odit sit veniam. Aperiam similique, a pariatur nostrum placeat totam tenetur dolorem atque, doloremque exercitationem porro molestias commodi ex quisquam? Impedit sed in cupiditate minus est placeat dolorem, tempore nam dolores non hic cum esse dolorum commodi velit qui molestiae debitis. Dolorum vitae fuga ullam, ipsam iusto est soluta repellat officia provident officiis ea aliquam laborum alias, illo deserunt voluptates reprehenderit. Quas cumque dolorum amet, corrupti eligendi est, quae repudiandae quod dolores autem adipisci, qui harum. Neque velit nobis deserunt, est mollitia autem alias ipsa, accusantium repellendus veritatis adipisci voluptatem numquam quas dolores qui sunt! Eaque asperiores quisquam molestias unde accusamus natus, exercitationem ipsum odio ipsam, eligendi doloribus sint distinctio fuga? Soluta, hic. Soluta saepe mollitia architecto in perferendis ab esse quidem magnam aliquid, modi reiciendis, atque consequuntur optio aspernatur! Doloremque soluta voluptatem libero nesciunt quam?
                    </div>
                </div>
            </div>

            
                

        </main>

    </body>
    <script src="../js/loadTemplate.js"></script>
</html>
