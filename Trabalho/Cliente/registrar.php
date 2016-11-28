<!Doctype html>
<head>

</head>

<body>
<form action="Registrando.php" method="POST">



    <br><br>

    <label for="name">Nome: </label>
    <input type="text" name="" id="name" required>


    <br><br>

    <label for="password">Senha: </label>
    <input type="password" name="password" id="senha" required>

    <br><br>

    <label for="email">E-mail: </label>
    <input type="text" name="email" id="email" required>

    <br><br>

    <div class="group">
        <label class="radio" for="gener_m">Masculino </label>
        <input type="radio" name="genero" id="gener_m" value="m">

    </div>

    <div class="group">
        <label class="radio" for="gener_f">Feminino </label>
        <input type="radio" name="genero" id="gener_f" value="f">

    </div>

    <br><br>

    <label for="birthdate">Data de Nascimento: </label>
    <input type="date" name="birthdate" id="birthdate" required>

    <br><br>

    <input type="submit" value="Cadastrar">

</form>


</form>


</body>



    </html>