<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep muzyczny</title>
    <link rel="stylesheet" href="muzyka.css">
</head>
<body>
    <section id="baner">
        <h1>SKLEP MUZYCZNY</h1>
    </section>
    <section id="panelLewy">
        <h2>NASZA OFERTA</h2>
        <ol>
            <li>
                Instrumenty muzyczne
            </li>
            <li>
                Sprzęt audio
            </li>
            <li>
                Płyty CD
            </li>
        </ol>
    </section>
    <section id="panelPrawy">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $imie = $_POST["imie"];
                $nazwisko = $_POST["nazwisko"];
                $adres = $_POST["adres"];
                $telefon = $_POST["telefon"];

                echo("Konto $imie $nazwisko zostało zarejestrowane w sklepie muzycznym. <br>");

                echo("<br>Dane pobrane z formularza:");
                echo("<br>Imię: $imie");
                echo("<br>Nazwisko: $nazwisko");
                echo("<br>Adres: $adres");
                echo("<br>Telefon: $telefon");
            }
        ?>
    </section>
</body>
</html>