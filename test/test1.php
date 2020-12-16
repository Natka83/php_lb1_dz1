<?
$n1=10;
$n2=100;
echo $n1; 
echo "<hr/>";
//________________________________________________________
$arr1 = array(2,4,6,7);
echo "ел массива $arr1[1]</br>" ;
echo "kol El in Array:".count($arr1);
echo "<hr/>";
print_r ($arr1);      //Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 7 )
echo "<hr/>";
//_________________________________________________________
$arr2=array("red"=>"cherry", "yellow"=>"mellon", "green"=>"cucamber");
echo"<br/>".$arr2["green"];     //cucamber
foreach($arr2 as $k=>$v)
echo "<div>".$k.":<span style='color: ".$k."'>".$v."</span><div>";
echo "<hr/>";
//_________________________________________________________
$fruits[]="orange";
$fruits[]="cherry";
$fruits[]="mellon";
$fruits[]="watermelon";
echo "<ul>";
for($i=0; $i<count($fruits); $i++){
    echo"<li>$fruits[$i]</li>";
}
echo "</ul>";
echo "<hr/>";
//________________________________________________________
print_r($fruits);   //Array ( [0] => orange [1] => cherry [2] => mellon [3] => watermelon )
//________________________________________________________
$arr3[0][0]="Фрукты";
$arr3[0][1]="Овощи";
$arr3[1][0]="Черешня";
$arr3[1][1]="Слива";
$arr3[1][2]="Абрикос";
$arr3[1][3]="Манго";
$arr3[2][0]="Картофель";
$arr3[2][1]="Буряк";
$arr3[2][2]="Морковь";
$arr3[2][3]="Лук";
echo "<hr><h3>".$arr3[0][0]."</h3>";
for($i=0; $i<count($arr3[1]); $i++){
    echo"<div>".$arr3[1][$i]."</div>";
}
echo "<hr><h3>".$arr3[0][1]."</h3>";
for($i=0; $i<count($arr3[2]); $i++){
    echo"<div>".$arr3[2][$i]."</div>";
}
echo "<hr/>";
//_______________________________________________________________
$people["Ivanov"]=$arrayName = array("name"=>"Ivan" ,"age=>35", "city"=>"Lviv" );
$people["Petrov"]=$arrayName = array("name"=>"Petr" ,"age=>39", "city"=>"Petrovskoe" );
$people["Sidorov"]=$arrayName = array("name"=>"Sidor" ,"age=>56", "city"=>"Sidorino" );
//$people["Ufimov"]=$arrayName = array("name"=>"Ufim" ,"age=>79", "city"=>"Ufimskoe" );

echo "<div style='font-weight: bold; text-align: center'>".$people["Petrov"]["name"]." is living in ".$people["Petrov"]["city"]."</div>";
echo "<hr/>";
//_________________________________________________________________________________
$headers= apache_request_headers();
foreach($headers as $k=>$v){
    echo $k.": ".$v."<br/>";
};
echo "<hr/>";
//__________________________        DZ# 1       _____________________________________________
// Написать PHP-скрипт, в котором создать текстовый массив с
// названиями цветов. Количество разных цветов должно быть больше
// четырех. Затем с помощью PHP отобразить на странице четыре div
// одинакового размера. Сделать так, чтобы при загрузке страницы все четыре
// div заливались случайными цветами, выбранными из массива. При этом, все
// четыре div должны заливаться разными цветами. Ни один цвет не должен
// повторяться.

echo "<h3 style='text-align: center' >Dz#1</h3>";
$arr_color = array("orange", "red" , "yellow", "violet" , "blue", "green");
shuffle($arr_color);
$newArr = array_slice($arr_color, 0, 4);

//print_r($newArr);

// if (count($newArr)==3){
//     array_push($newArr,"aliceblue");
// }

foreach ($newArr as $color) {
   echo '<div style="background-color:' . $color . '; width:120px; height:50px; float:left; margin:60px;"></div>';
}

echo "<hr><hr/>";

//____________________________        Lab# 1_1       _________________________________________________
// Создайте ассоциативный массив cars, элементы которого (bmw, Toyota,
// skoda), которого тоже ассоциативные массивы с параметрами model, price, year.
// Вывести информацию об автопарке (используя конструкцию foreach) в
// следующем формате:
// Car #1:
// model - x5, price - 10000, year - 2015 ;

echo "<h3 style='text-align: center' >Lb#1_1</h3>";
$arrCars = array ( "BMW" => array(
    "model"=>"x5",
    "price"=>"45000$",
    "year"=>"2014"),
            "Toyota" => array(
                "model"=>"Siquoia",
                "price"=>"52000$",
                "year"=>"2016"),
                "Skoda" => array(
                    "model"=>"Octavia",
                    "price"=>"8000$",
                    "year"=>"2010"));

echo"</br> Info about cars:</br>";
foreach ($arrCars as $key => $type) {
    echo "<div> Car #".(++$i)."</div>";
    foreach($type as $k1=>$v1){
        echo "$k1 - $v1, ";
    }
}

// foreach($arrCars as $key => $type) { 
//     echo("<h2>Car: ".$key." </h2>\n"."<ul>\n");
//     foreach($type as $arrCars) { 
//     echo("<li>$arrCars</li>\n"); }
// } 
// echo("</ul>\n");

echo "<hr/>"; 


//____________________________        Lab# 1_2       _________________________________________________
// Создайте две числовые переменные cols и rows. Присвойте им
// произвольное значение в диапазоне от 1 до 10. Используя циклы отрисуйте
// таблицу умножения в виде html-таблицы. Количество столбцов – cols, строк –
// rows. На пересечении строк и столбиков – произведение порядковых номеров
// строк и столбиков. Значение в первой строке и первом столбике: шрифт –
// жирный, выравнивание – по центру, фон – темно-серый. Для результатов
// произведений – фон светлосерый.
echo "<h3 style='text-align: center' >Lb#1_2</h3>";

$colls=rand(1, 10);
$rows=rand(1, 10);
echo $colls.'*'.$rows;

$table='<table border="2">';
for($tr=1; $tr<=$rows; $tr++){
    $table.='<tr>';
    for ($td=1; $td<=$colls; $td++){
        if ($tr===1 or $td===1){
            $table.='<th style="color:black;text-align:center;font-size:bold;background-color:darkgray;">'.$tr*$td.'</th>';
        }
        else{
            $table.='<td style="background-color:lightgray;">'.$tr*$td.'</td>';
        }    
    }
    $table.='</tr>';
}

$table.='</table>';
echo $table;

?>


