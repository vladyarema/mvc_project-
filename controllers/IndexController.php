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
    $a = 0;
    // вывод групп
    $message['status'] = 0;
    $result['status'] = 0;
    $res['status'] = 0;
    $rs['status'] = 0;
    
    // вывод групп
    $id_outgo = 1;
    $outgo = all_group($id_outgo);
    
    $id_income = 2;
    $income = all_group($id_income);
    // конец вывода
    
    // вывод транзакций
    $transaction_outgo = data_transaction(1);
    $transaction_income = data_transaction(2);
    if (isset($_POST['submit'])) {
        $data_group = $_POST;
        
        $message = check_data_for_group($data_group['name'],$data_group['group']);
        
        if ($message['status'] != 1) {
            // mysql_real_ascape_string() защищяет от SQL иньекции(запросы)
            $data_group['name'] = htmlspecialchars(mysql_real_escape_string($data_group['name']));
            $data_group['description'] = htmlspecialchars(mysql_real_escape_string($data_group['description']));
            //<
            $result = new_group($data_group['name'], $data_group['description'], $data_group['group']);
            if($result['status'] == 0){
                redirect("/");
            }
        }
    }
    if(isset($_POST['button'])){
        $data_transaction = $_POST;
        
        $res = check_data_transaction($data_transaction['prise'], $data_transaction['group'], $data_transaction['keywords']);
        
        
        if($res['status'] == 0){
            $data_transaction['keywords'] = htmlspecialchars(mysql_real_escape_string($data_transaction['keywords']));
            
            $rs = new_transaction($data_transaction['prise'], $data_transaction['group'], $data_transaction['keywords'], $data_transaction['id_group']);
            if($rs['status'] != 1){
                redirect("/");
            }
        }
    }

    $smarty->assign('pageTitle', '');
    $smarty->assign('result', $result);
    $smarty->assign('outgo', $outgo);
    $smarty->assign('income', $income);
    $smarty->assign('message', $message);
    $smarty->assign('res', $res);
    $smarty->assign('rs', $rs);
    $smarty->assign('transaction_outgo', $transaction_outgo);
    $smarty->assign('transaction_income', $transaction_income);
    $smarty->assign('a', $a);
   
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
