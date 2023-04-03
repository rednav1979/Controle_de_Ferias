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

<body onLoad="abrePop()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
        <h1 id="name-text" class="art-Logo-name"><a href="#">CONTROLE DE FERIAS</a></h1>                        
        <div id="slogan-text" class="art-Logo-text">Tecnologia da Informação</div>                        
        </div>
         </div>
         <div class="art-contentLayout">
		 </h2> Hoje,
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
</script>de 2015.   

<?php
//criar a conexÃ£o com o banco
include "sql_t.i.php";
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja Bem Vindo(a)";
if(isset($_POST['done'])){   
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
	
	// AUDITORIA 
    $ip = $_SERVER['REMOTE_ADDR'];
    if(empty($nome) || empty($usuario)|| empty($senha)){
        $erro = "Atenção, você deve preencher todos os campos";
    }else{        
       $sql = mysql_query("INSERT INTO `usuarios_controle_ferias`(`nome`, `usuario`, `senha`,`ip`) VALUES ('$nome ', '$usuario', '$senha','$ip')") or die(mysql_error());
            if($sql){
                $erro = "Dados cadastrados com sucesso!";
              } else{
                  $erro = "Não foi possivel cadastrar os dados";
              }
    }
}

?>   
   </head>
<br><br><br>
<blockquote>
<font size=2>
<form name="form1" action="cadastra_usuario.php" method="POST" style="padding-top:40px;">
<?php
if(isset($erro)){
    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}
?>
<table>
<thead>
<tr>
</tr>
</thead>
<tbody>
</font>
<tr><td>Nome Completo:</td>
<td><input type="text" name="nome"  value=""  class="campo" size=20/></td>
</tr>
<tr>
<td>Nome de Usuario:</td>
<td><input type="text" name="usuario" value=""  class="campo"size=20 /></td>
</tr>
<tr>
<td>Senha Desejada:</td>
<td><input type="password" name="senha"  value=""  class="campo"size=20 />
</td>
</tr>
<tr>
</select>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Cadastrar" /><input type="hidden" name="done"  value="" /></td>
</tr>
</tbody>
</table>
</form>
</blockquote>
<a href="index.php"><img src=images/voltar.png width=50 height=50></a>
</body>
</html>
