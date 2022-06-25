<?php

function createCart() {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
        $_SESSION['cart']['idProduct'] = array();
        $_SESSION['cart']['name'] = array();
        $_SESSION['cart']['qty'] = array();
        $_SESSION['cart']['price'] = array();
    }
    return true;
}

function addMerch($id, $name, $qty, $price) {
    $searchCart = array_search($id, $_SESSION['cart']['idProduct']);

    if($searchCart !== false) {
        $_SESSION['cart']['qty'][$searchCart] += 1;
    }
    else {
        array_push($_SESSION['cart']['idProduct'],$id);
        array_push($_SESSION['cart']['name'],$name);
        array_push($_SESSION['cart']['qty'],$qty);
        array_push($_SESSION['cart']['price'],$price);
    }
}

function deleteMerch($id){
    $tmp=array();
    $tmp['idProduct'] = array();
    $tmp['name'] = array();
    $tmp['qty'] = array();
    $tmp['price'] = array();
    for($i = 0 ; $i < count($_SESSION['cart']['idProduct']); $i++)
    {
        if ($_SESSION['cart']['idProduct'][$i] !== $id)
        {
        array_push($tmp['idProduct'],$_SESSION['cart']['idProduct'][$i]);
        array_push($tmp['name'],$_SESSION['cart']['name'][$i]);
        array_push($tmp['qty'],$_SESSION['cart']['qty'][$i]);
        array_push($tmp['price'],$_SESSION['cart']['price'][$i]);
        }

    }
    $_SESSION['cart'] =  $tmp;
    unset($tmp);
}

function totalCart() {
    $total = 0;
    for($i = 0 ; $i < count($_SESSION['cart']['id']) ; $i++) {
        $total += $_SESSION['cart']['qty'][$i] * $_SESSION['cart']['price'][$i];
    }
    return $total;
}

function deleteCart() {
    unset($_SESSION['cart']);
}

?>