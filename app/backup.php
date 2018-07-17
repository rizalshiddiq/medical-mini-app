<?php

//isikan dengan nama host,username,password,dan nama database
backup_database_tables('localhost','root','','db_ujikom_poliklinik', '*');

// koneksi ke database
function backup_database_tables($host,$user,$pass,$name,$tables)
{

$link = mysqli_connect($host,$user,$pass);
mysqli_select_db($name,$link);

//membaca seluruh table dalam database
if($tables == '*')
{
$tables = array();
$result = mysqli_query('SHOW TABLES');
while($row = mysqli_fetch_row($result))
{
$tables[] = $row[0];
}
}
else
{
$tables = is_array($tables) ? $tables : explode(',',$tables);
}
foreach($tables as $table)
{
$result = mysqli_query('SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($result);

$return.= 'DROP TABLE '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query('SHOW CREATE TABLE '.$table));
$return.= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++)
{
while($row = mysql_fetch_row($result))
{
$return.= 'INSERT INTO '.$table.' VALUES(';
for($j=0; $j<$num_fields; $j++)
{
$row[$j] = addslashes($row[$j]);
$row[$j] = ereg_replace("\n","\\n",$row[$j]);
if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
if ($j<($num_fields-1)) { $return.= ','; }
}
$return.= ");\n";
}
}
$return.="\n\n\n";
}

//Menyimpan ke dalam file sql
$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
fwrite($handle,$return);
fclose($handle);
echo "<script>alert('database berhasil di backup'); window.location=('../index.php')</script>";
}
?>


