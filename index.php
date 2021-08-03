<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
       p{
           color:purple;
           
       }
     
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        h1 {
            color: purple;
            margin-top:40%;
            padding-left:60px;
        }
        
        h3 {
            color: salmon;
            padding-left:40px;
        }
        
        .card {
            margin-top: 15vh;
           
        }
        
        p{
            font-size:1.5em;
          
        }
        
        body {
            background-color: tomato;
            font-family:verdana;
        }
        
        .left {
            border-left: 5px solid purple;
        }
        label{
            color:purple;
            font-size:20px;
            
        }
        .btn{
            background-color:purple;
            color:white;
            padding:6px;
        }
    </style>
</head>
<div class="container">
    <div class="card p-5 shadow-lg rounded">
        <div class="row">
            <div class="col-sm-12 col-md-6 left zoom">
                <h1>MG</h1>
                <h3>Calculator</h3>
            </div>
            <div class="col-sm-12 col-md-6">
                <form method="POST">
                    <div class="mb-3">
                        <label for="number-1" class="form-label">Enter First No.</label>
                        <input type="text" class="form-control" id="number-1 " name="num1">
                        <label for="number-2" class="form-label">Enter Second No.</label>
                        <input type="text" class="form-control" id="number-2" name="num2">

                    </div>
                    <select class="form-select" aria-label="Default select example" name="opeartion">
                        <option selected>Select Operation</option>
                        <option value="add">Addition</option>
                        <option value="sub">Subtraction</option>
                        <option value="div">division</option>
                        <option value="mul">Multiplication</option>
                      </select>
                      <input type="submit" class="mt-5 btn btn-lg" name="submit" value="submit">
                    </form>
            </div>
        </div>
        <p class="mt-5"> <?php
        if (isset ($_POST['submit'])){
            $num1  = $_POST['num1'];
            $num2  = $_POST['num2'];
            $opeartion = $_POST['opeartion'];
            switch($opeartion){
                case "add":$sum = $num1 + $num2;
                echo "The addition of number is {$sum}";
                break;
                case "sub":$sum = $num1 - $num2;
                echo "The subtraction of number is {$sum}";
                break;
                case "div":$sum = $num1 / $num2;
                echo "The division of number is {$sum}";
                break;
                case "mul":$sum = $num1 * $num2;
                echo "The multliplication of number is {$sum}";
                break;
                default : echo"Invalid Operand";
            }
        }
  
        ?>
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>