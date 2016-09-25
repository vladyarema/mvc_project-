<?php session_start(); // стартуем сессию

setlocale(LC_ALL, "ru_RU.CP1251");	
#echo phpinfo();
// Директива /var/www/admin/php-bin - php.ini
// output_buffering = On - Для работы redirect (Location: )


include_once '../config/config.php';          // Инициализация настроек
include_once '../config/db.php';              // Инициализация подключения к БД
include_once '../library/mainFunctions.php';  // Основные функции


// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index'; // ucfirst() - переводит первую букву в Верхний регистр, а все остальные в нижний

// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

// если в сессии есть данные об авторизированом пользователе, то передаем их в шаблон
if(!empty($_SESSION['user'])){
  
    $smarty->assign('user', $_SESSION['user']);
    
}

loadPage($smarty, $controllerName, $actionName);
