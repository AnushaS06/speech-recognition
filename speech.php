<html>
<body bgcolor="#B0C4DE">

 <?php 
    $string = $_GET["q"];
    $sentence = $_GET["sentences"];
    echo '<h3><u>Selected String:</u><h3>';
    echo "<h4>".$sentence."</h4>";
    echo '<h3><u>Recognised String:</u><h3>';
    echo "<h4>".$string."</h4>";
    $arrStr = (explode(" ", $sentence));
    $arrSen = (explode(" ", $string));
    $count = 0;
    for ($x = 0; $x < min(count($arrSen),count($arrStr)); $x++) {
        if(strcasecmp($arrStr[$x],$arrSen[$x]) != 0){
            $count = $count + 1;
        }
    } 
    echo("<br><h3> <u>Success Rate:</u> &nbsp;&nbsp;&nbsp;");
    echo((count($arrSen))-($count+abs(count($arrSen)-count($arrStr))))/(count($arrSen))*100;
    echo("%");
    echo("</h3>");
    
?><br>
 
</body>
<style>
  h4,h3{position: relative; left:38%; top: 30%;}
</style>

</html>
