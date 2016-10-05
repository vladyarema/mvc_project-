<?php

/**
 * 
 * Контроллер главной страницы системы Key.liricrm.net
 * 
 * */

include_once '../models/IndexModel.php';
$smarty->setTemplateDir(TemplatePrefix);
$smarty->assign('templateWebPath', TemplateWebPath);

/**
 * Формирование главной страницы key.liricrm.net
 * 
 * Форма входа в систему 
 * 
 * */

function indexAction($smarty) {
    $message = array('group' => array('status' => '0')); //ошибка на проверку данных групп
    $result = array('transaction' => array('status' => '0'));// проверка данных транзакций
    // вывод групп
    $outgo = all_group(1); // запрос на группы для рассхода
    $income = all_group(2); // запрос на группы для дохода
    // конец вывода
    
    $transaction_outgo = all_transaction(1); // транзакции для расхода
    $transaction_income = all_transaction(2); // транзакции для дохода

    if (isset($_POST['submit'])) {
        $data_group = $_POST;
        
        $message['group'] = check_data_for_group($data_group['name'],$data_group['group']);
        if ($message['group']['status'] != 1) {
            // mysql_real_ascape_string() защищяет от SQL иньекции(запросы)
            $data_group['name'] = htmlspecialchars(mysql_real_escape_string($data_group['name']));
            //<
            $message['group'] = new_group($data_group['name'], $data_group['group']);
            if($message['group']['status'] == 0){
                redirect("/");
            }
        }
    }

    if(isset($_POST['button'])){
        $data_transaction = $_POST;
        $result['transaction'] = check_data_transaction($data_transaction['prise'], $data_transaction['group'], $data_transaction['keywords']);
        
        
        if($message['transaction']['status'] == 0){
            $data_transaction['keywords'] = htmlspecialchars(mysql_real_escape_string($data_transaction['keywords']));
            
            $result['transaction'] = new_transaction($data_transaction['prise'], $data_transaction['group'], $data_transaction['keywords'], $data_transaction['id_group']);
            if($result['transaction']['status'] != 1){
                redirect("/");
            }
        }
    }

    $smarty->assign('pageTitle', '');
    $smarty->assign('outgo', $outgo);
    $smarty->assign('income', $income);
    $smarty->assign('message', $message);
    $smarty->assign('result', $result);
    $smarty->assign('transaction_outgo', $transaction_outgo);
    $smarty->assign('transaction_income', $transaction_income);
   
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
