<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Wesoła wycieczka w treść</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/styl.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/png">

    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>

  </head>

  <body>
    <!--[if lt IE 7]>
      <p class="chromeframe">Używasz <strong>przestarzałej</strong>przeglądarki.
      Gorąco zalecam <a href="http://browsehappy.com/">aktualizację</a> 
      lub <a href="http://www.google.com/chromeframe/?redirect=true">aktywację Google Chrome Frame</a>.
      Aktualna przeglądarka to podstawa prawidłowego wyświetlania stron i bezpiecznego korzystania z internetu.</p>
    <![endif]-->
    <div id="gora-kontener">
      <nav id="topbar">
        <span id="logo"><a href="../"><i class="icon-fixed-width icon-home"></i>SuperLogo</a></span>
        <a href="#">Teksty</a>
        <a href="../javascript">Javascript</a>
        <a href="#" title="Tutaj jesteś">Autor</a>
      </nav>
    </div>
    <div id="main-container">
      <nav id="lewa-kolumna">
        <ul id="sidenav">
          <li>
            <a href="#"><i class="icon-fixed-width icon-book"></i>Teksty dowolne</a>
          </li>
          <li id="rozwin">
            <a href="../javascript/"><i class="icon-fixed-width icon-magic"></i>Javascript</a> 
            <a href="../javascript/">"Czysty" Javascript</a> 
            <a href="../javascript/">jQuery</a>
          </li>
          <li>
            <a href="#" title="Tutaj jesteś"><i class="icon-fixed-width icon-thumbs-up"></i>Autorskie opisy</a>
          </li>
        </ul>
        <p class="social">
          <a href="https://www.facebook.com/marcin.marcinowy.5">
            <img src="../img/facebook_32.png" alt="ikona facebooka" />
          </a>
          <a href="https://twitter.com/Czarnodziej">
            <img src="../img/twitter_32.png" alt="ikona twittera" />
          </a>
          <a href="mailto:pagodemc@gmail.com">
            <img src="../img/mail_32.png" alt="ikona poczty" />
          </a>
          <a href="https://github.com/Czarnodziej">
            <img src="../img/github_32.png" alt="ikona GitHub" />
          </a>
        </p>
      </nav>
      <article class="clearfix">
        <!--żeby float zachowywał wysokość kontenera-->
        <header>
          <h1>Autorskie motywacje</h1>
        </header>
        <p>Powstannie strony jest spowodowane specyficzną potrzebą, zwaną "ciekawość". Katastrofalna w skutkach, manifestująca się w nieskończonych "jak to działa/dlaczego
          tak/jak to zmienię to co się stanie?". Dodatkową przyczyną była chęć podzielenia się ze światem swym własnym punktem widzenia, którego forma tekstowa ilością
          znaków przekraczała standardową objętość wiadomości na forum czy jakże ciekawego wpisu na fb czy twitterze. Dlatego umieszczam tutaj tylko najciekawsze treści.
          Żadne inne.</p>
        <p>Główne założenia techniczne:</p>
        <ul class="icons-ul">
          <li><i class="icon-li icon-ok icon-large"></i>przejrzystość (to, co dobrze wygląda, jest fajniejsze. Zazwyczaj)</li>
          <li><i class="icon-li icon-ok icon-large"></i>minimalizm szaty graficznej (nadmiar szat wskazany w zimowej porze roku, a tutaj panuje wiecznie radosne lato
            <i class="icon-fixed-width icon-spin icon-smile"></i><i class="icon-fixed-width icon-sun"></i>)</li>
          <li><i class="icon-li icon-ok icon-large"></i>czysty kod (ułatwia dalszy rozwój strony)</li>
          <li><i class="icon-li icon-ok icon-large"></i>idea hucznie zwana
            <abbr title="Responsive Web Design">RWD</abbr>, która pozwala na sprawne wyświetlanie strony na wielkich monitorach oraz mniejszych ekranach tabletowo-komórkowo-smartfonowych</li>
        </ul>
        <p>Rezultat graficzny jest wyraźnie widoczny, choć daleki od perfekcjonistycznych zapędów autora. Kod źródłowy dostępny jest dla wtajemniczonych. <abbr title="nie mylić z oznaczeniami samochodowymi czy samolotowymi">RWD</abbr> manifestuje
          samo siebie podczas gdy okno przeglądarki zmienia swój rozmiar. Polecam sprawdzić osobiście, bo to wspaniale rozrywkowy przerywnik, w przeciwieństwie do
          czytania wątpliwie interesującego tekstu.
        </p>
        <p>Autorskie umiejętności:
          <button id="button" type="button">Pokaż detale</button>
        </p>
        <ul id="skills">
          <li>HTML5/CSS3 <span class="three-star-half"></span>
            <p>Kod zgodny z W3C i RWD. Netbeans IDE, Zen Grids, Emmet, HTML5 Boilerplate. Arystokracja.</p>
          </li>
          <li>JavaScript <span class="one-star-half"></span>
            <p>Podstawowa manipulacja DOM, funkcje, pętle, tablice. Podstawowa obsługa jQuery. Debugowanie. Kod zgodny z JShint.
              <br>TBD: AJAX
            </p>
          </li>
          <li>PHP <span class="one-star"></span>
            <p>Podstawowe zagadnienia: pętle, tablice, obiekty. MVC piękne wypieczone w CakePHP.</p>
          </li>
          <li>MySQL <span class="two-star"></span>
            <p>Edycja, administracja, kodowanie znaków.</p>
          </li>
          <li>GIT <span class="one-star-half"></span>
            <p>Obsługa Github. TBD: commandline.</p>
          </li>
          <li>Apache <span class="two-star"></span>
            <p>Konfiguracja XAMPP: Dynamic Virtual Hosts + Dnsmasq, moduły.</p>
          </li>
          <li>Linux <span class="two-star"></span>
            <p>Linux Mint: konfiguracja, instalacja pakietów, podstawy terminala. TBD: zaawansowana obsługa terminala.</p>
          </li>
          <li>Windows <span class="four-star"></span>
            <p>Windows 95,98,XP,7,8. Zaawansowana konfiguracja, obsługa narzędzi administracyjnych, optymalizacja usług i działania, diagnostyka błędów.
              <br>Oprogramowanie: Notepad++, Netbeans IDE, Windows PowerShell, Libre Office, Paint.net, GIMP, Audacity, VirtualBox.</p>
          </li>
          <li>Sprzęt komputerowy <span class="four-star"></span>
            <p>Diagnostyka działania, instalacja podzespołów, zaawansowana konfiguracja, najnowsze trendy, zaawansowany overclocking, DD-WRT.</p>
          </li>
          <li>Technologie mobilne<span class="two-star-half"></span>
            <p>Android: Diagnostyka działania, zaawansowana konfiguracja, najnowsze trendy, kompilacja źródeł.</p>
          </li>
          <li>Marketing<span class="two-star"></span>
            <p>Tworzenie sloganów i tekstów reklamowych.</p>
          </li>
          <li>Język polski <span class="four-star-half"></span>
            <p>Poprawny gramatycznie i bogaty leksykalnie.</p>
          </li>
          <li>Język angielski <span class="four-star"></span>
            <p>Zaawansowana znajomość mowy oraz pisma.</p>
          </li>
          <li>Spryt <span class="four-star-half"></span>
            <p>Wysoce rozwinięty, sprawnie wspomagany technologiami informatycznymi.</p>
          </li>
          <li>Potrzeba zdobywania wiedzy <span class="five-star"></span>
            <p>Nieustanna i ściśle współgrająca ze sprytem.</p>
          </li>
          <li>Poczucie humoru <span class="three-star-half"></span>
            <p>Co zero powiedziało do ósemki?
              <br>"Fajny masz pasek."
              <br>TBD: Coś śmieszniejszego.</p>
          </li>
        </ul>
      </article>
      <footer id="stopka-strony">
        <p class="social">
          <a href="https://www.facebook.com/marcin.marcinowy.5">
            <img src="../img/facebook_32.png" alt="ikona facebooka" />
          </a>
          <a href="https://twitter.com/Czarnodziej">
            <img src="../img/twitter_32.png" alt="ikona twittera" />
          </a>
          <a href="mailto:pagodemc@gmail.com">
            <img src="../img/mail_32.png" alt="ikona poczty" />
          </a>
          <a href="https://github.com/Czarnodziej">
            <img src="../img/github_32.png" alt="ikona GitHub" />
          </a>
        </p>
        <p>©2013. Kopiowanie treści strony bez zgody autora jest czynem karygodnym.<br>
          <?php
          setlocale(LC_ALL, 'pl');

          function strftimeV($format, $timestamp) {
            return iconv("ISO-8859-2", "UTF-8", ucfirst(strftime($format, $timestamp)));
          }

          function get_page_mod_time() {
            $incls = get_included_files();
            $incls = array_filter($incls, "is_file");
            $mod_times = array_map('filemtime', $incls);
            $mod_time = max($mod_times);
            return $mod_time;
          }

          echo "Ostatnia aktualizacja: " . strftimeV("%A %d %B %Y", get_page_mod_time());
          ?>
        </p>
      </footer>
    </div>   
    <script src="../js/main.js"></script>
    <script src="../js/detalButton.js"></script>
  </body>
</html>