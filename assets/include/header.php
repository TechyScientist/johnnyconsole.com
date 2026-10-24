<!doctype html>
<html lang="en">
    <head>
        <title>Johnny Console</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="../../assets/style/main.css"/>
        <link rel="icon" href="../../assets/img/jc.png"
        <?php
        if(isset($page) && file_exists($_SERVER['DOCUMENT_ROOT']."/assets/style/pages/".$page.".css")) { ?>
            <link rel="stylesheet" href="../../assets/style/pages/<?php echo $page ?>.css"/>
        <?php } ?>
    </head>
    <body>
        <header>
            <h1>Prof. Johnny Console, MCS</h1>
            <h2>Computer Science Educator</h2>
            <?php include("menu.php"); ?>
        </header>
        <main>
            
