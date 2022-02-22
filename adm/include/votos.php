<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sistema Administrativo de Apura&ccedil;&atilde;o Eleitoral</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
        function posiciona(){
                document.form3.urna.focus();
        }
        function validaForm(){
                var urna=document.form3[0].value;
                var qtdVotantes=document.form3[1].value;
                var votosNatalicio=document.form3[2].value;
                var votosMarcelo=document.form3[3].value;
                var votosDino=document.form3[4].value;
                var votosPedro=document.form3[5].value;
                var votosEmBranco=document.form3[6].value;
                var votosNulos=document.form3[7].value;
                var i=0;
                qtdEleitores=new Number(qtdVotantes);
                qtdVotosPrefeito=new Number(0);
                qtdVotosVereador=new Number(0);
                for(i=2;i<9;i++){
                        qtdVotosPrefeito+=new Number(document.form3[i].value);
                }
                for(i=9;i<56;i++){
                        qtdVotosVereador+=new Number(document.form3[i].value);
                }
<?
        $qtdUrnas=$iM->im_qtRegistros("urnas");
        if($qtdUrnas>0){
                $sql="select * from urnas";
                $pU=$iM->im_select($sql);
                echo "if(urna==999 ||";
                while($d=mysql_fetch_row($pU)) echo " urna==$d[1] || ";
                echo "urna==998){";
                echo " alert (\"urna \"+urna+\" ja digitada\");\n";
                echo "        document.form3.urna.focus();\n";
                echo "        return false;\n";
                echo "}\n";
        }
?>
                if(urna==""){
                        alert ("Numero da Urna Nao Informado");
                        document.form3.urna.focus();
                        return false;
                }
                if(qtdVotantes==""){
                        alert ("Quantidade de Votantes nao Informado");
                        document.form3[1].focus();
                        return false;
                }
                if(votosNatalicio==""){
                        alert ("Seu Natalicio tem que ter votos....");
                        document.form3.votosNatalicio.focus();
                        return false;
                }
                if(votosDino==""){
                        alert ("Nenhum voto para o Dino....");
                        document.form3.votosDino.focus();
                        return false;
                }
                if(votosMarcelo==""){
                        alert ("Nenhum voto para o Marcelo Figueiredo....");
                        document.form3.votosMarcelo.focus();
                        return false;
                }
                if(votosPedro==""){
                        alert ("Nenhum voto para o Paulo Prezotto....");
                        document.form3.votosPedro.focus();
                        return false;
                }
                if(votosEmBranco==""){
                        alert ("Nenhum voto em branco nesta urna....");
                        document.form3.votosBranco.focus();
                        return false;
                }
                if(votosNulos==""){
                        alert ("Nenhum voto nulo nesta urna....");
                        document.form3.votosNulos.focus();
                        return false;
                }
                if(qtdVotosPrefeito!=qtdEleitores){
                        alert ("Quantidade de votos Para Prefeito("+qtdVotosPrefeito+") Nao Confere com Quantidade de Eleitores("+qtdEleitores+")");
                        document.form3.votosNatalicio.focus();
                        return false;
                }
                if(qtdVotosVereador!=qtdEleitores){
                        alert ("Quantidade de votos para Vereador ("+qtdVotosVereador+") Nao Confere com Quantidade de Eleitores("+qtdEleitores+")");
                        document.form3[9].focus();
                        return false;
                }
                return true;
        }
</script>
<body onload="posiciona()">
<div align="center">
  <table width="700" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#F2F4F4">
<div align="center"><font color="#CC0000" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sistema
          de Apura&ccedil;&atilde;o Eleitoral</strong></font></div></td>
    </tr>
  </table>
  <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><form name="form3" method="post" action="" onsubmit="return validaForm()">
          <div align="center">
            <table width="650" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#F2F4F4">
<div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cadastro de Votos:</strong></font></div></td>
              </tr>
              <tr>
                <td><div align="center">
                    <table width="412" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="158"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Urna:</font></td>
                        <td width="254"><input name="urna" type="text" size="5"></td>
                      </tr>
                      <tr>
                        <td width="158"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Qtd Eleitores:</font></td>
                        <td width="254"><input name="qtdEleitores" type="text" size="5"></td>
                      </tr>
                    </table>
                  </div></td>
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
                <td><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Partidos
                  Cadastrados:</strong></font></td>
              </tr>
              <tr>
                <td><table width="662" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="120"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome</font></strong></td>
                      <td width="74"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Sigla</font></strong></td>
                      <td width="218"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">C. Prefeito</font></strong></td>
                      <td width="133"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Votos</font></strong></td>
                    </tr>
<?
$sql="select * from partidos order by codigo";
$pP=$iM->im_select($sql);
for($partido=0;$d=mysql_fetch_row($pP);$partido++){
        $codigo[$partido]=$d[0];
        $nome[$codigo[$partido]]=$d[1];
        $sigla[$codigo[$partido]]=$d[2];
        $prefeito[$codigo[$partido]]=$d[3];
        $vice[$codigo[$partido]]=$d[4];
        $nomeX=explode(" ",$prefeito[$codigo[$partido]]);
        $nomeX=str_replace("í","i",$nomeX);
        $nomeInput[$codigo[$partido]]="votos".$nomeX[0];
}
for($i=0;$i<$partido;$i++){
        $cod=$codigo[$i];
        echo "                    <tr>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$nome[$cod]."</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$sigla[$cod]."</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">".$prefeito[$cod]."</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><input name=\"".$nomeInput[$cod]."\" type=\"text\" size=\"5\"></font></td>\n";
        echo "                    </tr>\n";
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
                <td><table width="400" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="120"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome</font></strong></td>
                      <td width="74"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Numero</font></strong></td>
                      <td width="117"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Votos</font></strong></td>
                    </tr>
<?
$sql="select * from vereadores order by codigo";
$pP=$iM->im_select($sql);
while($d=mysql_fetch_row($pP)){
        echo "                    <tr>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$d[1]</font></td>\n";
        echo "                      <td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$d[2]</font></td>\n";
        echo "                      <td><input name=\"qtdVotos[$d[0]]\" type=\"text\" size=\"5\"></td>\n";
        echo "                    </tr>\n";
}
?>                  </table></td>
              </tr>
            </table>
          </div>
        </td>
    </tr>
  </table>
  <br>
<br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
          <div align="center">
              <tr>
                <td><div align="center">
                    <table width="412" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="Submit" name="action" value="cadastraVotos"></td>
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
