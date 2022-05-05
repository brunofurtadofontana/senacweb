<html>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    <container>
        <div class="boxLogin">
            <center><img src="https://imagensemoldes.com.br/wp-content/uploads/2020/03/Foto-Nome-PNG-Twitter.png" width="200" height="200" /></center>
            <form action="config/login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" required="required" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" required="required" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    Não possui conta? 
                    <a href="cadastro.php" target="_blank">
                        <label class="form-check-label" for="exampleCheck1">Cadastre-se</label>
                    </a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </container>
    </body>
</html>