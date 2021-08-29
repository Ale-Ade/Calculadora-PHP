<?php
                    if(isset($_POST['operacion'])){
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $op = $_POST['operacion'];

                        if(!empty($num1) || ! empty($num2)){
                            //Si tienen valores entonces es correcto

                            if(is_numeric($num1) && is_numeric($num2)){
                                //Comprobamos que sean números
                              if($op == "+"){
                                //Comprobamos si es una suma
                                //Entonces sumamos los datos
                                $resultado = $num1 + $num2;
                                }else if($op == "-"){
                                    $resultado = $num1 - $num2;
                                }else if($op == "/"){
                                    $resultado = $num1 / $num2;
                                }else if($op == "*"){
                                    $resultado = $num1 * $num2;
                                }else{
                                    $resultado = "Esa no es una operación válida";
                                }  
                            }else{
                                $resultado = "Esos no son números";
                            }
                            
                        }else{
                            $resultado = "Debes de teclear los números";
                        }
                        

                        //var_dump($_POST);
                    }
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="estilos.css">
    <title>Calculadora</title>
</head>
<body>
    
    <div class="container">
        <div class="calc">
            <h2>Calculadora</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="calculadora">
                Digita el primer número:
                <input type="number" name="num1" value="<?php if(isset($_POST['num1'])){echo $_POST['num1'];} ?>" required>
                Digita el segundo número: 
                <input type="number" name="num2" value="<?php if(isset($_POST['num2'])){echo $_POST['num2'];} ?>" required>
                <div class="op">
                    <input type="submit" name="operacion" value="+">
                </div>
                <div class="op">
                    <input type="submit" name="operacion" value="-">
                </div>
                <div class="op">
                    <input type="submit" name="operacion" value="/">
                </div>
                <div class="op">
                    <input type="submit" name="operacion" value="*">
                </div>   
                <h3 class="result">
                    <?php 
                        if(isset($resultado)){
                            echo $resultado;
                        }
                    ?>         
                </h3>
 
                
                
            </form>  
        </div>
    </div>
    

</body>
</html>