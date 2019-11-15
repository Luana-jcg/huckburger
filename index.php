
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
    <title>Huck Burger</title>    
  </head>

  <body>
    <center>Huck Burger</center>
    <div class="container-fluid">

      <div class="container-fluid float-left" id="main">

        <!------ Início Conteúdo ----->
        <div class="row d-flex justify-content-center h-100">
          <div class="card h-50">

            <div class="card-body">
              <form id="cadastrar" action="_cadastrar.php" method="post">
                
                <label for="">Nome</label>
                <input name="nome" class="form-control" required type="text">
                
                <label for="">Telefone</label>
                <input name="telefone" class="form-control" required maxlength="12" pattern="[0-9]{2} [0-9]{4}-[0-9]{4}" OnKeyPress="formatar('## ####-####', this)">
    
                <strong class="d-block">Monte seu lanche:</strong>            
                <label for="">Ponto da carne:</label>
                <input type="radio" name="pontodacarne" required value="MalPassada"> Mal passada
                <input type="radio" name="pontodacarne" required value="AoPonto"> Ao ponto<br><br>
                
                <label for="">Pão</label>
                <select class="form-control" class="d-block" name="pao" required id="">
                    <option value="">Brioche</option>
                    <option value="">Australiano</option>
                    <option value="">Integral</option>
                    <option value="">Alho e orégano</option>
                    <option value="">Italiano com ervas</option>
                </select>
                
                <label for="">Queijo</label>
                <select class="d-block form-control" name="queijo" required id="">
                    <option value="cheddar">Cheddar</option>
                    <option value="prato">Prato</option>
                    <option value="suico">Suíço</option>
                    <option value="muçarela">Muçarela</option>
                    <option value="semqueijo">Sem queijo</option>
                </select>
                
                <label for="">Observações</label>
                <textarea type="text" name="observacoes" class="form-control"></textarea>
                
                <input type="submit" class="btn btn-primary float-right mt-4" value="enviar">
              </form>
            </div>

          </div>
        </div>
        <!------ Fim Conteúdo ----->
          

      </div>
      
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script>
        //Máscara telefone
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i);

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>