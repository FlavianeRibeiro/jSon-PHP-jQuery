<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-S">
        <link rel="icon" type="favicon.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Tutorial</title>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </head>
    <body onload="carregarLivros()">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lista de Livro</h1>
                    <h2></h2>
                    <table id="minhaTabela" class="table table-bordered">
                        <thead>
                            <tr>
                              <th scope="col">Codigo</th>
                              <th scope="col">Nome</th>
                              <th scope="col">Autor</th>
                              <th scope="col">Valor</th>
                              <th scope="col">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>