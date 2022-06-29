<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CME</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/style.css", type="text/css">
</head>


<body>         

    <?php include '../nav.html'; ?>

    <div class="form-box">
        <div class = "form">
            
            <form action="signup.php" method="post">
                <div class = "form-title">
                <h2> Registro Club </h2>
                </div>
                <div class = "form-group">
                    <label> Nombre club:</label>    
                    <input type="text" class = "form-input" name="name" placeholder="Inserta nombre del club" required />
                </div>
                <div class = "form-group"
                    <label> Contraseña:</label>    
                    <input type="password" class = "form-input" name ="password" placeholder="Inserta contraseña" required />
                </div>
                <div class = "form-group"
                    <label> Correo:</label>    
                    <input type="email"  class = "form-input"name="email" placeholder="Inserta tu correo" required/>

                <div class= "form-group">
                    <input type="submit" class = "form-submit" value="Registrar"/>
                </div>
            </form>

        </div>
    </div>
           
</body>
</html>