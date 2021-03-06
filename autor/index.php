<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Wesoła wycieczka w treść</title>
    <link rel="stylesheet" href="../css/style-min.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
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
        <p>Rezultat graficzny jest wyraźnie widoczny, choć daleki od perfekcjonistycznych zapędów autora. Kod źródłowy dostępny jest dla <a href="https://github.com/Czarnodziej/Charming-Vivi">wtajemniczonych</a>. <abbr title="nie mylić z oznaczeniami samochodowymi czy samolotowymi">RWD</abbr> manifestuje
          samo siebie podczas gdy okno przeglądarki zmienia swój rozmiar. Polecam sprawdzić osobiście, bo to wspaniale rozrywkowy przerywnik, w przeciwieństwie do
          czytania wątpliwie interesującego tekstu.
        </p>
        <p>Autorskie umiejętności, dla wielbiących gwiazdki oraz statystyki bez wyraźnego punktu odniesienia:</p>
         <p><button id="button" type="button"class="button">Pokaż sensowniejszy opis</button></p>
        </p>
        <ul id="skills">
          <li>HTML5/CSS3 <span class="four-star"></span>
            <p><a href="http://en.wikipedia.org/wiki/Responsive_web_design">RWD</a>, <a href="http://netbeans.org/features/index.html">Netbeans IDE</a>, <a href="http://zengrids.com/">Zen Grids</a>, <a href="http://emmet.io/">Emmet</a>, <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>, <a href="http://en.wikipedia.org/wiki/Sprite_%28computer_graphics%29#Sprites_by_CSS">CSS Sprite</a>, IE8+.<br>
              <a href="http://developers.google.com/speed/pagespeed/insights/?url=czarnodziej.sanfre.eu%2F">Optymalna prędkość</a>.
              <br>Todo: <a href="http://yeoman.io">Yeoman</a>, <a href="http://foundation.zurb.com/">Foundation 4</a>, <a href="http://jvi.sourceforge.net/">jVi</a> 
            </p>
          </li>
          <li>JavaScript <span class="one-star-half"></span>
            <p>Podstawowa manipulacja DOM, funkcje, pętle, tablice. Podstawowa obsługa <a href="http://jquery.com/">jQuery</a>. <a href="https://getfirebug.com/">Debugowanie</a>. Kod zgodny z <a href="http://www.jshint.com/">JShint.</a>
              <br>Todo: <a href="http://pl.wikipedia.org/wiki/AJAX">AJAX</a>, <a href="http://angularjs.org/">Angular.js</a>
            </p>
          </li>
          <li>PHP <span class="one-star"></span>
            <p>Podstawowe zagadnienia: pętle, tablice, obiekty. <a href="http://pl.wikipedia.org/wiki/Model-View-Controller">MVC</a> piękne wypieczone w <a href="http://cakephp.org/">CakePHP</a>.
            <br>Todo: blog/CMS MVC w CakePHP</p>
          </li>
          <li>Apache <span class="two-star"></span>
            <p>Konfiguracja <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a>: <a href="http://httpd.apache.org/docs/2.2/vhosts/mass.html">Dynamic Virtual Hosts</a> + <a href="http://pl.wikipedia.org/wiki/Dnsmasq">Dnsmasq</a>, PHP, MySQL, cache, gzip.
            </p>
          </li>
          <li>Linux <span class="two-star"></span>
            <p><a href="http://www.linuxmint.com/">Linux Mint</a>: konfiguracja, instalacja pakietów, podstawy terminala. 
              <br>Todo: zaawansowana obsługa terminala.</p>
          </li>
          <li>Windows <span class="four-star"></span>
            <p>Windows 95,98,XP,7,8. Zaawansowana konfiguracja, obsługa narzędzi administracyjnych, optymalizacja usług i działania, diagnostyka błędów.
              <br>Oprogramowanie: <a href="http://notepad-plus-plus.org/">Notepad++</a>, <a href="http://netbeans.org/features/index.html">Netbeans IDE</a>, <a href="http://code.google.com/p/gitextensions/">Git Extensions</a>, <a href="http://pl.libreoffice.org/">Libre Office</a>, <a href="http://www.getpaint.net/">Paint.net</a>, <a href="http://www.gimp.org/">GIMP</a>, <a href="http://audacity.sourceforge.net/">Audacity</a>, <a href="https://www.virtualbox.org/">VirtualBox.</a></p>
          </li>
          <li>Sprzęt komputerowy <span class="four-star"></span>
            <p>Diagnostyka działania, instalacja podzespołów, zaawansowana konfiguracja, najnowsze trendy, <a href="http://valid.canardpc.com/2877857">zaawansowany overclocking.</a></p>
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
              <br>Todo: Coś śmieszniejszego.</p>
          </li>
        </ul>
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
        <p>©2013. Kopiowanie treści tekstów zawartych na stronie bez zgody autora jest czynem karygodnym.<br>
          <?php
          include ("../php/dataPL.php");
          ?>
        </p>
      </footer>
    </div>
    <script src="../js/script-min.js"></script>
  </body>
</html>