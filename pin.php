<?php
    session_start();
    $tst = $_SESSION["tester"];
    echo $tst;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #headerone{
        text-align: center;
    }
    #okay{
        text-align: center;
        padding: 100px;
    }
</style>
<body>
    <h1 id = "headerone">Enter the pin that was provided to you</h1>
    <script type = "text/JavaScript">
        // window.onload {
        //     var test = 1;
        //     document.getElementById("hello").innerHTML = sessionStorage.getItem("favourite");
        // }
        function validateForm(){
            var x = document.forms["pinform"]["pin"].value;
            var realpin = localStorage.getItem("pin");
            if (parseInt(x) !== parseInt(realpin)){
                alert("That is the incorrect pin. Please try again")
                return false;
            } else if (x == ""){
                alert("Pin must be entered");
                return false;
            } else {
                alert("Thank you for ")
                localStorage.clear();
            }
            // var fav = seesionStorage.getItem("fav");
            // document.getElementById("whoknows").innerHTML = fav;
        }
        
    </script>
    <h1 id = "hello"></h1>
    <form method = "POST" action = "require.php" name = "pinform" required onsubmit = "return validateForm()">
        <pre> Pin: <input type = "number" name = "pin"> </pre>
        <input type = "submit" value = "Next">
    </form>
</body>
</html>