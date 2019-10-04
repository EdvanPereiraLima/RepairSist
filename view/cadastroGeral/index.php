<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css-padrao/css-padrao.css">
    <title>Cadastro Geral</title>

<style>
body{
    background-color:#696969;
    /* cor de fundo do site */
}

</style>

</head>
<body>
    
<?php

include_once "../cabecalhos/Nav.php";

?>

<h1 class="text-center text-light">Cadastro Geral</h1>

<form class="container bg-light mb-5">
<!-- cria um espaço no canto das telas -->

    <!-- tamanho da bordar da linha em volta as informaçoes -->
   <fieldset  class="border p-2">
    
   <legend  class="w-auto">Dados Cadastrais</legend>

  <div class="form-row ">

        <!-- div abre form-row -->

     <div class="form-group col-md-4">
         <label for="">Placa</label>
         <input type="text" class="form-control" id="placa" placeholder="Exemplo:ADD/4444">
      </div>

        <div class="form-group col-md-4">
          <label for="">Modelo</label>
          <input type="text" class="form-control" id="modelo" placeholder="">
        </div>
     <!-- cria um input com opçoes -->
        <div class="form-group col-md-2">
          <label for="">Montadora</label>
          <select id="montadora" class="form-control">
          <option selected>Escolher...</option>
          <option>...</option>
          </select>
       </div>

     <div class="form-group col-md-2">
         <label for="">Ano/Modelo</label>
         <input type="text" class="form-control" id="anoModelo" placeholder="Exemplo: 2000/Edx">
      </div>

  </div>
  <!-- div fecha form -->

  <div class="form-row ">
        <!-- div abre form-row -->

        <div class="form-group col-md-4">
            <label for="">Cor</label>
             <select id="cor" class="form-control">
             <option selected>Escolher...</option>
             <option>...</option>
             </select>
     </div>

      <div class="form-group col-md-4">
            <label for="">Chassi</label>
            <input type="text" class="form-control" id="" placeholder="">
     </div>

        <!-- cria um input com opçoes -->
      <div class="form-group col-md-2">
            <label for="">Alarme</label>
            <select id="alarme" class="form-control">
            <option selected>Escolher...</option>
            <option>Sim</option>
            <option>Não</option>
            </select>
      </div>

        <div class="form-group col-md-2">
             <label for="">Rastreador</label>
             <select id="rastreador" class="form-control">
            <option selected>Escolher...</option>
             <option>Sim</option>
             <option>Não</option>
            </select>
      </div>
  </div>
  <!-- fecha form-row -->

  <div class="form-row ">
        <!-- abre form-row -->

       <div class="form-group col-md-4">
             <label for="">Cliente</label>
             <input type="text" class="form-control" id="cliente" placeholder="">
     </div>
        <!-- tentar arrumar o radionbutton -->
        <div class="form-group col-md-4">
            <label for="">Tipo</label>
            <select id="" class="form-control">
            <option selected>Escolher...</option>
            <option>Pessoa Juridica</option>
            <option>Pessoa Fisica</option>
            </select>
      </div>


      <div class="form-group col-md-4">
          <label form="inputSobrenome">CPF</label>
          <input type="text" class="form-control" id="" placeholder="___.___.___.__">
      </div>
  </div>

  <div class="form-row">
        <!-- abre div form-row -->
      <div class="form-group col-md-12">
         <label form="inputSobrenome">Email</label>
         <input type="text" class="form-control" id="" placeholder="">
     </div>

        <div class="form-group col-sm-4">
            <label form="inputSobrenome">Data de Nascimento</label>
            <input type="text" class="form-control" id="" placeholder="___/___/___">
      </div>
        
        <div class="form-group col-sm-4">
            <label form="inputSobrenome">Telefone Fixo</label>
            <input type="text" class="form-control" id="" placeholder="(__)_____-____">
      </div>

     <div class="form-group col-sm-4">
         <label for="" >Telefone Celular</label>
         <input type="email" class="form-control" name="" id="" placeholder="(__)_____-____" >
     </div>
    

    </div>
    <!-- fecha form-row -->

    <div class="form-row">
        <!-- abre div form-row -->
        <div class="form-group col-sm-2">
            <label form="inputCEP">Seu CEP</label>
            <input type="text" id="inputCEP" class="form-control" placeholder="CEP">    
      </div>

        <a class="ml-1 my-4" href="#"><img src="../../imagens/Correios.bmp" alt="Mensagem"></a>
        <div class="form-group col-lg-9 col-sm-8">
   
           <label form="inputEnd" class="ml-2">Seu Endereço</label>
            <input type="text" class="form-control ml-3" id="inputEnd" placeholder="Endereço">
        </div>
    
    </div>
    <!-- div fechar form-row -->

    <div class="form-row">
    
      <div class="form-group col-sm-2">
             <label form="">Numero</label>
             <input type="text" id="inputNumero" class="form-control" placeholder="Numero">    
      </div>

      <div class="form-group col-sm-5 ">
            <label form="">Bairro</label>
            <input type="text" id="inputCEP" class="form-control" placeholder="Bairro">    
      </div>
    
      <div class="form-group col-sm-5">
            <label form="">Cidade</label>
            <input type="text" id="inputCEP" class="form-control" placeholder="Cidade">    
     </div>

    </div>

<br>
    <fieldset  class="border p-3">
    
        <legend  class="h2">Dados Seguradoras</legend>
 
        <div class="form-row">
        
            <div class="form-group col-md-3">
                <label for="">Tipo de Atendimento</label>
                <select id="" class="form-control">
                <option selected>Escolher...</option>
                <option></option>
                <option></option>
                </select>
          </div>

          <div class="form-group col-md-3">
               <label for="">Cia Seguros</label>
                <select id="" class="form-control">
                <option selected>Escolher...</option>
                <option></option>
                <option></option>
                </select>
          </div>

           <div class="form-group col-md-3 col-sm-4">
                <label form="inputCEP">Sinistro</label>
                <input type="text" id="" class="form-control" placeholder="">    
            </div>

          <div class="form-group col-md-3">
                <label form="inputCEP">Franquia</label>
                <input type="text" id="" class="form-control" placeholder="">    
          </div>

        </div>

        <fieldset  class="border p-3">
    
        <legend  class="h3">Observações</legend>

        <div class="form-row">
    
         <div class="form-group col-md-8">
                <label for=""></label>
                <textarea class="form-control " id="" rows="4" placeholder="Digite algum comentario aqui"></textarea>
         </div>
      </div>

    </fieldset>


    <div class="form-row">
        <div class="form-group col-md-3 col-sm-4">
            <label form="inputCEP">Cad</label>
            <input type="text" id="" class="form-control" placeholder="">    
        </div>

        <div class="form-group col-md-3 col-sm-4">
            <label form="inputCEP">Data</label>
            <input type="text" id="" class="form-control" placeholder="">    
        </div>
    
        <div class="form-group col-md-3 col-sm-4">
            <label form="inputCEP">Alt</label>
            <input type="text" id="" class="form-control" placeholder="">    
        </div>

        <div class="form-group col-md-3 col-sm-4">
            <label form="inputCEP">Data</label>
            <input type="text" id="" class="form-control" placeholder="">    
        </div>
    
    </div>

    <br>
    <br>
    <div class="form-row">

        <div class="form-group col-sm-8 ">
  
         <a class="ml-1 my-4" href="#"><img src="../../imagens/Adicionar.png" alt="Mensagem" title="Adicionar"></a>
         <a class="ml-1 my-4" href="#"><img src="../../imagens/Editar.png" alt="Mensagem"  title="Editar"></a>
         <a class="ml-1 my-4" href="#"><img src="../../imagens/Cancelar.png" alt="Mensagem" title="Cancelar"></a>
         <a class="ml-1 my-4" href="#"><img src="../../imagens/Salvar.bmp" alt="Mensagem"  title="Salvar"></a>
         <a class="ml-1 my-4" href="#"><img src="../../imagens/icone Imagem.jpg" alt="Mensagem"
          style="width:57; height:57px;"  title="Imagens"></a>

        </div>
  </div>

  </fieldset>
</form>




    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>


</body>
</html>