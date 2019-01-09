<!DOCTYPE html>
<html lang="nl">
<head>

    <!-- De UTF waar de website in gecodeerd wordt -->
    <meta charset="UTF-8">

    <!-- Standaard descriptie voor SEO -->
    <meta name="description" content="Brian Postma en Jelmer Evers" />
    <meta name="keywords" content="honden, leuke dieren, dierenvoedsel, hondenspeeltjes, speeltjes, speelgoed, hondenspeelgoed, all for paws, allforpaws" />
    <meta name="author" content="All for Paws; Jelmer Evers, Brian Postma">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <?php include("required/general.php"); ?>

    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- De titel die bovenaan weergegeven word -->
    <title>All for Paws - Login en Registreer pagina</title>

</head>

<body>

<?php include("required/header.php"); ?>

<main>
    <div class="page container">
        <section class="loginPage">

            <h1>Login & Registreren</h1>

            <div class="row">

                <div class="col-2">

                    <h2>Login</h2>

                    <form>
                        <label>E-mailadres:</label>
                        <input type="email" name="email" placeholder="jan.jansen@hotmail.com">

                        <label>Password:</label>
                        <input type="password" name="password" placeholder="**********">

                        <label>Gegevens onthouden:</label>
                        <input type="checkbox">

                        <input type="submit" name="loginSubmit" value="Login">
                    </form>
                </div>

                <div class="col-2">

                    <h2>Registreren</h2>

                    <form>
                        <span class="input-group-6">
                            <label>Voornaam:</label>
                            <input type="text" name="voornaam" placeholder="Voornaam">
                        </span>

                        <span class="input-group-6">
                            <label>Achternaam:</label>
                            <input type="text" name="voornaam" placeholder="Achternaam">
                        </span>

                        <label>Geslacht:</label>
                        <select name="geslacht">
                            <option selected>Kies uw geslacht...</option>
                            <option>Man</option>
                            <option>Vrouw</option>
                        </select>

                        <label>E-mailadres:</label>
                        <input type="email" name="email" placeholder="jan.jansen@hotmail.com">

                        <span class="input-group-10">
                            <label>Straat:</label>
                            <input type="text" name="straat" placeholder="Wilhemusstraat">
                        </span>

                        <span class="input-group-2">
                            <label>Huisnr:</label>
                            <input type="text" name="huisnummer" placeholder="12">
                        </span>

                        <span class="input-group-10">
                            <label>Stad:</label>
                            <input type="text" name="stad" placeholder="Amsterdam">
                        </span>

                        <span class="input-group-2">
                            <label>Postcode:</label>
                            <input type="text" name="stad" placeholder="1234 AB">
                        </span>

                        <label>Wachtwoord:</label>
                        <input type="password" name="password" placeholder="**********">

                        <label>Wachtwoord verifiëren:</label>
                        <input type="password" name="password" placeholder="**********">

                        <input type="submit" name="loginSubmit" value="Registreren">
                    </form>
                </div>
            </div>
        </section>

        <section class="bijdrageSchrijven-withLogin">

            <h2>Schrijf uw artikel.</h2>

            <label>Beschrijf hier uw tekst</label>
            <textarea name="bijdrageText" placeholder="Schrijf hier uw tekst"></textarea>
            <form>

                <label>Selecteer rubriek</label>
                <select name="rubriek">
                    <option selected>Geen</option>
                    <option>Grote honden</option>
                    <option>Bulldog</option>
                    <option>Duitse herder</option>
                    <option>Franse bulldog</option>
                    <option>Beagle</option>
                    <option>Jack russel</option>
                    <option>Golden retriever</option>
                    <option>Huskey</option>
                    <option>Boxer</option>
                    <option>Chihuahua</option>
                </select>

                <input type="submit" name="articlePost" value="Verzenden">
            </form>

        </section>
    </div>
</main>

<?php include("required/footer.php"); ?>

</body>
</html>