<?php
 ini_set('default_charset','ISO-8859-1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>

<body onload="aviso()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
                
        
                                       
                        <h1 id="name-text" class="art-Logo-name"><a href="#">CONTROLE DE FERIAS </a></h1>
                        
                        <div id="slogan-text" class="art-Logo-text">TECNOLOGIA DA INFORMACAO</div>
                        
                    </div>
                </div>
                <div class="art-contentLayout">                    
                                              
                        
                                  
                                         
                                        </h2>
                                     Hoje, 
                                        

<script language=javascript>
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=1000,height=600,scrollbars=YES")
}


</script> 
                                        
                                        <script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->
</script>


<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a)";
$usuariosql = $_SESSION['usuarioNome'];
?>  



<?php
//print '<font size=2 color=black>';
//criar a conexÃ£o com o banco


//$per_atual = '';
$per_inia='';
$per_fima='';

if(isset($_POST['periodo'])){   
    
    $per_atual = $_POST['periodo'];
	$per_inia= substr($per_atual,0,10);
	$per_fima= substr($per_atual,11,10);
    
}

if(isset($_POST['done'])){   

    $usuario_consulta = $_POST['usuario_consulta'];
    

    if(empty($usuario_consulta)){

        $erro = "Atenção, você deve preencher o campo Consulta";

    }else{        

       $sql = mysql_query("SELECT * FROM `banco_horas` where NOME = '$usuario_consulta' ORDER BY id") or die(mysql_error());

            if($sql){

                $erro2 = "Pesquisa Feita  com sucesso!";

              } else{

                  $erro = "Não foi possivel  recuperar os dados";

              }

    }

}

?>


<blockquote>
<form name="form1" action="detalhamento_periodo18072017.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}


if(isset($erro2)){

    print '<div style="width:80%; background:green; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro2.'</div>';

}
?>
<table>
<thead>
<tr>
</tr>
</thead>
<tbody>
<tr>
<td width="20%">Matricula:</td>
<td><select name="usuario_consulta" class="campo" id="usuario_consulta">
<option >Selecione...</option>

 <?php 
 $codmat ='';
 if (isset($_POST['usuario_consulta'])){
	$codmat =$_POST['usuario_consulta'] ;	 
 }
 
 $sqltudo = mysql_query("SELECT distinct matricula,per_inicial,per_final FROM controle_ferias order by matricula")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
           for($j = 0; $j < $colunas; $j++){
           $matricula = @mysql_result($sqltudo, $j, "matricula");		   
		   $per_inicial = @mysql_result($sqltudo, $j, "per_inicial");
		   $per_final = @mysql_result($sqltudo, $j, "per_final");
 if($matricula == $codmat ){
	print'<option selected>'; 
 }else{
	print'<option>'; 
 }
  echo $matricula ;
  echo '|';
  echo $per_inicial ;
  echo '|';
  echo $per_final ;
  
 print '</option>';
 
           }
 ?>
</select>
<input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" />
</td>
</tr>


</table>
</form>
</blockquote>
<font color=grow size=4 face=arial> Dados do Colaborador...</font>

<?php 
$total_ferias = 0;
// Cria uma função que retorna o timestamp de uma data no formato DD/MM/AAAA
function geraTimestamp($data) {
$partes = explode('/', $data);
return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
}

function converterData($data) {
        if (preg_match('/[0-9]*\/[0-9]*\/[0-9]*/', $data)) {
            $t = explode('/', $data);
        } else {
            $t = Array('00', '00', '00');
        }		
        return  $t[2] . '-' . $t[1] . '-' . $t[0];
    }
// INICIO DA CONSULTA PERSONALIZADA


   
   @mysql_select_db($db);//selecione o banco de dados
   $usuario_consulta_separado  = explode ("|",$usuario_consulta);
 $sqltudo = mysql_query("SELECT * FROM `controle_ferias` where matricula = '$usuario_consulta_separado[0]' and tipo_registro='NORMAL' and per_inicial='$usuario_consulta_separado[1]' and per_final='$usuario_consulta_separado[2]' ORDER BY matricula")  or die(mysql_error());  				
		  
		  $colunas = mysql_num_rows($sqltudo);         
	   print'<br>';		
	   print'<br>';		   	
       print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	   print'<td><b>ID</td>';
	   print'<td><b>COLABORADOR</td>';	   
	   print'<td><b>ADMISSÃO </font></td>';	    
	   print'<td colspan="2"><b>PERIODO AQUISIÇÃO</td>';	   
	   print'<td><b>DIREITO</td>';	   
	   print'<td><b>LIMITE</td>';	   
	   print'<td><b>RECIBO</td>';
	   print'<td><b>DIAS</td>';
	   print'<td><b>RECIBO FERIAS</td>';  
	   print'<td><b>DIAS</td>';
	   
	   print'</tr></b>';
	   $folga_total = 0;
	   $total_ferias = 0;

           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $matricula = @mysql_result($sqltudo, $j, "matricula");		   
		   $dt_admissao = @mysql_result($sqltudo, $j, "dt_admissao");		   
           $per_inicial = @mysql_result($sqltudo, $j, "per_inicial");		   		   
           $per_final =   @mysql_result($sqltudo, $j, "per_final");           
		   $dias_direito = @mysql_result($sqltudo, $j, "dias_direito");           
		   $total_ferias = ($total_ferias + $dias_direito);		   
		   $per_fruicao1 = @mysql_result($sqltudo, $j, "per_fruicao1");           
		   $per_fruicao_11 = @mysql_result($sqltudo, $j, "per_fruicao_11");
           $folga_individual = @mysql_result($sqltudo, $j, "folga_individual");
		   $saldo_ferias = @mysql_result($sqltudo, $j, "saldo_ferias");
		   $dt_limite = @mysql_result($sqltudo, $j, "dt_limite");
		   $dt_recibo = @mysql_result($sqltudo, $j, "dt_recibo");
		   $dt_recibo_ferias = @mysql_result($sqltudo, $j, "dt_recibo_ferias");
		   $tipo_registro = @mysql_result($sqltudo, $j, "tipo_registro");
		   $dias_dt_recibo = @mysql_result($sqltudo, $j, "dias_dt_recibo");
		   $dias_dt_recibo_ferias = @mysql_result($sqltudo, $j, "dias_dt_recibo_ferias");
		   
		   $dt_folga = @mysql_result($sqltudo, $j, "dt_folga");
		   $dias_folga = @mysql_result($sqltudo, $j, "dias_folga");
		   $obs_folga = @mysql_result($sqltudo, $j, "obs_folga");
		   		   
		   $data_criacao = @mysql_result($sqltudo, $j, "data_criacao");
		   $usuario = @mysql_result($sqltudo, $j, "usuario");
		   $ip = @mysql_result($sqltudo, $j, "ip");
		   
		
	
	if ($tipo_registro == 'NORMAL'){
	   print'<tr>';
	   print '<td>'.$id.'	</td>';
	   print '<td>'.$matricula.'</td>';
	   print '<b>';
	   print '<td>'.$dt_admissao.'</td>';
	   print '</b>';
	   print '<td>'.$per_inicial.'</td>';	   	   
	   print '<td>'.$per_final.'</td>';
	   print '<td>'.$dias_direito.'</td>';
	   print '<td>'.$dt_limite.'</td>';	  
	   if ($dt_recibo <>''){
	   print '<td>'.$dt_recibo.'</td>';	  	   	   
	        }else{
		print '<td>-</td>';	  	   	   		
			}
			if ($dias_dt_recibo <>''){
	   print '<td>'.$dias_dt_recibo.'</td>';	  	   	   	
	        }else{
		print '<td>-</td>';	  	   	   		
			}
			 if ($dt_recibo_ferias <>''){
	   print '<td>'.$dt_recibo_ferias.'</td>';	  	   	   
	        }else{
		print '<td>-</td>';	  	   	   		
			}
				if ($dias_dt_recibo_ferias <>''){
	   print '<td>'.$dias_dt_recibo_ferias.'</td>';	  	   	   	
	        }else{
		print '<td>-</td>';	  	   	   		
			}
			
    }
		   }
	   print'</table>';


// FIM DA CONSULTA PERSONALIZADA


?>

<br>
<font color=grow size=4 face=arial> Dados sobre folgas...</font>

<?php 


// Cria uma função que retorna o timestamp de uma data no formato DD/MM/AAAA

// INICIO DA CONSULTA PERSONALIZADA

   
   @mysql_select_db($db);//selecione o banco de dados	
           
$sqltudo = mysql_query("SELECT * FROM `controle_ferias` where matricula = '$usuario_consulta_separado[0]' and tipo_registro='FOLGA' and per_inicial='$usuario_consulta_separado[1]' and per_final='$usuario_consulta_separado[2]' ORDER BY matricula")  or die(mysql_error());  						   
           $colunas = mysql_num_rows($sqltudo);         
	   print'<br>';		
	   print'<br>';		   	
       print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	   print'<td><b>ID</td>';
	   print'<td colspan="2"><b>PERIODO AQUISIÇÃO</td>';	   
	   print'<td><b>DT. FOLGA</td>';		   
	   print'<td><b>OBS. F	OLGA</td>';		   
	   print'<td><b>DIAS FOLGA</td>';		      
	   print'</tr></b>';
	   $folga_total = 0;

           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $matricula = @mysql_result($sqltudo, $j, "matricula");
		   $dt_admissao = @mysql_result($sqltudo, $j, "dt_admissao");
           $per_inicial = @mysql_result($sqltudo, $j, "per_inicial");		   		   
           $per_final =   @mysql_result($sqltudo, $j, "per_final");           		   
		   $per_fruicao1 = @mysql_result($sqltudo, $j, "per_fruicao1");           
		   
		   $per_fruicao_11 = @mysql_result($sqltudo, $j, "per_fruicao_11");
           $folga_individual = @mysql_result($sqltudo, $j, "folga_individual");		   
		   $dt_limite = @mysql_result($sqltudo, $j, "dt_limite");
		   $dt_recibo = @mysql_result($sqltudo, $j, "dt_recibo");
		   $tipo_registro = @mysql_result($sqltudo, $j, "tipo_registro");
		   
		   $dt_folga = @mysql_result($sqltudo, $j, "dt_folga");
		   $dias_folga = @mysql_result($sqltudo, $j, "dias_folga");
		   $obs_folga = @mysql_result($sqltudo, $j, "obs_folga");
		   		   
		   $data_criacao = @mysql_result($sqltudo, $j, "data_criacao");
		   $usuario = @mysql_result($sqltudo, $j, "usuario");
		   $ip = @mysql_result($sqltudo, $j, "ip");
		   
	
    if ($tipo_registro == 'FOLGA'){
		print'<tr>';
		print '<td>'.$id.'	</td>';
       print '<td>'.$per_inicial.'</td>';
	   print '<td>'.$per_final.'</td>';
	   print '<td>'.$dt_folga.'</td>';
	   $folga_total = $folga_total +$dias_folga;
	   print '<td>'.$obs_folga.'</td>';
	   print '<td>'.$dias_folga.'</td>';
	   	   
	}	
	
    }
	   print'</table>';

?>
<br>
<font color=grow size=4 face=arial> Periodos de Fruição...</font>

<?php 

// INICIO DA CONSULTA PERSONALIZADA

   
   @mysql_select_db($db);//selecione o banco de dados
           
		   $sqltudo = mysql_query("SELECT * FROM `controle_ferias` where matricula = '$usuario_consulta_separado[0]' and tipo_registro='PERIODO' and per_inicial='$usuario_consulta_separado[1]' and per_final='$usuario_consulta_separado[2]' ORDER BY matricula")  or die(mysql_error());  						   
           $colunas = mysql_num_rows($sqltudo);         
	   print'<br>';		
	   print'<br>';		   	
       print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	   print'<td><b>ID</td>';
	   print'<td colspan="2"><b>PERIODOS DE AQUISIÇÃO</td>';	   
	   print'<td colspan="2"><b>PERIODOS DE FRUIÇÃO</td>';	
	   print'<td><b>FOLGAS<b></td>';	
	   
	   
	   
	   print'</tr></b>';
//	   $folga_total = 0;
       $total_fruicoes=0;	
	   $total_fruicoes=2;
	   $intervalo_maisum = 0;	   

           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $matricula = @mysql_result($sqltudo, $j, "matricula");
		   $dt_admissao = @mysql_result($sqltudo, $j, "dt_admissao");
           $per_inicial = @mysql_result($sqltudo, $j, "per_inicial");		   		   
           $per_final =   @mysql_result($sqltudo, $j, "per_final");           		   
		   $per_fruicao1 = @mysql_result($sqltudo, $j, "per_fruicao1");           
		   $per_fruicao_11 = @mysql_result($sqltudo, $j, "per_fruicao_11");           
		   $folga_individual = @mysql_result($sqltudo, $j, "folga_individual");
		   $saldo_ferias = @mysql_result($sqltudo, $j, "dias_direito");
		   $dt_limite = @mysql_result($sqltudo, $j, "dt_limite");
		   $dt_recibo = @mysql_result($sqltudo, $j, "dt_recibo");
		   $tipo_registro = @mysql_result($sqltudo, $j, "tipo_registro");
		   
		   $dt_folga = @mysql_result($sqltudo, $j, "dt_folga");
		   $dias_folga = @mysql_result($sqltudo, $j, "dias_folga");
		   $obs_folga = @mysql_result($sqltudo, $j, "obs_folga");
		   		   
		   $data_criacao = @mysql_result($sqltudo, $j, "data_criacao");
		   $usuario = @mysql_result($sqltudo, $j, "usuario");
		   $ip = @mysql_result($sqltudo, $j, "ip");
		
	 if ($tipo_registro == 'PERIODO'){
	   print'<tr>'; 
print '<td>'.$id.'	</td>';       
	   print '<td>'.$per_inicial.'</td>';
	   print '<td>'.$per_final.'</td>';
	   print '<td>'.$per_fruicao1.'</td>';
	   print '<td>'.$per_fruicao_11.'</td>';
	   	   
	 $data1 = converterData($per_fruicao1);
	 $data2 = converterData($per_fruicao_11);
	 $data11 = new DateTime( $data1);
     $data22 = new DateTime( $data2);
	 $intervalo = $data11->diff( $data22 );      	 	 
	 $total_fruicoes = ($total_fruicoes + $intervalo->d);	 
	 $intervalo_maisum = $intervalo_maisum + $intervalo->d+1;   
	 $total_fruicoes2 =   ($total_fruicoes2 + $intervalo_maisum);	 
	  print '<td>'.$intervalo_maisum.'</td>';	
	   
	   $intervalo_maisum=0;
	}	
           }
	   print'</table>';

// FIM DA CONSULTA PERSONALIZADA
?>


<br>

<font color=grow size=4 face=arial> Programação de Ferias...</font>



<?php 

// INICIO DA CONSULTA PERSONALIZADA

   
   @mysql_select_db($db);//selecione o banco de dados
   
	
       $sqltudo = mysql_query("SELECT * FROM `controle_ferias` where matricula = '$usuario_consulta' and tipo_registro='PROGRAMA' ")  or die(mysql_error()); 
       $colunas = mysql_num_rows($sqltudo);         
	   print'<br>';		
	   print'<br>';		   	
       print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	   print'<td><b>ID</td>';
	   print'<td colspan="2"><b>PERIODOS DE AQUISIÇÃO</td>';	   
	   print'<td colspan="2"><b>PERIODOS DE PROGRAMACÃO</td>';	
	   
	   
	   
	   
	   print'</tr></b>';
//	   $folga_total = 0;
       $total_fruicoes=0;	
	   $total_fruicoes=2;
	   $intervalo_maisum = 0;	   

           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $matricula = @mysql_result($sqltudo, $j, "matricula");
		   $dt_admissao = @mysql_result($sqltudo, $j, "dt_admissao");
           $per_inicial = @mysql_result($sqltudo, $j, "per_inicial");		   		   
           $per_final =   @mysql_result($sqltudo, $j, "per_final");           		   
		   $per_fruicao1 = @mysql_result($sqltudo, $j, "per_fruicao1");           
		   $per_fruicao_11 = @mysql_result($sqltudo, $j, "per_fruicao_11");           
		   $tipo_registro = @mysql_result($sqltudo, $j, "tipo_registro");
		   $dt_programacao2 = @mysql_result($sqltudo, $j, "dt_programacao2");
		   $dt_programacao1 = @mysql_result($sqltudo, $j, "dt_programacao1");
		   
		   $data_criacao = @mysql_result($sqltudo, $j, "data_criacao");
		   $usuario = @mysql_result($sqltudo, $j, "usuario");
		   $ip = @mysql_result($sqltudo, $j, "ip");
		
	 
	   print'<tr>';        
	   print '<td>'.$id.'	</td>';
	   print '<td>'.$per_inicial.'	</td>';
	   print '<td>'.$per_final.'	</td>';
	   print '<td>'.$dt_programacao1.'	</td>';
	   print '<td>'.$dt_programacao2.'	</td>';
	}	
	   print'</table>';
print '<br>';
print '<blockquote>';
print '<font color=green size=4>';
print '<i>';
print'Colaborador:';
print $usuario_consulta_separado[0];
print '<font color=grow size=4>';
print'<br>';
print 'TOTAL FOLGAS:';
print $folga_total+ $total_fruicoes2;
//print $folga_total+$total_fruicoes2;
print '<br>';
print 'SALDO DE FERIAS:';
$total_ferias= ($total_ferias-$folga_total-$total_fruicoes2);

if ($total_ferias < 0 ){	
	print '<font color=red size=4>';
	print $total_ferias;
	print '</font>';
}
if ($total_ferias > 0 ){	
	print '<font color=green size=4>';
	print $total_ferias;
	print '</font>';
}
if ($total_ferias == 0 ){	
	print '<font color=black size=4>';
	print $total_ferias;
	print '</font>';
}

print '</blockquote>';

?>
<br>
<font size=2 color=orange>
<br>
<a href="detalhamento22062017.php"><img src=images/voltar.png width=50 height=50></a>
</body>
</html>



