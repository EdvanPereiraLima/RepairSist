<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css-padrao/css-padrao.css">
    <title>Tela Login Teste</title>
   <style>
        body{
            background-image:url('imagens/Index1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>    

</head>
<body>
    
<div class="mt-5 form-gruop ">
        <div class="w-50 col-8 mx-auto bg-dark ">
            <h1 class="text-center text-light">Bem-Vindo</h1>
            <h2 class="text-center text-light">Villar Car Web</h2>

            <form action="" method="POST" id="login">
                <div class="form-row col-8 lg-2 mx-auto mt-5 mb-5">
                <!-- tamanho do conteiner cinza -->
                    <label class="lead col-4 text-light" for="">Usuário ou Email</label>
                    <input class="form-control col-8" type="text" placeholder="Digite aqui seu email ou usuário" name="user" id="usuario">
                    <div class="col-4"></div>
                    <div class="invalid-feedback d-none col-8" id="userErro">Por favor, digite seu email ou nome de usuário.</div>
                </div>

                <div class="form-row col-8 lg-2 mx-auto mt-5 mb-5 ">
                    <label class="lead col-4 text-light" for="">Senha</label>
                    <input class="form-control col-8" type="password"
                     placeholder="Digite aqui sua senha" name="pass" id="senha">
                    <div class="col-4"></div>
                    <div class="invalid-feedback d-none col-8" id="passErro">Por favor, digite sua senha.</div>
                </div>

                <div class="form-row col-5 lg-2 mx-auto mt-5 mb-5 ">
                    <input class="form-control btn-outline-primary col-4 mx-auto" type="submit" value="ENTRAR">
                    <div class="invalid-feedback d-none col-5" id="loginErro">Usuário ou senha invalida</div>
                </div>
                <div>
                    <a class="text-white bg-dark lead text-center" href="#">Esqueci minha senha</a>
                   
                </div>
                    <a class="text-white bg-dark lead text-center" href="#">Cadastra-se</a>
                <div>


                </div>

            </form>
        </div>

    </div>






    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>
