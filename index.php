<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dein Auslandssemester</title>
    <link href="https://fonts.googleapis.com/css?family=Offside&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Stylesheets/style.css" type="text/css">

</head>

<body>



    <header>
        <h3 style="font-family:'Calligraffitti',Arial,sans-serif"><strong>BlaBlaName</strong></h3>
        <ul style="font-family: 'Offside',Arial,sans-serif">
            <li><a href="#" class="trans">Warum?</a></li>
            <li><a href="#" class="trans">Länder und Unis im Überblick</a></li>
            <li><a href="#" class="trans">...</a></li>
            <li><a href="#" class="trans">Über Uns</a></li>
        </ul>


    </header>

    <div id="DiePassendeUni">
        <h1 id="firstHeading" lang="de" style="font-family:'Offside',Arial,sans-serif">Finde die passende Uni für dein
            Auslandssemester anhand deiner Module</h1>

    </div>



    <h2 id="filterText" lang="de" style="font-family: 'Offside',Arial,sans-serif">Filter</h2>
    <div id="Filter">



    </div>


    <div id="modulContainer">
        <a href="#" id="button1" style="font-family: 'Offside',Arial,sans-serif">Click Me</a>

        <form method="post">
            <input type="text" name="modulName" placeholder="ModulName">
            <input type="submit" value="Los">

            <?php 
        include_once 'Functions.php';
    ?>

            <?php
                
                
                echo uniIDFinder(modulNameInBeschreibung());
 
   
               ?>


            <footer>

            </footer>

            <div id="sidePic">

            </div>

            <script>
            document.getElementById('button1').addEventListener('click', function() {
                document.querySelector('.bg-modal').style.display = 'flex';
            });
            </script>
            <div class="bg-modal">
                <div class="modal-content" style="font-family: 'Offside',Arial,sans-serif">

                    <div class="close">+</div>
                    <script>
                    document.querySelector('.close').addEventListener('click', function() {
                        document.querySelector('.bg-modal').style.display = 'none';
                    });
                    </script>
                    <form class="inputFenster" action="">



                        <input type="text" placeholder="Geben Sie den Modulnamen ein...">
                        <a class="delete">
                            <p class="deleteKreuz">+</p>
                        </a>
                        <input type="text" placeholder="Geben Sie den Modulnamen ein...">
                        <a class="delete">
                            <p class="deleteKreuz">+</p>
                        </a>
                        <input type="text" placeholder="Geben Sie den Modulnamen ein...">
                        <a class="delete">
                            <p class="deleteKreuz">+</p>
                        </a>
                        <input type="text" placeholder="Geben Sie den Modulnamen ein...">
                        <a class="delete">
                            <p class="deleteKreuz">+</p>
                        </a>
                        <input type="text" placeholder="Geben Sie den Modulnamen ein...">
                        <a class="delete">
                            <p class="deleteKreuz">+</p>
                        </a>
                        <input type="text" placeholder="Geben Sie den Modulnamen ein...">
                        <a class="delete">
                            <p class="deleteKreuz">+</p>
                        </a>
                        <a>
                            <div id="buttonDiv">
                        </a>
                        <a href="" class="button" style="font-family: 'Offside',Arial,sans-serif">Los</a>
                </div>
        </form>
    </div>
    </div>





</body>

</html>