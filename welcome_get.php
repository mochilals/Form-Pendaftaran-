<html>
<head>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
</head>
<body id="main_body">
<?php 
echo "Nama:".$_GET["element_1"]; 
echo ("<br>");
if ($_GET["element_7"]==1){
    echo "Jenis Kelamin: Laki-Laki";
}
else{
    echo "Jenis Kelamin: Perempuan";
}
echo ("<br>");
if ($_GET["element_8"]==1){
    echo "Agama: Islam";
}
elseif ($_GET["element_8"]==2) {
    echo "Agama: Kristen";
}
elseif ($_GET["element_8"]==3) {
    echo "Agama: Katolik";
}
elseif ($_GET["element_8"]==4) {
    echo "Agama: Hindu";
}
elseif ($_GET["element_8"]==5) {
    echo "Agama: Buddha";
}
elseif ($_GET["element_8"]==6) {
    echo "Agama: Lainnya";
}
echo ("<br>"); 
echo "Tanggal Lahir:".$_GET["element_2_1"]."-".$_GET["element_2_2"]."-".$_GET["element_2_3"]; 
echo ("<br>"); 
echo "Hobi:".$_GET["element_3"]; 
echo ("<br>");
echo "Cita-Cita:".$_GET["element_4"]; 
echo ("<br>"); 
echo "Usia:".$_GET["element_5"]; 
echo ("<br>"); 
echo "Sekolah:".$_GET["element_6"]; 
echo ("<br>"); 

?>
<br> 

</body>
</html>