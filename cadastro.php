<html>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    <container>
        <div class="boxCadastro">
            <h2>Cadastre-se</h2>
            <form action="config/cadastro.php" method="post">
                <div class="mb-3">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome"/>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email"/>
                </div>
                <div class="mb-3">
                    <label>Data nascimento</label>
                    <input class="form-control" type="date" name="datanasc"/>
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input class="form-control" type="password" name="password"/>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </container>
    </body>
</html>