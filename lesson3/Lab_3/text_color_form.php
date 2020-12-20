<!DOCTYPE html>
<html lang="en">
<style>
div{
    text-align: center;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
</head>

<body>
    <div >
    <form method="POST">
     <div> R <input type=`text` size=`30` name="r"></div>
     <div> G <input type=`text` size=`30` name="g"></div>
     <div> B <input type=`text` size=`30` name="b"></div>
     <div><button type="submit" name="accept">ACCEPT</button></div>
    </form>
</div>
    <?
   
        $r=$_POST["r"];
        $g=$_POST["g"];
        $b=$_POST["b"];
        // $r_=$r/2; 
        // $g_=$g/2; 
        // $b_=$b/2;
        echo "<div>";
    echo "<span style='color: rgb(".$r.",".$g.",".$b.");text-align: center; font-size:large'>Color for text</span>";
    //echo "<span style='background-color: rgb(".$r_.",".$g_.",".$b_.")'></span>"; 
    echo "</div>";
    ?>
</body>

</html>
