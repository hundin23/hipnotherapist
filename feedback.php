<?php

    $recepient = "k.totooonova@gmail.com";
    $sitename = "Гипнотерапия";

    $name = trim($_GET["name"]);
    $email = trim($_GET["email"]);
    $message = trim($_GET["message"]);

    $pagetitle = "Новая заявка с сайта \"$sitename\"";
    $text = "Имя: $name \nТелефон: $email \nТекст: $message";
    mail($recepient, $pagetitle, $text, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
 ?>﻿
