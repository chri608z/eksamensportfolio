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
            </a>
            <nav>
                <ul>
                    <li><a href="pr%C3%A6sentationsteknik.php" class="dropbtn">Præsentationsteknik</a></li>
                    <li><a href="tekstproduktion.php" class="dropbtn">Tekstproduktion</a></li>
                    <li><a href="kvanti.kvali.php" class="dropbtn">Kvantitativ og kvalitativ</a></li>
                    <li><a href="human.paradig.php" class="dropbtn">Humanistisk paradigme</a></li>
                    <li><a href="samfund.paradig.php" class="dropbtn">Samfundsfaglige paradigme</a></li>
                </ul>
            </nav>
            </li> <!-- kommunikation -->
            
            <li><a href="design.php">Design</a>
                <ul>
                <?php include'menudesign.php'; ?>
                </ul>
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