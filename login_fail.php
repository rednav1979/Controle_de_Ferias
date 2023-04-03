<font color=black size=6 face=fixedsys><center>

</font>

<img src=/images/logo.png>
<table>

	<form method="post" action="valida.php">
<tr>
<td>	<label>Usuário</label></td>
<td>	<input type="text" name="usuario" maxlength="50" /></td>
</tr>	
<tr>
<td>	<label>Senha</label></td>
<td>	<input type="password" name="senha" maxlength="50" /> </td>
</tr>
<tr>
<td></td>	 
</tr>

<tr>
<td><input type="submit" value="Entrar" /></td>	 
<td>Login Falhou :(</td>	 

</tr>

	</form>
</table>
<img src=/images/cadeado.jpg>
<br>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
print'<b>Olá, <b>';
print '<font color=red>';
echo $ip;
print '</font>';
print'<b> Seu ip foi registrado para fins de auditoria e o administrador notificado!<b>';
$mensagem_email= $ip." , Falhou ao tentar logar no sistema de Controle de Ferias, verifique!!!";
$recebe_email = "vanderlei@costasul.com.br";
mail($recebe_email,"Falha de login no controle de ferias!!!",$mensagem_email ) ;


?>
