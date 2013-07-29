<?php
/*
Based on http://blog.vokiel.com/php-date-polskie-nazwy-dni-i-miesiecy-funkcje-date-strftime/
It corrects semantics of month names displayed in Polish language.
*/

date_default_timezone_set('Europe/Warsaw');

function dateV($format, $timestamp = null) { // define translated data
  $to_convert = array(
      'l' => array('dat' => 'N', 'str' => array('Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela')),
      'F' => array('dat' => 'n', 'str' => array('styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień')),
      'f' => array('dat' => 'n', 'str' => array('stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia'))
  );

  $pieces = preg_split('#[:/.\-, ]#', $format); // splits translated arrays

  if ($timestamp === null) {
    $timestamp = time();
  }
  foreach ($pieces as $datepart) {
    if (array_key_exists($datepart, $to_convert)) {
      $replace[] = $to_convert[$datepart]['str'][(date($to_convert[$datepart]['dat'], $timestamp) - 1)];
    } else {
      $replace[] = date($datepart, $timestamp);
    }
  }
  $result = strtr($format, array_combine($pieces, $replace));
  return $result;
}

function get_page_mod_time() {
  $incls = get_included_files();
  $included = array_filter($incls, "is_file");
  $mod_times = array_map('filemtime', $included);
  $mod_time = max($mod_times);
  return $mod_time;
}

echo "Ostatnia aktualizacja: " . dateV("l j f Y", get_page_mod_time());
?>
