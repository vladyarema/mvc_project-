<?php

/**
 * Модель Категорий
 */
function new_group($name, $id_group) {
    $sql = "INSERT INTO `categories` (`name`, `id_group`) VALUE ('{$name}', '{$id_group}')";
    
    $rs = mysql_query($sql);


    if (!$rs) {
        $message['status'] = 1;
        $message['message'] = 'Ошибака';
        return $message;
    }else{
        $message['status'] = 0;
        $message['message'] = 'Группа добавлена!';
        return $message;
    }
}

function all_group($id_group) {
    $sql = "SELECT * 
            FROM `categories` 
            WHERE `id_group`='{$id_group}'";
    $rs = mysql_query($sql);
    $group = array();
    while ($row = mysql_fetch_assoc($rs)) {
        $group[] = $row;
    }
    return $group;
}

function check_data_for_group($name, $id_group) {
    if ($name == '') {
        $message['status'] = 1;
        $message['message'] = "Введите название группы";
        return $message;
    }
    if ($id_group == 0) {
        $message['status'] = 1;
        $message['message'] = "Выберете группу группы";
        return $message;
    }
}
function check_data_transaction($prise, $group, $keywords) {
    if($prise == ""){
        $message['status'] = 1;
        $message['message'] = 'Цена не заполнена';
        return $message;
    }
    if (!preg_match("/[0-9]/", $prise)) {
        $message['status'] = 1;
        $message['message'] = 'В цене содержаться недопустимые символы';
        return $message;
    }else{
        SetCookie('prise',$data_transaction['prise'],time()+3600);
    }
    if($group == 0){
        $message['status'] = 1;
        $message['message'] = 'Выберете группу';
        return $message;
    }
    if($keywords == ""){
        $message['status'] = 1;
        $message['message'] = 'Ключевые слова не заполнены';
        return $message;
    }
    if (!preg_match("/[а-яА-Я]/", $keywords)) {
        $message['status'] = 1;
        $message['message'] = 'В ключевых словах содержаться недопустимые символы';
        return $message;
    }else{
        SetCookie('keywords',$data_transaction['keywords'],time()+3600);
    }
    $message['status'] = 0;
    return $message;
}
function new_transaction($prise, $group, $keywords, $id_group){
    $sql = "INSERT INTO `transaction` (`cost`, `id_category`, `id_group`,  `tag`) VALUE ('{$prise}', '{$group}', '{$id_group}', '{$keywords}')";
    
    $rs = mysql_query($sql);
    if(!$rs){
        $message['status'] = 1;
        $message['message'] = 'Не добавлено!';
        return $message;

    }
}
function all_transaction($id){
    $sql = "SELECT *,
            DATE_FORMAT(date,'%d.%m.%Y') AS date
            FROM `transaction` 
            INNER JOIN `categories` 
            ON transaction.id_category = categories.id
            WHERE transaction.id_group = '{$id}'";

    $rs = mysql_query($sql);
    $data = array();
    while ($row = mysql_fetch_assoc($rs)) {
        $data[] = $row;
        
    }
    return $data;


}