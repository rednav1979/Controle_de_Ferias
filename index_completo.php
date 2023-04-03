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
    <script>  

    
function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
	
function Mascara_Hora(hora){ 
var hora01 = ''; 
hora01 = hora01 + hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].hora_inicio.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora(); 
} 
} 
           
function Verifica_Hora(){ 
hrs = (document.forms[0].hora_inicio.value.substring(0,2)); 

min = (document.forms[0].hora_inicio.value.substring(3,5)); 
               
               
estado = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado = "errada"; 
} 
               
if (document.forms[0].hora_inicio.value == "") { 
estado = "errada"; 
} 



if (estado == "errada") { 
alert("Por Favor, Verifique os valores de Hora Inicial !"); 
document.forms[0].hora_inicio.focus(); 
} 
} 



function Mascara_Hora2(Hora){ 
var hora01 = ''; 
hora01 = hora01 + Hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].hora_final.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora2(); 
} 
} 
           
function Verifica_Hora2(){ 
hrs = (document.forms[0].hora_final.value.substring(0,2)); 

min = (document.forms[0].hora_final.value.substring(3,5)); 
               
               
estado2 = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado2 = "errada"; 
} 
               
if (document.forms[0].hora_final.value == "") { 
estado2 = "errada"; 
} 



if (estado2 == "errada") { 
alert("Por Favor, Verifique os valores de Hora Final!"); 
document.forms[0].hora_final.focus(); 
} 
} 

function mascaraData( campo, e )
{
	var kC = (document.all) ? event.keyCode : e.keyCode;
	var data = campo.value;
	
	if( kC!=8 && kC!=46 )
	{
		if( data.length==2 )
		{
			campo.value = data += '/';
		}
		else if( data.length==5 )
		{
			campo.value = data += '/';
		}
		else
			campo.value = data;
	}
}


//-->
</script>
                                       

<br><br>
<br>



 <?php

include "sql.php";
       
if(isset($_POST['done'])){   

    $matricula = $_POST['matricula'];
	$dt_admissao = $_POST['dt_admissao'];
    $per_inicial = $_POST['per_inicial'];
	$per_final = $_POST['per_final'];
	$dias_direito = $_POST['dias_direito'];
	$per_fruicao1 = $_POST['per_fruicao1']; 
	$per_fruicao1_1 = $_POST['per_fruicao1_1']; 
	$per_fruicao2 = $_POST['per_fruicao2']; 
	$per_fruicao2_2 = $_POST['per_fruicao2_2']; 
	$per_fruicao3 = $_POST['per_fruicao3']; 
	$per_fruicao3_3 = $_POST['per_fruicao3_3']; 
	$folga_individual = $_POST['folga_individual']; 
	$saldo_ferias = $_POST['saldo_ferias']; 
	$dt_limite = $_POST['dt_limite']; 
	$dt_recibo = $_POST['dt_recibo']; 
	
	$data = $_POST['data'];
	$validar_data =$data;	
	$data_atual = date('d/m/Y', strtotime('-3 days'));
	
	$data_atual = DateTime::createFromFormat('d/m/Y', $data_atual);
	$validar_data = DateTime::createFromFormat('d/m/Y', $validar_data);
	if ($validar_data <> ''){
	
	if ($validar_data < $data_atual){		
	print'<font color=red size=4>';
	echo "<script>alert('DATA NÃO PODE SER MENOR QUE 3 DIAS, VERIFIQUE SE A DATA ESTA NO FORMATO DD/MM/AAAA EX: 01/01/2017!');</script>";
	   
	   //$matricula='';
	   print '</font>';
    }
}	
	
     	
	// AUDITORIA 
    $ip = $_SERVER['REMOTE_ADDR'];
    $usuario = $_SESSION['usuarioNome'];    
	

    

	
 

    if(empty ($matricula)){

        $erro = "Atenção, você deve preencher todos os campos ou o matricula de usuario não pode ser recuperado";
			
		}else{        

       $sql = mysql_query("INSERT INTO `controle_ferias`(`matricula`,`dt_admissao`, `per_inicial`,`per_final`,`dias_direito`,`per_fruicao1`,`per_fruicao_11`,`per_fruicao2`,`per_fruicao_22`,`per_fruicao3`,`per_fruicao_33`,`folga_individual`,`saldo_ferias`,`dt_limite`,`dt_recibo`,`usuario`,`ip`,`data_criacao`) VALUES ('$matricula','$dt_admissao', '$per_inicial', '$per_final', '$dias_direito', '$per_fruicao1','$per_fruicao1_1 ','$per_fruicao2','$per_fruicao2_2 ','$per_fruicao3 ','$per_fruicao3_3 ','$folga_individual ','$saldo_ferias ','$dt_limite','$dt_recibo ','$usuario','$ip',now())") or die(mysql_error());

            if($sql){

                $erro2 = "Dados cadastrados com sucesso!";
				//DISPARO DE E-MAIL QUANDO CADASTRADO BANCO DE HORA.
	$mensagem_email= $usuario.", Cadastrou um registro no banco de horas para: ".$matricula." Do tipo: ".$tipo.",a respeito de: ".$descricao.", Executado no dia: ".$data.", das: ".$hora_inicio.", as: ".$hora_final." para verificar detalhes utilize o seguinte link a seguir: http://intranet.costasul.com.br/ti/banco_horas/";
    $recebe_email = "ti@costasul.com.br";
    $cabecalho = "From: bancodehoras@costasul.com.br" . "\r\n" . "Reply-To: ti@costasul.com.br" . "\r\n";
    mail($recebe_email,"*** BANCO DE HORAS ***",$mensagem_email,$cabecalho ) ;

	
	
				

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

    }

}

?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
.campo{
width:400px;
}
</style>



</head>



<form name="form1" action="index.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}


if(isset($erro2)){

    print '<div style="width:80%; background:green; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro2.'</div>';

}

?>
<blockquote>
<table border="0" >

<thead>

<tr>
<br>
<th colspan="2">Controle Interno de Férias</th>

</tr>

</thead>

<tbody>

<tr>

<td width="20%">Matricula:</td>
<td><select name="matricula" class="campo" id="matricula">
<option></option>
<option>T.I</option>
<option>--------------</option>
<option>VANDERLEI</option>
<option>HEITOR </option>
<option>LUCAS </option>
<option>THISBE </option>
<option>SAFIRA </option>
<option>TUDO </option>

<option>--------------</option>

</select>
</td>
</tr>

<tr>
<td>Data Admissão:</td>
<td><input type="text" name="dt_admissao" id="dt_admissao" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Periodo Inicial:</td>
<td><input type="text" name="per_inicial" id="per_inicial" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Periodo Final:</td>
<td><input type="text" name="per_final" id="per_final" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Dias de Direito:</td>
<td><input name="dias_direito" type="text" onkeyup="maiuscula(this)" id="dias_direito" />dd</td>
</tr>


<tr>
<td>Periodo Fruição 1:</td>
<td><input type="text" name="per_fruicao1" id="per_fruicao1" maxlength="10" onkeypress="mascaraData( this, event )" />~
<input type="text" name="per_fruicao1_1" id="per_fruicao1_1" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Periodo Fruição 2:</td>
<td><input type="text" name="per_fruicao2" id="per_fruicao2" maxlength="10" onkeypress="mascaraData( this, event )" />~
<input type="text" name="per_fruicao2_2" id="per_fruicao2_2" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Periodo Fruição 3:</td>
<td><input type="text" name="per_fruicao3" id="per_fruicao3" maxlength="10" onkeypress="mascaraData( this, event )" />~
<input type="text" name="per_fruicao3_3" id="per_fruicao3_3" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Folga Individual:</td>
<td><input type="text" name="folga_individual" id="folga_individual" maxlength="2"  />dd</td> 
</tr>

<tr>
<td>Saldo de Ferias:</td>
<td><input type="text"  enable="false" name="saldo_ferias" id="saldo_ferias" maxlength="2"  /></td> 
</tr>

<tr>
<td>Data Limite:</td>
<td><input type="text" name="dt_limite" id="dt_limite" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<tr>
<td>Data Recibo:</td>
<td><input type="text" name="dt_recibo" id="dt_recibo" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>









<td><input type="submit" value="Cadastrar" onclick="if(!confirm('Tem certeza que deseja Cadastrar?'))return false;" /><input type="hidden" name="done"  value="" /></td>



</tr>

</tbody>

</table>

</form>

<hr>

<?php
 	
	if ($usuariosql == 'vanderlei'){
		echo '<li><a href ="detalhamento16062017.php">CONSULTAR PROGRAMAÇÃO</a></li>';
		
		
		
		
		
    }
	if (trim($usuariosql) == 'heitor'){
		echo '<li><a href ="detalhamento16062017.php">CONSULTAR PROGRAMAÇÃO</a></li>';
		
		
		
	}
	
?>

</blockquote>



<br>
</font>
</font></font>
<br>
<a href="login.php"><img src=images/sair.png width=50 height=50></a>
Sair


</body>
</html>

