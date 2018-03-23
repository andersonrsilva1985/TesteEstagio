<!DOCTYPE html>

<html lang="pt=br">
	<head>
	<title> VIAJANET </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

			<script language="JavaScript" >
				function enviadados(){
				 
				 
				 // Testa o preenchimento do nome
				if(document.getElementById("nome").value =="" || document.getElementById("nome").value.length < 1)
			 	{
				alert( "Nome inv�lido!" );
				return false;
				}
		        // Valida se o emal tem ponto e arroba
				if( document.getElementById("email").value=="" || document.getElementById("email").value.indexOf('@')==-1 || document.getElementById("email").value.indexOf('.')==-1 )
				{
				alert( "Email Inv�lido!" );
				return false;
				}
				//Checa se o CPF tem 11 caracteres
				if( document.getElementById("cpf").value=="" || document.getElementById("cpf").value.length < 11)
				{
				alert( "CPF Incorreto!" );
				return false;
				}
				else
				return true;
				}

			</script>
	<body>
		<h1> <font face="Calibri" size="30" color="Blue">Viajanet</font> </h1> <br>
		
 <br/>
		
		<form id="cadastro" name="cadastro" method="post" action="http://127.0.0.1/person.php"onsubmit="return enviadados();">

<fieldset>
<legend><font face="Calibri" size="12" color="Black">Informacoes do cliente</font></legend>
<table cellspacing="12" bgcolor="lightgray">
	<tr>
		<td>
		<label for="nome"><b><i>Nome:</i></b></label>
		</td>
		<td align="left">
				<input id="nome" type=text required name=nome/>
 	</tr>
 	
 	<tr>
			<td>
			<label for="sobrenome"><b><i>Sobrenome:</i></b> </label>
            </td>
            <td align="left">
			<input id="sobrenome" type=text required name=sobrenome/>

	</tr>

	<tr>
		<td>
		<label for="email"><b><i>Email:</i></b> </label>
		</td>
		<td align="left">
			<input id="email" type=text required name=email/>
		</td>
	</tr>
  
	<tr>
		<td>
		<label><b><i>Idade:</i></b> </label>
		</td>
		<td align="left">
		<input type="text" name="Idade" size="2" maxlength="2">
		</td>
	</tr>
  
	<tr>
		<td>
		<label for="rg"><b><i>RG:</i></b> </label>
		</td>
		<td align="left">
		<input type="text" name="rg" size="13" maxlength="13"> 
		</td>
	</tr>

	<tr>
		<td>
		<label for="rg"><b><i>Tipo de Pessoa:</i></b> </label>
		</td>
		<td align="left">
		<input name="tipo" type="radio" value="Pessoa Física" /> Pessoa Física
		<input name="tipo" type="radio" value="Pessoa Jurídica" /> Pessoa Jurídica
		</td>
	</tr>
 
	<tr>
		<td>
		<label><b><i>CPF:</i></b></label>
		</td>
		<td align="left">
		<input type="text" id="cpf" size="9" maxlength="11">
		</td>
	</tr>
  
	<tr>
		<td>
		<label><b><i>CNPJ:</i></b></label>
		</td>
		<td align="left">
		<input type="text" id="cnpj" size="14" maxlength="14">
		</td>
	</tr>
 
</table>
</fieldset>
<br />


<fieldset>
<legend><font face="Calibri" size="10" color="Black">Endereço</font></legend>
<table cellspacing="12" bgcolor="lightgray">
	<tr>
		<td>
		<label for="rua"><b><i>Logradouro:</i></b></label>
		</td>
		<td align="center">
		<input type="text" name="rua">
		</td>
			<td>
			<label for="numero">N</i></b></label>
			</td>
			<td align="center">
			<input type="text" name="numero" size="4">
			</td>
	</tr>
  
	<tr>
		<td>
		<label for="bairro"><b><i>Bairro:</i></b> </label>
		</td>
		<td align="left">
		<input type="text" name="bairro">
		</td>
	</tr>
	
	<tr>
		<td>
		<label for="cidade"><b><i>Municipio:</i></b> </label>
		</td>
		<td align="left">
		<input type="text" name="cidade">
		</td>
	</tr>
  
	<tr>
		<td>
		<label for="estado"><b><i>UF:</i></b></label>
		</td>
		<td align="left">
		<select name="estado"> 
		<option value="ac">AC</option>
		<option value="al">AL</option>
		<option value="am">AM</option>
		<option value="ap">AP</option>
		<option value="ba">BH</option>
		<option value="ce">CE</option>
		<option value="df">DF</option>
		<option value="es">ES</option>
		<option value="go">GO</option>
		<option value="ma">MA</option>
		<option value="mt">MT</option>
		<option value="ms">MS</option>
		<option value="mg">MG</option>
		<option value="pa">PA</option>
		<option value="pb">PB</option>
		<option value="pr">PR</option>
		<option value="pe">PE</option>
		<option value="pi">PI</option>
		<option value="rj">RJ</option>
		<option value="rn">RN</option>
		<option value="ro">RO</option>
		<option value="rs">RS</option>
		<option value="rr">RR</option>
		<option value="sc">SC</option>
		<option value="se">SE</option>
		<option value="sp">SP</option>
		<option value="to">TO</option>
		</select>
		</td>
	</tr>
</table>
</fieldset> 
<br>

<fieldset>
<table>
	<tr>
		<td height="30"></td>
		<td>
        <input name="Submit" type="submit"  value="Enviar">
		<input name="Reset" type="reset" value="Apagar">
		</td>
    </tr>
</table>
</fieldset>

</form>
</body>

</html>
