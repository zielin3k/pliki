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
            <form method="POST">
                <label for="x">Ilu pracowników potrzebujesz?</label><br>
                <input type="number" id="x">
                <button type="submit">Szukaj firm</button>
            </form>
            
        </section>
        <section id="srodek">
            <h2>
                Dla wykonawców
                <form method="POST">
                    <select>
                        <!-- skrypt2 -->
                    </select>
                    <br>
                    
                    <input type="radio" name="wykonanie" id="Malowanie" checked>
                    <label for="malowanie">Malowanie</label><br>
                    
                    <input type="radio" name="wykonanie" id="Gipsowanie">
                    <label for="Gipsowanie">Gipsowanie</label><br>
                    <input type="submit" value="Szukaj klientów">
                </form>
            </h2>
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