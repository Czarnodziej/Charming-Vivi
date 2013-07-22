<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Wesoła wycieczka w treść</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
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
        <span id="logo"><a href="#"><i class="icon-fixed-width icon-home"></i>SuperLogo</a></span>
        <a href="#">Teksty</a>
        <a href="javascript/">Javascript</a>
        <a href="autor/">Autor</a>
      </nav>
    </div>
    <div id="main-container">
      <nav id="lewa-kolumna">
        <ul id="sidenav">
          <li>
            <a href="#"><i class="icon-fixed-width icon-book"></i>Teksty dowolne</a>
          </li>
          <li id="rozwin">
            <a href="javascript/"><i class="icon-fixed-width icon-magic"></i>Javascript</a>
            <a href="javascript/">"Czysty" Javascript</a>
            <a href="javascript/">jQuery</a>
          </li>
          <li>
            <a href="autor/"><i class="icon-fixed-width icon-thumbs-up"></i>Autorskie opisy</a>
          </li>
        </ul>
        <p class="social">
          <a href="https://www.facebook.com/marcin.marcinowy.5">
            <img src="img/facebook_32.png" alt="ikona facebooka" />
          </a>
          <a href="https://twitter.com/Czarnodziej">
            <img src="img/twitter_32.png" alt="ikona twittera" />
          </a>
          <a href="mailto:pagodemc@gmail.com">
            <img src="img/mail_32.png" alt="ikona poczty" />
          </a>
          <a href="https://github.com/Czarnodziej">
            <img src="img/github_32.png" alt="ikona GitHub" />
          </a>
        </p>
      </nav>
      <article>
        <header>
          <h1>Witam tutaj, bo przecież nie gdzieś indziej.</h1>
        </header>
        <p>
          <a href="#">
            <img class="obrazek" src="img/1min.gif" alt="randomowy obrazek kunsztownie wykonany w paincie">
          </a>
        </p>
        <p>Strona ma charakter rozwojowy. Co oznacza tyle, że jest tu mało zawartości, a docelowo będzie więcej. Dodatkowo znaczy to też, że do świetnego wyświetlania strony
          niezbędna jest aktualna przeglądarka internetowa.
          <br>W planach są:
        </p>
        <ul class="icons-ul">
          <li><i class="icon-li icon-screenshot icon-large"></i>Wykorzystanie frameworka Compass oraz Netbeans IDE</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Konstrukcja blogowa z wykorzystaniem frameworka Cake PHP</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Wielce użyteczne formularze z wykorzystaniem AJAX</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Wykorzystanie Javascript do stworzenia prostej gry przeglądarkowej</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Optymalizacja skryptów i szybsze wczytywanie strony</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Parallax Scrolling</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Kilka artykułów nt. technologii internetowo-komputerowych z naciskiem na dostępność dla zwykłych użytkowników</li>
        </ul>
        <p>Wszystkie powyższe założenia będą wdrażane z zachowaniem wysokiej przejrzystości strony i dostępności zawartych tutaj informacji. Idąc rozwojowym torem,
          powyższych celów będzie więcej, bo apetyt na ów rozwój rośnie wraz z ilością poznawanych technologii (<i class="icon-food icon-large"></i> + <i class="icon-cogs icon-large"></i> =
          <i class="icon-smile icon-large"></i>). A tych nie brakuje.</p>
      </article>
      <footer id="stopka-strony">
        <p class="social">
          <a href="https://www.facebook.com/marcin.marcinowy.5">
            <img src="img/facebook_32.png" alt="ikona facebooka" />
          </a>
          <a href="https://twitter.com/Czarnodziej">
            <img src="img/twitter_32.png" alt="ikona twittera" />
          </a>
          <a href="mailto:pagodemc@gmail.com">
            <img src="img/mail_32.png" alt="ikona poczty" />
          </a>
          <a href="https://github.com/Czarnodziej">
            <img src="img/github_32.png" alt="ikona GitHub" />
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
    <script src="js/main.js"></script>
  </body>
</html>