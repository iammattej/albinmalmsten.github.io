<!DOCTYPE html>
<?php
    
    error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED); 
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SAS</title>
        <link rel="icon" href="sas_logo.png" type="image/png">
        <link href="sas_css.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, intial scale.1.0,maximum-slace=1">
    </head>
    <h1><a href="index.php">SAS</a></h1>
    <body> 
        <div id="#storbox"> 
        <header>
               
        </header> 
    <ul>
            <li><a class="active" href="index.php">Hem</a></li>
            <li><a href="kabin.php">Nya Kabinen</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="om.php">Om</a></li>
    </ul>

        <div style="padding-left:16px">

        </div>

        ​<?php 
            if ($_POST['submitbtn']) {
                $from = ($_POST['FROM']);
                $to = ($_POST['TO']);
                $PASSENGER = ($_POST['PASSENGER']);
                $toDate = ($_POST['toDate']);
                $fromDate = ($_POST['fromDate']);
            }

        ?>
       <nav>
                <form method="post">
                 <div  style="float: left">
                                 <p>FROM</p>
                <select name="FROM">
                    <option selected="selected">COPENHAGEN</option>
                    <option>STOCKHOLM</option>
                </select>
                <p><?php echo $from;?></p>

                 </div>
                 <div  style="float: left">
                                 <p>TO</p>
                <select name="TO">
                    <option selected="selected">STOCKHOLM</option>
                    <option>COPENHAGEN</option>
                   
                </select> <p><?php echo $to;?></p>

                 </div>
            

                <div style="float: left">
                                <p>PASSENGERS</p>
                <select name="PASSENGER">
                    <option selected="selected">ONE ADULT</option>
                    <option>TWO ADULTS</option>
                </select><p><?php echo $PASSENGER;?></p>

                </div>
           
                 <div  style="float: left">
                             
            <input type="date" form="test.html" min="2017-05-25" name="toDate" max="2018-01-31">
                     <p><?php echo $toDate;?></p>
            <input type="date" form="test.html" min="2017-05-25" name="fromDate" max="2018-01-31">
                     <p><?php echo $fromDate;?></p>
            <p id="datum"></p>
                 </div>
            
            <input type="submit" name="submitbtn"  style="float: left" value="Fortsätt">
            
            
            </form>
            <script>
                document.getElementById("datum").innerHTML = Date();
            </script>
              
        </nav>

        <article> 

            
            <div class="w3-content w3-section">
                <img class="bildSpel" src="dubai3.jpg" alt="Dubai bild3">
                <img class="bildSpel" src="barcelona.jpg" alt="barcelona bild">
                <img class="bildSpel" src="london.jpg" alt="london bild">
                <img class="bildSpel" src="dubai2.jpg" alt="dubai bild2">
                <img class="bildSpel" src="mauritius.jpg" alt="mauritius bild">
                <img class="bildSpel" src="dubai4.jpg" alt="dubai bild4">
                <img class="bildSpel" src="aten.jpg" alt="aten bild">
            </div>

         <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("bildSpel");
                    for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                    }
                    myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2500); // Ändra bild efter 2.5sekund
                    }
        </script>
        </article>

        <aside>
            <p>
                ALLA BILDER TAGNA AV ALBIN MALMSTEN 
            </p>  
        </aside>
        <footer>
                <br>Albin Malmsten 2017
            
        </footer>
    
    </div>
    </body>
</html>
