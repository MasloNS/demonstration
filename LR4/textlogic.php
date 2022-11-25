<?php
error_reporting(0);
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);



$preset1 = "https://ru.wikipedia.org/wiki/%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8";
$preset2 = "https://u-f.ru/news/society/u9/2022/11/06/348506?utm_source=yxnews&utm_medium=desktop";
$preset3 = "https://litlife.club/books/19850/read";

if ($_GET["preset"]) {
    if ($_GET["preset"] == "1") {
        $text = file_get_contents($preset1, false, stream_context_create($arrContextOptions));
    }
    elseif ($_GET["preset"] == "2") {
        $text = file_get_contents($preset2, false, stream_context_create($arrContextOptions));
    }
    elseif ($_GET["preset"] == "3") {
        $text = file_get_contents($preset3, false, stream_context_create($arrContextOptions));
    }
    else {
        $text = $_POST["text"];
    }
    $analyze = new TextAnalyze($text);
}
else {
    if ($_POST["text"]) {
        $text = $_POST["text"];
    }
    $analyze = new TextAnalyze($text);
}



class textAnalyze{
    public $textBody;

    public function __construct($text){
        $this->textBody = $text;
    }

    public function viewText(){
        if (isset($_POST['Action1'])) {
            echo $this->textBody;
        }
    }

    public function Task2()
    {
        if (isset($_POST['Action1'])) {
           preg_match_all('/<img[^>]+>/i', $this->textBody, $result);

          echo '<pre>';
          print_r($result);
          echo '</pre>';



       }
    }
    public  function Task6(){

      if (isset($_POST['Action1'])) {
        $text = $this->textBody;
            $patterns = array();
            $patterns[0] = '/\.{3}/';
            $patterns[1] = '/ а/';
            $patterns[2] = '/ но/';
            $replacements = array();
            $replacements[2] = '…';
            $replacements[1] = ', а';
            $replacements[0] = ', но';
        echo preg_replace($patterns, $replacements, $text);
        }
    }

    public function Task15()
    {

       if (isset($_POST['Action1'])) {
           $text0 = $this->textBody;
           setlocale(LC_ALL, "ru_RU.UTF-8");
           $text = preg_replace('/[^а-я ]/ui', '', $text0);


           $words = str_word_count($text, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");

           $frequency = array_count_values($words);

           arsort($frequency);
           $frequency = array_splice($frequency, 0, 100);

           foreach ($frequency as $key => $val) {
               $c++;

               echo "$c.  $key   = $val</br>";

           }
           //echo $text0;
           //<a href='#anchor'>Текст ссылки</a>

          // echo '<pre>';
          // print_r($frequency);
          // echo '</pre>';



        }
    }


    public function Task19()
    {
        if (isset($_POST['Action1'])) {
            $text = $this->textBody;
            $output = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $text);
            echo $output;
        }
    }
}
?>