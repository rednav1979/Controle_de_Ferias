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
                <div class="art-contentLayout"></h2>Hoje, 
                                        

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
day = " Ter�a - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " S�bado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Mar�o " 

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

include("seguranca.php"); // Inclui o arquivo com o sistema de seguran�a
protegePagina(); // Chama a fun��o que protege a p�gina
echo " Seja Bem Vindo(a)" .$_SESSION['usuarioNome']."";
?>
<br>
<br>



<blockquote>
<font size=4 color=Brown><b><u>Menu de Acesso </font></b></u>
<br>

<ul>
<li><a href="cadastrafuncionarios22062017.php"><img src="/images/usuario.png" width=60 height=60>Cadastro de Funcionarios</a></li>
<li><a href="cadastrafolgas22062017.php"><img src="/images/icone3.png" width=60 height=60>Cadastro de Folgas</a></li>
<li><a href="cadastraperiodos22062017.php"><img src="/images/preventiva.png" width=60 height=60>Cadastro de Periodos</a></li>
<li><a href="cadastrarecibo14072017.php"><img src="/images/manut_maquinas.png" width=60 height=60>Cadastra Recibo I</a></li>
<li><a href="cadastrareciboferias21072017.php"><img src="/images/manut_maquinas.png" width=60 height=60>Cadastra Recibo de Ferias II</a></li>
<li><a href="cadastrareciboferias2_16012018.php"><img src="/images/manut_maquinas.png" width=60 height=60>Cadastra Recibo de Ferias III</a></li>
<li><a href="cadastraprogramacao15092017.php"><img src="/images/blue-ray.png" width=60 height=60>Cadastra Programa��o</a></li>
<li><a href="detalhamento22062017.php"><img src="/images/ferramentas.png" width=60 height=60>Consulta Funcionarios</a></li>


<br>



</ul>

</blockquote> 
<br>
</font>
</font></font>
<br>
<a href="login.php"><img src=images/sair.png width=50 height=50></a>
Sair


</body>
</html>

