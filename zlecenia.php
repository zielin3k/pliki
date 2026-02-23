<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remonty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Malowanie i gipsowanie</h1>
    </header>
    <main>
        <nav>
            <a href="kontakt.html">Kontakt</a>
            <a href="https://remonty.pl" target="_blank">Partnerzy</a>
        </nav>
        <section id="lewa">
            <h2>Dla klientów</h2>
            <form action="zlecenia.php" method="POST">
                <label for="pracownicy">Ilu pracowników potrzebujesz?</label><br>
                <input type="number" name="nameee" id="x">
                <button type="submit" name="formularz1">Szukaj firm</button>
            </form>

            <?php
                $polaczenie = new mysqli("localhost", "root","" ,"remonty");

                if(isset($_POST["formularz1"]) && !empty($_POST["nameee"])) {
                $liczba_pracownikow = $_POST['nameee'];
                $sql = "SELECT nazwa_firmy, liczba_pracownikow FROM wykonawcy WHERE liczba_pracownikow >= $liczba_pracownikow";
                $wyniki = $polaczenie -> query($sql);

                while ($wiersz = $wyniki->fetch_assoc()){
                    echo "<p>";
                    echo $wiersz["nazwa_firmy"] . ", ";
                    echo $wiersz["liczba_pracownikow"]. ", ";
                    echo "pracowników";
                    echo "</p>";
                }
            }
            ?>
            
        </section>
        <section id="srodek">
            <h2>
                Dla wykonawców
                </h2>
                <form method="POST">
                    <select>
                        <?php
                            $sql = "SELECT DISTINCT miasto FROM klienci ORDER BY miasto ASC";
                            $wyniki = $polaczenie->query($sql);

                            while ($wiersz = $wyniki->fetch_assoc()){
                                echo "<option value>";
                                echo $wiersz["miasto"];
                                echo "</option>";
                            }
                        ?>
                    </select>
                    <br>
                    
                    <input type="radio" name="wykonanie" id="Malowanie" checked>
                    <label for="malowanie">Malowanie</label><br>
                    
                    <input type="radio" name="wykonanie" id="Gipsowanie">
                    <label for="Gipsowanie">Gipsowanie</label><br>
                    <input type="submit" name="formularz2" value="Szukaj klientów">
                    </form>
                    <ul>
                    <?php

                    if(isset($_POST["formularz2"])) {
                        $sql = "SELECT imie, cena FROM klienci JOIN zlecenia ON zlecenia.id_klienta=klienci.id_klienta WHERE miasto = 'Poznań' AND rodzaj='malowanie';";
                        $wyniki = $polaczenie->query($sql);

                        while ($wiersz = $wyniki-> fetch_assoc()){
                            echo "<li>";
                            echo $wiersz["imie"]. " - ";
                            echo $wiersz["cena"];
                            echo "</li>";
                        }
                    }                                

                    ?>
                    </ul>
        </section>
        <aside>
            <img src="tapeta_lewa.png" alt="usługi">
            <br>
            <img src="tapeta_prawa.png" alt="usługi">
            <br>
            <img src="tapeta_lewa.png" alt="usługi">
        </aside>
    </main>
    <footer>
        <p>Strone wykonał: 000000000000</p>
    </footer>
</body>
</html>

<?php
$polaczenie->close();
?>