<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width,initial-scale=1" name="viewport">
<title>Keytruda Flippingbook</title>
</head>
<body>
    <?php
    require('Mobile_detect.php');
         $detect = new Mobile_Detect();  
         if(!$detect->isMobile()){
            include 'desktop.php';
       
         }else if($detect->isTablet()){
            include 'desktop.php';
         }else{
            include 'mobile.php';
        }
      ?>
</body>
</html>