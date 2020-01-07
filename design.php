<!DOCTYPE html> 
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>
            Eksamensprojekt
        </title>
        <link rel="stylesheet" href="eksprojk.css">
        <div id="forside">
            <div style="background-image: url ('vin1.jpg')"></div>  
        </div>
        
    </head>
     
    <body>
     
       <div id="container">
        <ul>
            <li><a href="forside.php">Forside</a>
            <section>
                    <div class="background-image">
                        <img src="vintage2.psd">
                    </div>
                </section>
            </li>
            
            <li><a href="info.php">Info</a></li>
           
            <li><a href="webudvikling.php">Webudvikling</a>
             <ul>
                <?php include'menuweb.php'; ?>
                </ul>
            </li> <!-- web -->
            
            <li><a href="kommunikation.php">Kommunikation>
            </a><ul>
                
                <?php include'menukommunikation.php'; ?>
                </ul>
            </li> <!-- kommunikation -->
            
            <li><a href="design.php">Design</a>
            <nav>
                <ul>
                    <li><a href="gestaltlovene.php" class="dropbtn">Gestaltlovene</a></li>
                    <li><a href="farver.php" class="dropbtn">Farver</a></li>
                    <li><a href="typografi.php" class="dropbtn">Typografi</a></li>
                    <li><a href="illustrator.php" class="dropbtn">Illustrator</a></li>
                    <li><a href="photoshop.php" class="dropbtn">Photoshop</a></li>
                    <li><a href="design.thinking.php" class="dropbtn">Design thinking</a></li>
                    <li><a href="fotografering.php" class="dropbtn">Fotografering</a></li>
                </ul>
            </nav>
            </li> <!-- design -->
            
           <li><a href="onepage.projekt.php">OnePage.projekt</a></li>
        </ul>
    </div>
        <div id="eksamens projekt">
        </div>
        
</body>
        <footer>
            <p>&copy; Christine Agerbo's eksamens projekt 2020</p>
        </footer>
</html>