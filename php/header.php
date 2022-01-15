<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="YOUR_CSS_PATH" type="text/css">
    
    <title><?php echo $title; ?> | WEBSITE_NAME</title>
</head>

<body>
    <!-- Replace with your nav bar - This is just the A Tags for the nav bar No Styling Included--> 
        <a href="index" class="<?php if ($page == 'home') { echo 'active'; } ?>">Home</a>
        <a href="about" class="<?php if ($page == 'about') { echo 'active'; } ?>">About</a>
       <!-- <a href="pagename" class="<?php if ($page == 'pagename') { echo 'active'; } ?>">pagename</a>-->
   
