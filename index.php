<?php
        include ("include/iM.class.php");
        $iM=new iMSuperClass();
        $host="localhost";
        $user="root";
        $passWd="gr5j4c0";
        $bd="apuracao";
        $conexao=$iM->im_dbconnect($host,$user,$passWd,$bd);


?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Apura&ccedil;&atilde;o das Elei&ccedil;&otilde;es 2004</title>
<META HTTP-EQUIV="REFRESH" CONTENT="5; URL=http://200.228.197.200/apuracao">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td width="384" bgcolor="#FFFFF0">
      <div align="center">
        <table width="320" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="330" bgcolor="#003399"><div align="center"><font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>
                PREFEITOS <font size="2">ordem de mais votados:</font></strong></font></div></td>
          </tr>
        </table>
        <table width="320" border="1" cellspacing="0" cellpadding="3">
          <tr bgcolor="#F7F7F7">
            <td width="235"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CANDIDATOS</strong></font></td>
            <td width="73" bgcolor="#F7F7F7"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>N&deg;
              VOTOS</strong></font></td>
          </tr>
<?php
$sql="select * from partidos order by votosPrefeito desc";
$pP=$iM->im_select($sql);
while($natalicio=mysql_fetch_row($pP)){
        echo "          <tr>\n";
        echo "            <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$natalicio[3] - $natalicio[2]</font></td>\n";
        echo "            <td align=\"center\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">";
        printf("%04d",$natalicio[5]);
        echo "</font></td>\n";
        echo "          </tr>\n";
}
?>

        </table>
        <br>
        <table width="350" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="330" bgcolor="#003399"><div align="center"><font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Vereadores
                UGV <font size="2">ordem de mais votados:</font></strong></font></div></td>
          </tr>
        </table>
        <table width="350" border="1" cellspacing="0" cellpadding="1">
          <tr bgcolor="#F7F7F7">
            <td width="252"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CANDIDATOS</strong></font></td>
            <td width="98"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>N&deg;
              VOTOS</strong></font></td>
          </tr>
          <?php
$sql="select * from vereadores where partido=1 order by qtdVotos desc";
$pP=$iM->im_select($sql);
while($natalicio=mysql_fetch_row($pP)){
        echo "          <tr>\n";
        echo "            <td><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">$natalicio[1]</font></td>\n";
        echo "            <td align=\"center\"><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">";
        printf("%04d",$natalicio[4]);
        echo "</font></td>\n";
        echo "          </tr>\n";
}
?>

        </table>
        <br>
      </div></td>
    <td width="366">
      <div align="center">
        <table width="303" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="209" bgcolor="#FFFFF0"> <div align="center"><font color="#CC0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>N&uacute;mero de urnas<br> j&aacute; apuradas:</strong></font></div></td>
            <td width="94" rowspan="2"><div align="center"><img src="images/logo.jpg" width="45" height="43"></div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFF0"> <div align="center"><font color="#0033CC" size="6" face="Verdana, Arial, Helvetica, sans-serif"><?echo $iM->im_qtRegistros("urnas");?></font></div></td>
          </tr>
        </table>
        <br>
        <table width="350" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="330" bgcolor="#003399"><div align="center"><font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Vereadores
                <font size="2">ordem de mais votados:</font></strong></font></div></td>
          </tr>
        </table>
        <table width="350" border="1" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
          <tr>
            <td width="264" bgcolor="#F7F7F7"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>CANDIDATOS</strong></font></td>
            <td width="83" bgcolor="#F7F7F7"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>N&deg;
              VOTOS</strong></font></td>
          </tr>
<?php
$sql="select * from partidos order by codigo";
$pP=$iM->im_select($sql);
for($partido=0;$d=mysql_fetch_row($pP);$partido++){
        $codigo[$partido]=$d[0];
        $nome[$codigo[$partido]]=$d[1];
        $sigla[$codigo[$partido]]=$d[2];
        $prefeito[$codigo[$partido]]=$d[3];
        $vice[$codigo[$partido]]=$d[4];
}
$sql="select * from vereadores where partido!=1 order by qtdVotos desc";
$pP=$iM->im_select($sql);
while($outros=mysql_fetch_row($pP)){
        echo "          <tr>\n";
        echo "            <td><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"> $outros[1] - ".$sigla[$outros[3]]."</font></td>\n";
        echo "            <td><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\">";
        printf("%04d",$outros[4]);
        echo "</font></td>\n";
        echo "          </tr>\n";
}
?>
        </table>
      </div></td>
  </tr>
</table>
<div align="center">
  <table width="750" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><div align="right"><font color="#003399" size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sistema
          de Apura&ccedil;&atilde;o Eleitoral - &copy; 2004 Interactive Multimedia 
          - Todos os Direitos Reservados</strong></font></div></td>
    </tr>
  </table>
  
</div>
</body>
</html>
<?php
        $fecha=$iM->im_dbCloseConn($conexao);

?>