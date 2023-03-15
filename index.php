<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    -->
    <title>ZSZ Hajnówka</title>
</head>
<body class="bg-light-subtle d-flex flex-column min-vh-100" data-bs-theme="dark">
    <!--    Navbar
            Strona główna     Dla uczniów | Egzamin zawodowy      Dyplomy | Stypendyści | Najlepsi uczniowie | Archiwum
            Strona główna - Idzie do index.php
            Kontakt - Przejście do strony kontaktowej do dyrekcji i nauczycieli (Zamiast dodatkowego wpisu do kadry na panelu lewym)
            Dla uczniów - CV, strony od matur i egzaminow zawodowych (dac cos lepszego niz jest podane)
            Egzamin zawodowy - (dropdown menu) profile ksztalcenia i korespondujace strony z egzaminami 
            Dyplomy - FIX ASAP (dropdown menu) roczniki
            Stypendyści - FIX ASAP (dropdown menu) roczniki
            Najlepsi uczniowie - okej to dziala ale jacobs uladnic
            Archiwum - Zapisane poprzednie panele boczne razem z ich korespondujacymi stronami 
    -->

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark sticky-top">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
            <img src="img/zespol3-logo.png" alt="Logo" class="bi ms-3" width="40" height="40">
            <span class="fs-4 ms-3">ZSZ Hajnówka</span>
        </a>
  
        <ul class="nav nav-pills me-3">
            <!-- Tak beda dropdowny \/ -->
            <li class="nav-item"><a href="https://uonetplus.vulcan.net.pl/powiathajnowski"><button class="btn btn-dark">Dziennik elektroniczny</button></a></li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dla uczniów
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="https://zszhajnowka.pl/menu-lewe/plany-lekcji/index.html">Plany lekcji</a></li>
                        <li><a class="dropdown-item" href="https://zszhajnowka.pl/menu-lewe/podreczniki-po-gimnazjum.htm">Podręczniki</a></li>
                        <li><a class="dropdown-item" href="https://arkusze.pl/">Matury / Egzaminy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://europa.eu/europass/pl/create-europass-cv">Kreator CV</a></li>
                    </ul>
                </div>
            </li>
            <!-- zwykle guziki najlepiej przerobic na dropdowny \/ -->
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dla nauczycieli
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="https://zszhajnowka.pl/menu-lewe/plany-lekcji-nauczycieli/index.html">Rozkład kadry</a></li>
                        <li><a class="dropdown-item" href="https://zszhajnowka.pl/menu-lewe/podreczniki-po-podstawowce.htm">Podręczniki</a></li>
                        <li><a class="dropdown-item" href="https://arkusze.pl/">Matury / Egzaminy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://europa.eu/europass/pl/create-europass-cv">Kreator CV</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropleft">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    O uczniach
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Stypendyści</a></li>
                        <li><a class="dropdown-item" href="#">Najlepsi uczniowie</a></li>
                        <li><a class="dropdown-item" href="#">Dyplomy</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </header>
    <main>
        <!--
            Banner z opisem szkoly i nazwa
            panel lewy wysuwany po scrollnieciu albo panel staly po lewej
            main panel musi byc mozliwy do zmiany dynamicznie czyli trzeba cos wykminic
            po prawej patroni i inne
        -->
        <div class="table">
            <div class="row col-sm-5">

            </div>
        </div>
    </main>
    <section>
        <!--
            Panel lewy - Zrobić cokolwiek zeby nie zajmowała dużo miejsca akordeon
            Dostępność - Drogi kontaktowe przez email, jak wejść do szkoły (przez drzwi)
            Menu - Dużo
            100-Lecie Niepodległości (nie wiem czemu dalej to tu leży ale ok)
            Rok szkolny - Szukajka do wydarzeń w danym roku szkolnym i lista segregowana alfabetycznie ów wydarzeń
        -->
    </section>
    <section>
        <!--
            Panel prawy - Dodatkowe informacje
            Herb
            Dzwonki
            Patroni / partnerzy
            E-Dziennik
            Kalendarz (WAZNE)
            Wazne strony (CKE OKE itp)
            *bip*
        -->
    </section>
    <footer class="row py-4 border-top bg-dark mt-auto mx-auto w-100">
        <div class="ps-5 col col-md-4 col-xl-4 col-sm-12">
            <a href="/" class="d-flex align-items-center mb-2 link-dark text-decoration-none">
                <img src="img/zespol3-logo.png" alt="Logo" class="bi me-2" width="40" height="40">
                <h5 class="ms-2 pe-4 text-light">Zespół Szkół Zawodowych w Hajnówce</h5>
            </a>
            
            <p class="text-muted mb-2 p-0">Telefon: +48 856822071</p>
            <p class="text-muted mb-2 p-0">Adres: 17-200 Hajnówka, ul. 3 Maja 25</p>
            <p class="text-muted mb-2 p-0">E-Mail: zsz_hajnowka@op.pl</p>
            <p class="text-muted mb-2 p-0">ZSZ Hajnówka © 2023</p>
        </div>

        <div class="col col-md-3 col-xl-3 col-sm-12">
        <h5 class="ms-2 pe-4 text-light">Kontakt i dostępność</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontakt</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Dostępnośc kadry</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pedagog, psycholog</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rozkład kadry</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kadra dydaktyczna / Wychowawcy</a></li>
        </ul>
        </div>

        <div class="col col-md-3 col-xl-3 col-sm-12">
            <h5 class="ms-2 pe-4 text-light">Informacje</h5>
            <!-- RODO i inne rzeczy typu prawo tutaj \/-->
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://www.zszhajnowka.pl/menu-lewe/rodo.htm" class="nav-link p-0 text-muted">RODO</a></li>
                <li class="nav-item mb-2"><a href="https://www.zszhajnowka.pl/menu-lewe/biblioteka.htm" class="nav-link p-0 text-muted">Biblioteka</a></li>
                <li class="nav-item mb-2"><a href="https://www.zszhajnowka.pl/menu-lewe/samorzad-uczniowski.htm" class="nav-link p-0 text-muted">Samorząd uczniowski</a></li>
                <li class="nav-item mb-2"></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col col-md-2 col-xl-2 col-sm-12">
        <h5 class="ms-2 pe-4 text-light">Section</h5>
        <!-- Nie mam pojecia co tu ma byc ale raczej cos sie jeszcze wcisnie -->
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
        </div>
    </footer>
    <!-- Jakis js do bootstrapa ogolnie mozna robic smieszne dzieki temu -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>