<!DOCTYPE html>  <!--view  Calculo.php -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculo de Sálario</title>
</head>
<body>
    <h1 class="display-2 border border-primary border-4">Calculadora de Salário Líquido</h1>
    <br>
    <br>
    <form class="border border-primary border-3" action="<?php echo URL_BASE."sal/inss/" ?>" method="post">
        <div class="row">
            <div class=" col mb-3">

                <label class="fs-3" for="funcionario" class="form-label">Funcionário:</label> 
                <input type="text" class="form-control fs-5" name="b" value= "<?php echo isset($b) ? $b : "" ?>">
            </div>

            <div class="col mb-3">
                <label class="fs-3" for="salario" class="form-label">Salário:</label>
                <input type="text" class="form-control fs-5" name="a" value= "<?php echo isset($a) ? $a : "" ?>">
            </div>



            <br>

            
        </div>
        <input type="submit" class="btn btn-outline-success fs-5"value="Calcular">
        


    </form>
    <?php

    if(isset($resultado)){
      echo "<h3 class='display-6'>{$b} o seu salário Líquido é: {$resultado} </h3>";
    } else {
        $resultado = "";
    } 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>