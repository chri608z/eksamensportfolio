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
        <nav>
            <ul>

            <li><a href="html%20og%20css.php" class="dropbtn">HTML og CSS</a></li>   <li><a href="res.design.grid.php" class="dropbtn">Res.Design.Grid</a></li>
            <li><a href="server.php">Server</a></li>
            <li><a href="internet.historie.php" class="dropbtn">Internettets historie</a></li>
            <li><a href="versionsstyring.php" class="dropbtn">Versionsstyring</a></li>
            </ul>
        </nav>
            </li> <!-- web -->
            
            <li><a href="kommunikation.php">Kommunikation>
            </a><ul>
                
                <?php include'menukommunikation.php'; ?>
                </ul>
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