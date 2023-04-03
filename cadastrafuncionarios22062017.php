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

<font size=4><b><u>Cadastro de Funcionários</font></b></u>

 <?php

include "sql.php";
       
if(isset($_POST['done'])){   

    $matricula = $_POST['matricula'];
	$dt_admissao = $_POST['dt_admissao'];
    $per_inicial = $_POST['per_inicial'];
	$per_final = $_POST['per_final'];
	$dias_direito = $_POST['dias_direito'];
	
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
	
		if(empty ($dt_limite)||empty ($dt_admissao)||empty ($per_inicial)||empty ($per_final)||empty ($dias_direito)){

        $erro = "Atenção, você deve preencher todos os campos ou o matricula de usuario não pode ser recuperado";
			
		}else{        

       $sql = mysql_query("INSERT INTO `controle_ferias`(`matricula`,`tipo_registro`,`dt_admissao`, `per_inicial`,`per_final`,`dias_direito`,`dt_limite`,`usuario`,`ip`,`data_criacao`) VALUES ('$matricula','NORMAL','$dt_admissao', '$per_inicial', '$per_final', '$dias_direito','$dt_limite','$usuario','$ip',now())") or die(mysql_error());

            if($sql){

                $erro2 = "Dados cadastrados com sucesso!";
				//DISPARO DE E-MAIL QUANDO CADASTRADO BANCO DE HORA.
	//$mensagem_email= $usuario.", Cadastrou um registro no banco de horas para: ".$matricula." Do tipo: ".$tipo.",a respeito de: ".$descricao.", Executado no dia: ".$data.", das: ".$hora_inicio.", as: ".$hora_final." para verificar detalhes utilize o seguinte link a seguir: http://intranet.costasul.com.br/ti/banco_horas/";
   // $recebe_email = "ti@costasul.com.br";
   // $cabecalho = "From: bancodehoras@costasul.com.br" . "\r\n" . "Reply-To: ti@costasul.com.br" . "\r\n";
   // mail($recebe_email,"*** BANCO DE HORAS ***",$mensagem_email,$cabecalho ) ;

	
	
				

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



<form name="form1" action="cadastrafuncionarios22062017.php" method="POST" style="padding-top:40px;">

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


</tr>

</thead>

<tbody>

<tr>

<td width="20%">Matricula:</td>
<td><select name="matricula" class="campo" id="matricula">
<option></option>
<option>ADRIANA - 2220 </option>
<option>ALEXANDRA - 4410</option>
<option>ALINE_VITORIA - 6168</option>
<option>ANA_CAROLINA - 6183</option>
<option>AMILSON - 5691</option>
<option>ANDREIA - 1882</option>
<option>DAVI - 2853</option>
<option>EDICLEIA - 4070</option>
<option>CARLOS NEVES - 6014</option>
<option>ELOISA - 6110</option>
<option>ELESIO - 57</option>
<option>EMIR - 65</option>
<option>EDEGAR - 4974</option>
<option>FRANCIELLE - 3804</option>
<option>GEISIANE- 5457</option>
<option>GEISY 	- 3645</option>
<option>GERALDO - 68</option>
<option>GESSICA - 3655</option>
<option>GILBERTO- 2884</option>
<option>GILBERTO_AURINO - 1907</option>
<option>JEFFERSON - 5190</option>
<option>JEFERSON_CAMILO - 6243</option>
<option>JOAO - 74</option>
<option>JOEL - 1853</option>
<option>JOICE - 2248</option>
<option>JORGE - 4408</option>
<option>JOSE - 3208</option>
<option>JOSE_HELIO - 1736</option>
<option>JOSE_VANDERLEI - 6221</option>
<option>LIDIANE - 4697</option>
<option>MAYARA - 54</option>
<option>MARILIA- 4572</option>
<option>MARIA_LAMIM - 1952</option>
<option>MARCOS - 5492</option>
<option>MAURA  - 1627</option>
<option>RAYSSA - 5121</option>
<option>ROBSON - 5235</option>
<option>RONEI  - 5309</option>
<option>RICARDO - 5826</option>
<option>SAFIRA - 3608</option>
<option>SARA - 6041</option>
<option>SUZANA - 5600</option>
<option>SUELEN - 6125</option>
<option>SIBELY - 6074</option>
<option>THIAGO - 5071</option>
<option>THISBE - 1986</option>
<option>VAGNER - 3274</option>
<option>VALDECIR - 5161</option>
<option>VANDERLEI- 5187</option>
<option>VANDERSIR - 4128</option>
<option>------------</option>
<option>TERCEIROS</option>
<option>------------</option>
<option>ANA_PATRICIA</option>
<option>JUNIOR</option>
<option>KAO_PEY</option>
<option>GUSTAVO_SCHEEPP</option>
<option>CARLITO_OLIVEIRA</option>

<option></option>




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
<td><input name="dias_direito" type="text" maxlength="2" onkeyup="maiuscula(this)" id="dias_direito" />dd</td>
</tr>



<tr>
<td>Data Limite:</td>
<td><input type="text" name="dt_limite" id="dt_limite" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>



<td><input type="submit" value="Cadastrar" onclick="if(!confirm('Tem certeza que deseja Cadastrar?'))return false;" /><input type="hidden" name="done"  value="" /></td>



</tr>

</tbody>

</table>

</form>

<hr>



</blockquote>



<br>
</font>
</font></font>
<br>
<a href="index.php"><img src=images/voltar.png width=50 height=50></a>



</body>
</html>

