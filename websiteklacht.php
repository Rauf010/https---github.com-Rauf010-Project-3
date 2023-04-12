<!-- This is the Klachten pagina voor de website -->

<!-- main code -->
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


    <header class="WKlachten_header">
        <h1> Klachten over website</h1>
    </header>

    <?php include 'Websiteklachtaction.php'; ?>

<form method="post" action="Websiteklachtaction.php"  class="Websiteklacht_form">
    <label for="WVoornaam">Voornaam en Achternaam: </label>
    <input type="text" name="Voornaam" id="Voornaam"><br>

    <label for="WTelefoon">Telefoonnummer: </label>
    <input type="number" name="Wtelefoon" id="Wtelefoon"><br>

    <label for="WAdress">Adress: </label>
    <input type="text" name="WAdress" id="WAdress"><br>

    <label for="WPostcode">Postcode: </label>
    <input type="text" name="WPostcode" id="WPostcode"><br>

    <div id="WGeslacht">
        <label for="WGeslacht">Man</label>    
        <input type="radio" name="Wgeslacht" value="Man" id="Wgeslacht">
        <label for="WGeslacht">Vrouw</label>   
        <input type="radio" name="Wgeslacht" value="Vrouw" id="Wgeslacht">
    </div> <br>

    <label for="W_Klacht">Wat is de klacht?</label>
    <input type="text" name="W_Klacht" class="WKlacht_text" id="W_Klacht">
    <br>

    <label for="WKlacht_fix">Wat zou u wijzigen om deze klacht op te lossen? </label>
    <input type="text" name="WKlacht_fix" class="WKlacht_text" id="WKlacht_fix"><br>

    <br><br>

    <input type="submit" value="Verzenden" name="submit_btn" id="WKlacht_submit">
</form>
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
</main>