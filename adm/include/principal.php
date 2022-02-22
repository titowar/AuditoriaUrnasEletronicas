<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sistema Administrativo de Apura&ccedil;&atilde;o Eleitoral</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
        function posiciona(){
                document.form3.nome.focus();
        }
</script>
<body >
<div align="center">
  <table width="700" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#F2F4F4">
<div align="center"><font color="#CC0000" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sistema
          de Apura&ccedil;&atilde;o Eleitoral</strong></font></div></td>
    </tr>
    <tr>
      <td bgcolor="#F2F4F4"><div align="left"><a href="?im=votos"><font color="#CC0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Digitar Votos</font></a></div></td>
    </tr>
  </table>
  <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
          <div align="center">
            <table width="660" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Partidos
                  Cadastrados:</strong></font></td>
              </tr>
              <tr>
                <td><table width="662" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="120"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome</font></strong></td>
                      <td width="74"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Sigla</font></strong></td>
                      <td width="218"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">C. Prefeito</font></strong></td>
                      <td width="133"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">C. Vice</font></strong></td>
                      <td width="117"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">A&ccedil;&atilde;o</font></strong></td>
                    </tr>
<?
//onload="posiciona()"
$sql="select * from partidos order by codigo";
$pP=$iM->im_select($sql);
for($partido=0;$d=mysql_fetch_row($pP);$partido++){
        $codigo[$partido]=$d[0];
        $nome[$codigo[$partido]]=$d[1];
        $sigla[$codigo[$partido]]=$d[2];
        $prefeito[$codigo[$partido]]=$d[3];
        $vice[$codigo[$partido]]=$d[4];
}
for($i=0;$i<$partido;$i++){
        $cod=$codigo[$i];
        echo "                    <tr><form name=\"form1\" method=\"post\" action=\"\">\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$nome[$cod]."</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$sigla[$cod]."</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$prefeito[$cod]."</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$vice[$cod]."</font></td>\n";
        echo "                      <td><input type=\"submit\" name=\"action\" value=\"altPartido\">\n";
        echo "                        <input type=\"submit\" name=\"action\" value=\"excPartido\"><input type=\"hidden\" name=\"codigo\" value=\"$cod\"></td>\n";
        echo "                    </form></tr>\n";
}
?>
                  </table></td>
              </tr>
            </table>
          </div>
        </td>
    </tr>
  </table>
  <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
          <div align="center">
            <table width="660" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Candidados
                  Cadastrados:</strong></font></td>
              </tr>
              <tr>
                <td><table width="662" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="120"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome</font></strong></td>
                      <td width="74"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Numero</font></strong></td>
                      <td width="218"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Partido</font></strong></td>
                      <td width="117"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">A&ccedil;&atilde;o</font></strong></td>
                    </tr>
<?
$sql="select * from vereadores order by codigo";
$pP=$iM->im_select($sql);
while($d=mysql_fetch_row($pP)){
        echo "                    <tr><form name=\"form2\" method=\"post\" action=\"\">\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$d[1]</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$d[2]</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$sigla[$d[3]]."</font></td>\n";
        echo "                      <td><input type=\"submit\" name=\"action\" value=\"altC\">\n";
        echo "                        <input type=\"submit\" name=\"action\" value=\"excC\"><input type=\"hidden\" name=\"codigo\" value=\"$d[0]\"></td>\n";
        echo "                    </form></tr>\n";
}
?>                  </table></td>
              </tr>
            </table>
          </div>
        </td>
    </tr>
  </table>
  <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><form name="form3" method="post" action="">
          <div align="center">
            <table width="650" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#F2F4F4">
<div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cadastro
                    de Candidatos:</strong></font></div></td>
              </tr>
              <tr>
                <td><div align="center"> <?
                        if(is_numeric($c)){
                                $sql="select * from vereadores where codigo=$c";
                                $pC=$iM->im_selectSimples($sql);
                                $botao="alteraCandidatoVereador";
                        }else{
                                $botao="cadastraCandidatoVereador";
                        }

                ?>
                    <table width="412" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="58"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
                        <td width="354"><input name="nome" type="text" size="30" value="<?echo $pC[1]?>"></td>
                      </tr>
                      <tr>
                        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">N&uacute;mero</font></td>
                        <td><input name="numero" type="text" size="30" value="<?echo $pC[2]?>"></td>
                      </tr>
                      <tr>
                        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Partido:</font></td>
                        <td><select name="partido">
                        <?
                        for($i=0;$i<$partido;$i++){
                                $cod=$codigo[$i];
                                $sel="";if($pC[3]==$cod)$sel=" selected";
                                echo "<option value=\"".$cod."\"$sel>".$sigla[$cod]."</option>";
                              }

                        ?>
                                </select></td>
                      </tr>
                      <tr>
                        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td><input type="hidden" name="codigo" value="<?echo $pC[0] ?>"><input type="Submit" name="action" value="<?echo $botao?>"></td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
            </table>
          </div>
        </form></td>
    </tr>
  </table>
  <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><form name="form4" method="post" action="">
          <div align="center">
            <table width="650" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#F2F4F4"> <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cadastro
                    de Partidos:</strong></font></div></td>
              </tr>
              <tr>
                <td><div align="center">
                    <table width="412" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="82"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
                        <td width="330"><input name="nome" type="text" size="30"></td>
                      </tr>
                      <tr>
                        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Sigla:</font></td>
                        <td><input name="sigla" type="text" size="30"></td>
                      </tr>
                      <tr>
                        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">C. Prefeito:</font></td>
                        <td><input name="cPrefeito" type="text" size="30"></td>
                      </tr>
                      <tr>
                        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">C.
                          Vice: </font></td>
                        <td><input name="cVice" type="text" size="30"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="Submit" name="action" value="cadastraPartido"></td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
            </table>
            <br>
          </div>
        </form></td>
    </tr>
  </table>
  <br>
  <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td><div align="center"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">&copy; 2004 Interactive Multimedia 
          - Todos os Direitos Reservados</font></div></td>
    </tr>
  </table>
</div>
</body>
</html>
