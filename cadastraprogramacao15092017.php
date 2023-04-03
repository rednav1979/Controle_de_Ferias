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

<font size=4><b><u>Cadastro de Programação de Férias</font></b></u>

 <?php

include "sql.php";
       
if(isset($_POST['done'])){   

    $matricula = $_POST['matricula'];
	$dt_folga = $_POST['dt_folga'];
    $obs_folga = $_POST['obs_folga'];
	$dias_folga = $_POST['dias_folga'];	
	$controle_folga_periodo = $_POST['periodo'];	
	$periodo = $_POST['periodo'];	
	
	$per_fruicao1 = $_POST['per_fruicao1'];	
	$per_fruicao11 = $_POST['per_fruicao11'];		

	
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
	

    
if ($controle_folga_periodo <> "Selecione..."){
    
		if(empty ($matricula)){
			

        $erro = "Atenção, você deve preencher todos os campos ou o matricula de usuario não pode ser recuperado";
			
		}else{  
$periodos_separados  = explode ("-",$periodo);

   //    $sql = mysql_query("update controle_ferias set per_fruicao1 = '$per_fruicao1',per_fruicao_11='$per_fruicao11' where matricula= '$matricula' and per_inicial= '$periodos_separados[0]' and per_final= '$periodos_separados[1]' ") or die(mysql_error());
	   $sql = mysql_query("INSERT INTO `controle_ferias`(`matricula`,`usuario`,`tipo_registro`,`ip`,`data_criacao`,`dt_programacao1`,`dt_programacao2`,`per_inicial`,`per_final`) VALUES ('$matricula','$usuario','PROGRAMA','$ip',now(),'$per_fruicao1','$per_fruicao11','$periodos_separados[0]','$periodos_separados[1]')") or die(mysql_error());



	   


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



<form name="form1" action="cadastraprogramacao15092017.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}


if(isset($erro2)){

    print '<div style="width:80%; background:green; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro2.'</div>';

}

?>
<blockquote>
 <form name="form1" action="01.php" method="POST">
<table border="0" >

<thead>

<tr>
<br>

</tr>

</thead>

<tbody>





<tr>
<td width="20%">Matricula:</td>
<td><select name="usuario_consulta" class="campo" id="usuario_consulta">
<option><?php $matricula ?></option>
 <?php 
 $codmat ='';
 if (isset($_POST['usuario_consulta'])){
	$codmat =$_POST['usuario_consulta'] ;	 
 }
 include "sql.php";
 $sqltudo = mysql_query("SELECT distinct matricula FROM controle_ferias ORDER BY MATRICULA")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
           for($j = 0; $j < $colunas; $j++){
           $matricula = @mysql_result($sqltudo, $j, "matricula");
 if($matricula == $codmat ){
	print'<option selected>'; 
 }else{
	print'<option>'; 
 }
  echo $matricula ;
 print '</option>';
 
           }
 ?>
</select>
<input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" />
</td>
</tr>




</form>
<tr>
<td width="20%">Periodo:</td>
<td><select name="periodo" class="campo" id="periodo">
<option>Selecione...</option>
  <?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
if(isset($_POST['done'])){   

    $id_retorno = $_POST['usuario_consulta'];    

           $sqltudo = mysql_query("select  matricula,per_inicial,per_final FROM controle_ferias where matricula='$id_retorno' AND tipo_registro='NORMAL' order by per_inicial ")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);		
           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */                   
		   $id = @mysql_result($sqltudo, $j, "id");           
		   $per_inicial = @mysql_result($sqltudo, $j, "per_inicial");           
		   $per_final = @mysql_result($sqltudo, $j, "per_final");          
		   $matricula = @mysql_result($sqltudo, $j, "matricula");
		   
           if ($per_inicial and $per_final <> ''){
            print'<option>'; 						
            echo $per_inicial;
            echo '-';
            echo $per_final;
            print '</option>';          
           }
}
}
	   print'</table>';

?>
</select>
</td>
</tr>
</table>
<table>
<tr>

<td><input type="hidden" value="<?php echo $matricula;?>" name="matricula" id="matricula" maxlength="10" onkeypress="mascaraData( this, event )" /> </td> 

<tr>
<td>Programação de Férias:</td>
<td><input type="text" name="per_fruicao1" id="per_fruicao1" maxlength="10" onkeypress="mascaraData( this, event )" />~
<input type="text" name="per_fruicao11" id="per_fruicao11" maxlength="10" onkeypress="mascaraData( this, event )" /> dd/mm/aaaa</td> 
</tr>

<hr>

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

