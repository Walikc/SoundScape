<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <form method="post">
    <input type="radio" name="variant" value="Guitars" /> Гитары <br />
    <input type="radio" name="variant" value="Guitars_color" /> Цвет <br />
    <input type="radio" name="variant" value="Guitars_type" /> Тип <br />
    <input type="radio" name="variant" value="Guitars_brand" /> Бренд <br />
    <input type="radio" name="variant" value="Guitars_manufacturer" /> Производитель <br />
    <input type="submit" />
</form>
 
<?php
 
if( isset( $_POST['variant'] ) )
{
    switch( $_POST['variant'] )
    {
        case 'Guitars':
            echo 'Таблица гитар [Гитары]';
            include('./load_Guitars.php');
            break;
        case 'Guitars_color':
            echo 'Таблица цветов [Цвет]';
            include('./load_Guitars_color.php');
            break;
        case 'Guitars_type':
            echo 'Таблица типов [Тип]';
            include('./load_Guitars_type.php');
            break;
      case 'Guitars_brand':
            echo 'Таблица брендов [Бренд]';
            include('./load_Guitars_brand.php');
            break;
      case 'Guitars_manufacturer':
            echo 'Таблица производителей [Производитель]';
            include('./load_Guitars_manufacturer.php');
            break;
    }
}
else
{
    echo 'Вариант не выбран!!'; 
}

?>
  </body>
</html>

                          load_Guitars.php
<?php

$host= "db4free.net";
$user= "walick";
$pass= "lependyarts";
$db=   "muse_database";

$conn = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($conn));
$query="SELECT * FROM Guitars";
$res= mysqli_query($conn,$query);
$result = mysqli_query($conn, $query) or die("Error" . mysqli_error($conn));
if($result)
{
    $rows=mysqli_num_rows($result);
    echo"<table><tr><th>G_id</th><<th>G_name</th><th>G_image</th><th>G_price</th><th>G_type_id</th><th>G_color_id</th><th>G_manufacturer_id</th><th>G_brand_id</th></tr>"; 
    
    while($row=mysqli_fetch_row($result))
    {
        echo "<tr>";
        for($i=0;$i<8;$i++)
            echo "<td> $row[$i] </td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "подключение к базе данных не выполнено!!";
}
mysqli_close($conn);
?>
                          load_Guitars_color.php
<?php

$host= "db4free.net";
$user= "walick";
$pass= "lependyarts";
$db=   "muse_database";

$conn = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($conn));
$query="SELECT * FROM Guitars_color";
$res= mysqli_query($conn,$query);
$result = mysqli_query($conn, $query) or die("Error" . mysqli_error($conn));
if($result)
{
    $rows=mysqli_num_rows($result);
    echo"<table><tr><th> G_color_id </th><th> G_color_name </th></tr>";
    while($row=mysqli_fetch_row($result))
    {
        echo "<tr>";
        for($i=0;$i<2;$i++)
            echo "<td> $row[$i] </td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "подключение к базе данных не выполнено!!";
}
mysqli_close($conn);
?>

                          load_Guitars_type.php
<?php

$host= "db4free.net";
$user= "walick";
$pass= "lependyarts";
$db=   "muse_database";

$conn = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($conn));
$query="SELECT * FROM Guitars_type";
$res= mysqli_query($conn,$query);
$result = mysqli_query($conn, $query) or die("Error" . mysqli_error($conn));
if($result)
{
    $rows=mysqli_num_rows($result);
    echo"<table><tr><th> G_type_id </th><th> G_type_name  </th></tr>";
    while($row=mysqli_fetch_row($result))
    {
        echo "<tr>";
        for($i=0;$i<2;$i++)
            echo "<td> $row[$i] </td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "подключение к базе данных не выполнено!!";
}
mysqli_close($conn);
?> 
                          load_Guitars_brand.php
<?php

$host= "db4free.net";
$user= "walick";
$pass= "lependyarts";
$db=   "muse_database";

$conn = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($conn));
$query="SELECT * FROM Guitars_brand";
$res= mysqli_query($conn,$query);
$result = mysqli_query($conn, $query) or die("Error" . mysqli_error($conn));
if($result)
{
    $rows=mysqli_num_rows($result);
    echo"<table><tr><th> G_brand_id </th><th> G_brand_name </th></tr>";
    while($row=mysqli_fetch_row($result))
    {
        echo "<tr>";
        for($i=0;$i<2;$i++)
            echo "<td> $row[$i] </td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "подключение к базе данных не выполнено!!";
}
mysqli_close($conn);
?>
                          load_Guitars_manufacturer.php
<?php

$host= "db4free.net";
$user= "walick";
$pass= "lependyarts";
$db=   "muse_database";

$conn = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($conn));
$query="SELECT * FROM Guitars_manufacturer";
$res= mysqli_query($conn,$query);
$result = mysqli_query($conn, $query) or die("Error" . mysqli_error($conn));
if($result)
{
    $rows=mysqli_num_rows($result);
    echo"<table><tr><th> G_manufacturer_id </th><th> G_manufacturer_name </th></tr>";
    while($row=mysqli_fetch_row($result))
    {
        echo "<tr>";
        for($i=0;$i<2;$i++)
            echo "<td> $row[$i] </td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "подключение к базе данных не выполнено!!";
}
mysqli_close($conn);
?>

  </body>
</html>
