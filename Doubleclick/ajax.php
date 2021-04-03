<?php 

try {
    $db = new PDO("mysql:host=tesla.domainhizmetleri.net;dbname=mfdsosya_enki;charset=utf8", "mfdsosya_kamil", "Kakbir19");
} catch ( PDOException $e ){
    print $e->getMessage();
}
// echo $_POST['id']

if(150<$_POST['i3']){
$query = $db->prepare("INSERT INTO images SET
data = ?,
data2 = -?,
img = ?");
$insert = $query->execute(array(
    $_POST['i1'], $_POST['i2'], $_POST['img']
));
if ( $insert ){
    $query = $db->prepare("INSERT INTO imagesa SET
data = ?,
data2 = -?,
img = ?");
$insert = $query->execute(array(
    $_POST['i1'], $_POST['i2'], $_POST['img']
));
if ( $insert ){
    echo 1;
}
}else{
    echo 0;
}
}
