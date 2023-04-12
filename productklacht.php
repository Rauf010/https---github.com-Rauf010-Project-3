<!-- This is the product complaint form -->
<!-- Author: Rauf -->
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


<!-- Main code -->
<main>


    <section>
        <form method="post" action="Productklacht_Action.php"  class="productklacht_form">
            <label for="f_name">Voornaam: </label>
            <input type="text" name="f_name"> 
            <br>

            <label for="l_name">Achternaam: </label>
            <input type="text" name="l_name">
            <br>

            <label for="phone">Telefoonnummer: </label>
            <input type="number" name="phone">
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email">
            <br>

            <div id="productklacht_gender">
                <label for="gender">Man</label>    
                <input type="radio" name="gender" value="Man">
                <label for="gender">Vrouw</label>   
                <input type="radio" name="gender" value="Vrouw">
            </div>
            <br>

            <label for="product_naam">Over welk product gaat het?</label>
            <input type="text" name="product_naam">
            <br>

            <label for="klacht_beschrijving">Wat is uw klacht over dit product?</label>
            <textarea type="textarea" name="klacht_beschrijving" class="productklacht_text"></textarea>
            <br>

            <label for="klacht_oplossing">Hoe wilt u dat wij dit oplossen?</label>
            <textarea name="klacht_oplossing" class="productklacht_text"></textarea>
            <br>

            <br>
            <input type="submit" value="Verzenden" name="submit_btn" id="productklacht_submit">
        </form>
    </section>

</main>

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