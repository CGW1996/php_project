<?php
session_start();
require 'vendor/autoload.php';
require 'route.php';
// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// $log->warning('Foo');
// $log->error('Bar');

// $mysql_address = "localhost"; // 通常是連接同一台機器，如果是遠端就設 IP
// $mysql_username = "root";     // 設定連接資料庫用戶帳號
// $mysql_password = "password"; // 設定連接資料庫用戶的密碼
// $mysql_database = "game";     // 設成你在 mysql 創的資料庫
// $DAO = new DatabaseAccessObject($mysql_address, $mysql_username, $mysql_password, $mysql_database);

// if(isset($_GET['page']) AND !empty($_GET['page'])){
//     $page = $_GET['page'];
// }else{
//     $page = "main";
// }

// include('header.php'); // 載入共用的頁首
// switch($page){  // 依照 GET 參數載入共用的內容
//     case "main";
//       include('main.php');
//     break;
//     case "list";
//       include('list.php');
//     break;
//     case "hero";
//       include('hero.php');
//     break;
// }
// include('footer.php'); // 載入共用的頁尾


?>