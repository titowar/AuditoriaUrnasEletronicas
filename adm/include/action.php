<?

if(iSsEt($action)){
        switch($action){
                case "cadastraVotos":
                        $iM->im_insereBdNoPri("urnas","numero,votosC1,votosC2,votosC3,votosC4,branco,nulos,abstencoes","$urna,'$votosNatalicio','$votosMarcelo','$votosDino','$votosPedro','$votosBranco','$votosNulos','$votosAbstencoes'");
                        $sql="select * from vereadores order by codigo";
                        $pV=$iM->im_select($sql);
                        while($d=mysql_fetch_row($pV)){
                                $totalVotos=$d[4]+$qtdVotos[$d[0]];
                                switch($d[3]){
                                        case "1": $votosVerP1+=$qtdVotos[$d[0]]; break;
                                        case "2": $votosVerP2+=$qtdVotos[$d[0]]; break;
                                        case "3": $votosVerP3+=$qtdVotos[$d[0]]; break;
                                        case "4": $votosVerP4+=$qtdVotos[$d[0]]; break;
                                        case "5": $votosVerP5+=$qtdVotos[$d[0]]; break;
                                        case "6": $votosVerP6+=$qtdVotos[$d[0]]; break;
                                        case "7": $votosVerP7+=$qtdVotos[$d[0]]; break;
                                }
                                $sql="update vereadores set qtdVotos=$totalVotos where codigo=$d[0]";
                                $iM->im_executaBd($sql);
                                $iM->im_insereBdNoPri("vereadores_urnas","secao,vereador,qtdVotos","$urna,$d[0],'".$qtdVotos[$d[0]]."'");
                        }
                        $sql="select * from partidos";
                        $pP=$iM->im_select($sql);
                        while($d=mysql_fetch_row($pP)){
                                switch($d[0]){
                                        case 1:
                                                $totalVotos=$d[5]+$votosNatalicio;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",1);
                                                break;
                                        case 2:
                                                $totalVotos=$d[5]+$votosMarcelo;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",2);
                                                break;
                                        case 3:
                                                $totalVotos=$d[5]+$votosDino;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",3);
                                                break;
                                        case 4:
                                                $totalVotos=$d[5]+$votosPedro;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",4);
                                                break;
                                        case 5:
                                                $totalVotos=$d[5]+$votosBranco;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",5);
                                                break;
                                        case 6:
                                                $totalVotos=$d[5]+$votosNulos;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",6);
                                                break;
                                        case 7:
                                                $totalVotos=$d[5]+$votosAbstencoes;
                                                $totalVerVotos=$d[5]+$votosVerP1;
                                                $iM->im_alteraBd("partidos","votosPrefeito=$totalVotos,votosVereador='$totalVerVotos'",7);
                                                break;
                                }
                        }
                        $iM->volta("?im=votos");
                        break;
                case "alteraCandidatoVereador":
                        $iM->im_alteraBd("vereadores","nome='$nome',numero='$numero',partido='$partido'",$codigo);
                        $iM->volta("?");
                        break;
                case "altC":
                        $iM->volta("?c=$codigo");
                        break;
                case "cadastraCandidatoVereador":
                        $iM->im_insereBdNoPri("vereadores","nome,numero,partido","'$nome','$numero','$partido'");
                        $iM->volta("?");
                        break;
                case "cadastraPartido":
                        $iM->im_insereBdNoPri("partidos","nome,sigla,cPrefeito,cVice","'$nome','$sigla','$cPrefeito','$cVice'");
                        $iM->volta("?");
                        break;
                default:
                        echo "erro: ".$action;
                        break;
        }


}


?>