<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Wesoła wycieczka w treść</title>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:700&amp;subset=latin-ext' type='text/css'>
    <link rel="stylesheet" href="../css/smoothness/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../css/normalize-min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
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
        <a href="#" title="Tutaj jesteś">Javascript</a>
        <a href="../autor">Autor</a>
      </nav>
    </div>
    <div id="main-container">
      <nav id="lewa-kolumna">
        <ul id="sidenav">
          <li>
            <a href="../teksty/"><i class="icon-fixed-width icon-book"></i>Teksty dowolne</a>
          </li>
          <li id="rozwin">
            <a href="#" title="Tutaj jesteś"><i class="icon-fixed-width icon-magic"></i>Javascript</a> 
            <a href="#">"Czysty" Javascript</a> 
            <a href="#">jQuery</a>
          </li>
          <li>
            <a href="../autor/"><i class="icon-fixed-width icon-thumbs-up"></i>Autorskie opisy</a>
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
      <article class="clearfix">
        <!--żeby float zachowywał wysokość kontenera-->
        <header>
          <h1>Czary-mary przeglądarkowe.</h1>
        </header>
        <p>Przykłady skryptów z wykorzystaniem jQuery.</p>
        <p>1. Wybór daty:
          <input type="text" id="datepicker" class="button"value="Klik mnie!" title="No kliknij." />
        </p>
        <p>2. Dymki tekstowe:
          <a href="#" title="Cudna chmurka-dymek!">Tutaj kursorem najedź!</a>
        </p>
        <p>3. Zakładki:</p>
        <div id="tabs">
          <ul>
            <li>
              <a href="#tabs-1">Pierwsza</a>
            </li>
            <li>
              <a href="#tabs-2">Kolejna</a>
            </li>
            <li>
              <a href="#tabs-3">Ostatnia</a>
            </li>
          </ul>
          <div id="tabs-1">
            <p>
              <strong>Możesz zmieniać kolejność zakładek za pomocą "przeciągnij i upuść".</strong>
            </p>
            <p>Super łacina.Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum
              quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula
              eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin.
              Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
          </div>
          <div id="tabs-2">
            <p>Jeszcze bardziej super łacina. Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque
              molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem.
              Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat
              nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere,
              felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
          </div>
          <div id="tabs-3">
            <p>Najbardziej super łacina. Znowu.Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent
              viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros,
              id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Ehehe. Donec nisi lectus, feugiat porttitor,
              tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a
              libero vitae lectus hendrerit hendrerit.</p>
          </div>
        </div>
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
          include ("../php/dataPL.php");
          ?>
        </p>
      </footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script> window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>');</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script> window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>');</script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script> window.jQuery || document.write('<script src="js/vendor/jquery-ui-1.10.3.min.js"><\/script>');</script>
    <script src="../js/vendor/jquery.ui.datepicker-pl.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/uiconfig.js"></script>
  </body>
</html>