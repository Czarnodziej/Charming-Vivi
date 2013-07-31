<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Wesoła wycieczka w treść</title>
    <link rel="stylesheet" href="css/style-min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
        <div class="social">
          <a href="https://www.facebook.com/marcin.marcinowy.5">
            <span class="fb"></span>
          </a>
          <a href="https://twitter.com/Czarnodziej">
            <span class="tw"></span>
          </a>
          <a href="mailto:pagodemc@gmail.com">
            <span class="mail"></span>
          </a>
          <a href="https://github.com/Czarnodziej">
            <span class="gh"></span>
          </a>
        </div>
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
          <li><i class="icon-li icon-screenshot icon-large"></i>Konstrukcja blogowa z wykorzystaniem frameworka Cake PHP</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Wielce użyteczne formularze z wykorzystaniem AJAX</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Wykorzystanie Javascript do stworzenia prostej gry przeglądarkowej</li>
          <li><i class="icon-li icon-screenshot icon-large"></i>Kilka artykułów nt. technologii internetowo-komputerowych z naciskiem na dostępność dla zwykłych użytkowników</li>
        </ul>
        <p>Wszystkie powyższe założenia będą wdrażane z zachowaniem wysokiej przejrzystości strony i dostępności zawartych tutaj informacji. Idąc rozwojowym torem,
          powyższych celów będzie więcej, bo apetyt na ów rozwój rośnie wraz z ilością poznawanych technologii (<i class="icon-food icon-large"></i> + <i class="icon-cogs icon-large"></i> =
          <i class="icon-smile icon-large"></i>). A tych nie brakuje.</p>
      </article>
      <footer id="stopka-strony">
        <div class="social">
          <a href="https://www.facebook.com/marcin.marcinowy.5">
            <span class="fb"></span>
          </a>
          <a href="https://twitter.com/Czarnodziej">
            <span class="tw"></span>
          </a>
          <a href="mailto:pagodemc@gmail.com">
            <span class="mail"></span>
          </a>
          <a href="https://github.com/Czarnodziej">
            <span class="gh"></span>
          </a>
        </div>
        <p>©2013. Kopiowanie treści strony bez zgody autora jest czynem karygodnym.<br>
          <?php
          include ("php/dataPL.php");
          ?>
        </p>
      </footer>
    </div> 
    <script src="js/script-min.js"></script>
  </body>
</html>