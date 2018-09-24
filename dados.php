<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirmação de Dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<style>
    #formulario form > input {
        background-color: rgb(59, 153, 67);
    }

    h3 {
        background-color: rgb(153, 59, 59);
    }

    #formulario form #nome, #user, #question, #pretencao {
        outline-color: rgb(153, 59, 59);
    }
</style>

<body>
	<header>
		<h3>Confirmação de Dados</h3>
	</header>
	<section id="formulario">
		<form action="#" method="POST">
			<label id="lnome" for="nome">
				<h3>Nome Completo</h3>
				<input type="text" name="nome" id="nome" value="<?= $_POST['nome']?>">
			</label>
			<label id="luser" for="user">
				<h3>Usuário</h3>
				<input type="text" name="user" id="user" value="<?= $_POST['user']?>">
			</label>
			<label id="lquestion" for="question">
				<h3>Perfil</h3>
				<textarea name="question" id="question" placeholder="Descreva seu perfil profissional..."><?= $_POST['question']?></textarea>
			</label>
			
			<label id="lpretencao" for="pretencao">
				<h3>Prentenção Salarial	</h3>
				<select name="pretencao" id="pretencao">
                    <option value="0" <?= $_POST['pretencao']=='0'?'selected':'';?>></option>
					<option value="1" <?= $_POST['pretencao']=='1'?'selected':'';?>>1000-1500</option>
					<option value="2" <?= $_POST['pretencao']=='2'?'selected':'';?>>1500-2000</option>
					<option value="3" <?= $_POST['pretencao']=='3'?'selected':'';?>>2000-2500</option>
					<option value="4" <?= $_POST['pretencao']=='4'?'selected':'';?>>2500-3000</option>
					<option value="5" <?= $_POST['pretencao']=='5'?'selected':'';?>>3000+</option>
				</select>
			</label>
	
			<label id="lsexo">
				<h3>Sexo</h3>
				<label for="n">
					<input type="radio" name="sexo" id="n" value="n" <?= $_POST['sexo']=='n'?'checked':'';?>>
					<h5>Não Informar</h5>
				</label>
				
				<label for="m">
					<input type="radio" name="sexo" id="m" value="m" <?= $_POST['sexo']=='m'?'checked':'';?>>
					<h5>Masculino</h5>
				</label>
				
				<label for="f">
					<input type="radio" name="sexo" id="f" value="f" <?= $_POST['sexo']=='f'?'checked':'';?>>
					<h5>Feminino</h5>
				</label>
			</label>
	
			<label id="lescolaridade">
				<h3>Escolaridade</h3>
				<label for="fundamental">
					<input type="radio" name="escolaridade" id="fundamental" value="fundamental" <?= $_POST['escolaridade']=='fundamental'?'checked':'';?>>
					<h5>Fundamental</h5>
				</label>
				
				<label for="medio-incompleto">
					<input type="radio" name="escolaridade" id="medio-incompleto" value="medio-incompleto" <?= $_POST['escolaridade']=='medio-incompleto'?'checked':'';?>>
					<h5>Médio Incompleto</h5>
				</label>
	
				<label for="medio">
					<input type="radio" name="escolaridade" id="medio" value="medio" <?= $_POST['escolaridade']=='medio'?'checked':'';?>>
					<h5>Médio</h5>
				</label>
	
				<label for="superior-incompleto">
					<input type="radio" name="escolaridade" id="superior-incompleto" value="superior-incompleto" <?= $_POST['escolaridade']=='superior-incompleto'?'checked':'';?>>
					<h5>Superior Incompleto</h5>
				</label>
	
				<label for="superior">
					<input type="radio" name="escolaridade" id="superior" value="superior" <?= $_POST['escolaridade']=='superior'?'checked':'';?>>
					<h5>Superior</h5>
				</label>
			</label>
	
			<label id="linteresses">
				<h3>Interesses</h3>
				<label for="economia">
					<input type="checkbox" name="economia" id="economia" <?= isset($_POST['economia'])?'checked':'';?>>
					<h5>Economia</h5>
				</label>
				<label for="turismo">
					<input type="checkbox" name="turismo" id="turismo" <?= isset($_POST['turismo'])?'checked':'';?>>
					<h5>Turismo</h5>
				</label>
				<label for="esporte">
					<input type="checkbox" name="esporte" id="esporte" <?= isset($_POST['esporte'])?'checked':'';?>>
					<h5>Esporte</h5>
				</label>
				<label for="tecnologia">
					<input type="checkbox" name="tecnologia" id="tecnologia" <?= isset($_POST['tecnologia'])?'checked':'';?>>
					<h5>Tecnologia</h5>
				</label>
				<label for="politica">
					<input type="checkbox" name="politica" id="politica" <?= isset($_POST['politica'])?'checked':'';?>>
					<h5>Política</h5>
				</label>
				<label for="cinema">
					<input type="checkbox" name="cinema" id="cinema" <?= isset($_POST['cinema'])?'checked':'';?>>
					<h5>Cinema</h5>
				</label>
			</label>
	
			<input id="button" type="submit" value="Confirmar Envio">
	
		</form>
	</section>
	<footer>
		<h3>Chireia &copy;</h3>
	</footer>
</body>
</html>


