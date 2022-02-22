<?

include ("../include/iM.class.php");
$iM=new iMSuperClass();
$host="localhost";
$user="root";
$passWd="";
$bd="apuracao";
$conexao=$iM->im_dbconnect($host,$user,$passWd,$bd);
include ("include/action.php");
if(is_file("include/$im.php")){
        include ("include/$im.php");
}else{
        include ("include/principal.php");
}
$dCon=$iM->im_dbCloseConn($conexao);
?>