<?php
echo 'test';
function format ($expre) {
    echo "<pre>";
    print_r($expre);
    echo "</pre>";
  }

  $url = 'https://strument.com.ua/category/zapchasti-al-ko/';
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output = curl_exec($ch);
  $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // получение кода состояния HTTP

  require 'phpquery.php';
  $document = phpQuery::newDocument($output);
  $pagination_links = pq('a.no_underline');
  foreach ($pagination_links as $key=>$link) {
    $pq1 =pq($link)->text();
    $last_page[$key] = $pq1;
  }

$trash_page = array_pop($last_page);
$last_page_url = end($last_page);
  for ($n = $last_page_url; $n > 0; $n--) {
          $full_url = 'https://strument.com.ua/category/zapchasti-al-ko/' . 'page' . $n;
          echo $full_url . '<br>';
      }
  
  




















  // $servername = "localhost";
  // $username = "user";
  // $password = "user";
  // $dbname = "kramp";
  
  // // Создание соединения
  // $conn = new mysqli($servername, $username, $password, $dbname);
  
  // // Проверка соединения
  // if ($conn->connect_error) {
  //     die("Connection failed: " . $conn->connect_error);
  // }
  // echo "Connected successfully";
  




// namespace Facebook\WebDriver;

// use Facebook\WebDriver\Remote\DesiredCapabilities;
// use Facebook\WebDriver\Remote\RemoteWebDriver;

// require_once('vendor/autoload.php');

// // This is where Selenium server 2/3 listens by default. For Selenium 4, Chromedriver or Geckodriver, use http://localhost:4444/
// $host = 'http://localhost:9515';

// $capabilities = DesiredCapabilities::chrome();

// $driver = RemoteWebDriver::create($host, $capabilities);

// // navigate to Selenium page on Wikipedia
// $driver->get('https://www.kramp.com/shop-ua/uk');




// $button = $driver->findElement(WebDriverBy::cssSelector('.primary'));
// $button->click();

// $enter_log = $driver->findElement(WebDriverBy::xpath('//*[@id="__next"]/header/div[1]/div/div/div[3]/div/div[3]/div/a/span'));

// $enter_log->click();
// $login = $driver->findElement(WebDriverBy::name('username'));
// $login->sendKeys('strumentua@gmail.com');
// $password = $driver->findElement(WebDriverBy::name('password'));
// $password->sendKeys('strument1')->submit();
// sleep(3);
// $firstmenuglobal = $driver->findElement(WebDriverBy::xpath('/html/body/div[2]/header/div[2]/div/div/div[1]/div/nav/a[1]'));
// $firstmenuglobal->click();
// $html = $driver->getPageSource();
// file_put_contents('/Users/albertas/pages/page.html', $html);


// require 'phpquery.php';
// $html = file_get_contents('/Users/albertas/pages/page.html');
// $document = phpQuery::newDocument($html);
// $product_table = pq('.kh-sz4e9')->find('a');
// foreach ($product_table as $product) {
// $pq = pq($product)->attr('href');
// echo urldecode($pq).'<br>';
// }










// $text_all = [];
// $links_all = [];
// $links = $document->find('.kh-w3piuq');
// $text = $document->find('span.kh-m2feck');
// foreach ($links as $key => $link) {
//    $pqlink = pq($link)->attr('href');
//    $pqlink = urldecode($pqlink);

//    $full_links = 'https://www.kramp.com'. $pqlink.'<br>';
//    $sql = "INSERT INTO links (id, link, name)
// VALUES (NULL, '$full_links', 'name')";
//   if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
  
//    $links_all[$key]['link'] = $full_links;
   
//    foreach ($text as $key => $tex) {
//       $pqtext = pq($tex)->text();
//       $links_all[$key]['text'] = $pqtext;
      
//    }
// }
// format($links_all);







// $input = $driver->findElement(WebDriverBy::tagName('input'));


// $input->sendKeys("AL-KO")->submit();
// $driver->executeScript('window.scrollTo(0, document.body.scrollHeight);');