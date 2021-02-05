<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="style.css">
	<title>Formulário</title>
</head>
<body>	
    
    <main>
        <form action="infor.php" method="POST">
        <fieldset>
            <legend>Conta</legend>
            <div>
                <label>Nome de Usuário:</label>
                <input type="text" placeholder="Digite seu nome" name="user" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div>
                <label>Digite sua senha: </label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>
        </fieldset>

        <fieldset>
            <legend>Dados Pessoais</legend>
            <div>
                <label>Nome Completo:</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div>
            <div>
                <label>Telefone:</label>
                <input type="tel" name="telefone" placeholder="(00) 00000-0000" required>
            </div>
            <div>
                <label>CPF: </label>
                <input type="text" name="cpf" placeholder="000.000.000-00" required>
            </div>
            <div>
                <label>Sexo: </label>
                <input type="radio" name="sexo" value="Masculino" checked><label>Masculino</label>
                <input type="radio" name="sexo" value="Feminino"><label>Feminino</label>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Endereço</legend>
            <div>
                <label>Estado: </label>
                <select name="estado" >
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="DF">Distrito Federal</option>
                </select>
            </div>
            <div>
                <label>Cidade: </label>
                <input type="text" name="cidade" placeholder="Digite o nome da cidade" required>
            </div>
            <div>
                <label>Rua: </label>
                <input type="text" name="rua" placeholder="Digite o nome da rua" required>
            </div>
            <div>
                <Label>Número: </Label>
                <input type="number"  name="num" min="0" max="5000" required>
            </div>
        </fieldset>
        <button type="submit">Enviar</button>
        </form> 
    
    </main>
    
    <footer>
    </footer>
</body>
</html>