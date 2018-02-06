<?php $sidansNamn = "Filmsidan.nu";?>
<html>
<head>
        <title><?php 
        
        if(isset($sidansNamn)) {
            echo $sidansNamn;
        }
        else {
            die("no name found");
        }
       ?> || 
        
        
        
        <?php  if (isset($pageName)) {
            echo $pageName;
             }
             else {
                 die("no pagename found");
             };?></title>
    
    <style> 
    body {
        background-color: #195361;;
        color: white;
    }
    a {
      margin: 10px;
      color: white;
      text-decoration: none;
    }

    li {
        text-decoration: none;
    }
    .footer {
        width: 100%; 
        height: 100px;
        background-color: white;
        position: fixed;
        bottom: 0px;
        left: 0px;
        color: black;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    #wrapper {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .meny {
        display: flex;
        flex-direction: row;
    }
    
    </style>
        
</head>
<body>
<div id="wrapper">
<h1>Välkommen till <?php echo $sidansNamn?></h1>

<div class='meny'> 
<a href="./index.php">Start</a>
 
<a href="./lista.php">Lista</a>
 
<a href="./kontakt.php">Kontakt</a>
</div>


