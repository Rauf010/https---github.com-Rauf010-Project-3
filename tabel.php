<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
    <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <a href="#" class="logo">ESRI-<span>digitaal</span></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Overons.php">Over Ons</a></li>
                <li><a href="Producten.php">Producten</a></li>
                <li><a href="tabel.php">Voorraad</a></li>
                <li><a href="bestellingen.php">bestellingen</a></li>
            </ul>
         <a href="cart.php"><p>S-cart</p></a>
         
        </header>

        <div class="background_image">
            <img src="image/esri-digitaal.png">
        </div>

<br><br>

<?php
// Maak verbinding met de database
$connect = mysqli_connect("localhost", "root", "", "esri");

// Controleer of het zoekformulier is verstuurd
if(isset($_POST['search']))
{
    // Haal de ingevoerde zoekterm op
    $valueToSearch = mysqli_real_escape_string($connect, $_POST['valueToSearch']);
    
    // Maak de zoekopdracht
    $query = "SELECT * FROM `categorieën` WHERE `categorienaam` LIKE '%".$valueToSearch."%'";
    
    // Voer de zoekopdracht uit
    $search_result = mysqli_query($connect, $query);
}
else {
    // Als het zoekformulier niet is verstuurd, haal dan alle resultaten op
    $query = "SELECT * FROM `categorieën`";
    $search_result = mysqli_query($connect, $query);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form method="post" action="">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
        </form>
        
        <table>
            <tr>
                <th>Id</th>
                <th>Categorienaam</th>
                <th>Productid</th>
                <th>Leverancierid</th>
            </tr>
            
            <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['idcategorie'];?></td>
                    <td><?php echo $row['categorienaam'];?></td>
                    <td><?php echo $row['Producten_idcategorie'];?></td>
                    <td><?php echo $row['leveranciers_idleverancier'];?></td>
                </tr>
            <?php endwhile;?>
        </table>
            </section>
            <footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col">
                    <h4>Ons bedrijf</h4>
                    <ul>
                        <li><a href="ecovriendelijkheid.php">Ecovriendelijkheid</a></li>
                        <li><a href="Medewerkers.php">Onze mederwerkers</a></li>
                        <li><a href="Geschiedenis.php">Geschiedenis</a></li>
                        <li><a href="Doelstelling.php">Doelstelling van het bedrijf</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Overige</h4>
                    <ul>
                        <li><a href="Landenoverzicht.php">landenoverzicht</a></li>
                        <li><a href="Retour policy.php">Leveren/Retourneren?</a></li>
                        <li><a href="Leverancier.php">Leverancier</a></li>
                        <li><a href="tabel.php">Categorie</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Klantenservice</h4>
                    <ul>
                        <li><a href="">Ons vinden?</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="Klacht.php">Klacht indienen?</a></li>
                        <li><a href="Review.php">Review</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Overige</h4>
                    <div class="social">
                        <a href=""><img src="image/facebook.png"></a> <br>
                        <a href=""><img src="image/Googlell.png"></a> <br>
                        <a href=""><img src="image/twitter.png"></a> <br>
                        <a href=""><img src="image/instagram.png"></a>
                    </div>               
                        
                    
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>