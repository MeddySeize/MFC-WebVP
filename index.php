<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Pour le responsive design-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--declaration des fichiers style: Bootstrap et fontawesome-->
    <link rel="stylesheet" href="css/bootstrap-431.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.css">
    <!--declaration des fichiers javascript: JQUERY et bootstrap js-->
    <script type="text/javascript" src="js/jquery-341.min.js"></script>
    <script src="js/bootstrap-431.min"></script>
    <title>Accueil WebVp</title>
    <script> 
    jQuery.noConflict
    $(document).ready(function(){
  $("button").click(function(){
    $("div").animate({left: '250px'});
  });
});
</script> 
</head>
    
<body>
    <button>Start Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>


</body>
</html>
