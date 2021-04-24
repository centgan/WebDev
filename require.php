<?php
    session_start();
    $curdate = date("Y-m-d");

    $dbc = mysqli_connect('localhost', 'webuser', 'webuser', 'Web') OR die (mysqli_connect_error());
    mysqli_set_charset($dbc, 'utf-8');
    
    $sql = "SELECT * FROM clients WHERE Date = '".$curdate."'";
    $result = $dbc->query($sql);
    $numrows = $result->num_rows;
    
    //$myfile = "Info.json";
    $arrays = array();

    if ($numrows > 0){
        for ($x = 1; $x <= $numrows; $x++){
            $row = $result->fetch_assoc();
            $time = substr($row["Time"], 0, -3);
            $username = $row["Username"];
            $pin = $row["Pin"];
            // $dbdata = [
            //     "Time"=> $time,
            //     "Username"=> $username,
            //     "Pin"=> $pin
            // ];
            array_push($arrays, $time, $username, $pin);
        }
        // $jsonencode = json_encode($arrays, JSON_PRETTY_PRINT);
        // if(file_put_contents($myfile, $jsonencode)){
            //     echo "Success";
            // }else {
                //     echo "error";
                // }
    }
    $numarraydivided = sizeof($arrays)/3;
    $cssassign = array(
        "one" => "none",
        "two" => "none",
        "three" => "none",
        "four" => "none",
        "five" => "none",
        "six" => "none",
        "seven" => "none",
        "eight" => "none",
        "nine" => "none",
        "ten" => "none",
        "eleven" => "none",
        "twelve" => "none",
        "thirteen" => "none",
        "fourteen" => "none",
        "fifteen" => "none",
        "sixteen" => "none"
    );
    function numdict($num) {
        $worddict = array(
            "one" => 1,
            "two" => 2,
            "three" => 3,
            "four" => 4,
            "five" => 5,
            "six" => 6,
            "seven" => 7,
            "eight" => 8,
            "nine" => 9,
            "ten" => 10,
            "eleven" => 11,
            "twelve" => 12,
            "thirteen" => 13,
            "fourteen" => 14,
            "fifteen" => 15,
            "sixteen" => 16
        );
        return $worddict[$num];
    }
    foreach($cssassign as $name => $var){
        $number = numdict($name);
        if ($number <= $numarraydivided){
            $cssassign[$name] = "";
        }
    }
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
    body{
        background-color: cyan;
        margin: 0;
        padding: 0;
    }
    h1{
        text-align: center;
        color: darkblue;
    }
    .container{
        text-align: center;
    }
    .firstbut{
        background: white;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        margin: 10px;
        border-radius: 8px;
    }
    #one{
        display: <?php echo $cssassign["one"]?>;
    }
    #two{
        display: <?php echo $cssassign["two"]; ?>;
    }
    #three{
        display: <?php echo $cssassign["three"]; ?>;
    }
    #four{
        display: <?php echo $cssassign["four"]; ?>;
    }
    #five{
        display: <?php echo $cssassign["five"]; ?>;
    }
    #six{
        display: <?php echo $cssassign["six"]; ?>;
    }
    #seven{
        display: <?php echo $cssassign["seven"]; ?>;
    }
    #eight{
        display: <?php echo $cssassign["eight"]; ?>;
    }
    #nine{
        display: <?php echo $cssassign["nine"]; ?>;
    }
    #ten{
        display: <?php echo $cssassign["ten"]; ?>;
    }
    #eleven{
        display: <?php echo $cssassign["eleven"]; ?>;
    }
    #twelve{
        display: <?php echo $cssassign["twelve"]; ?>;
    }
    #thirteen{
        display: <?php echo $cssassign["thirteen"]; ?>;
    }
    #fourteen{
        display: <?php echo $cssassign["fourteen"]; ?>;
    }
    #fifteen{
        display: <?php echo $cssassign["fifteen"]; ?>;
    }
    #sixteen{
        display: <?php echo $cssassign["sixteen"]; ?>;
    }

</style>

<body>
    <h1>Welcome! Please select the button with that has your name on it</h1>
    <script type = "text/JavaScript">
        function Sender(info){
            localStorage.setItem("pin", info);
            window.location.href = "pin.php";
        }
    </script>
    <h1 id = "hello"></h1>
    <div class = "container">
        <a href = pin.php><button class = "firstbut" id = "one" onclick = "Sender(<?php echo $arrays[2]?>)"> <?php echo $arrays[1]?> <br> <?php echo $arrays[0]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "two" onclick = "Sender(<?php echo $arrays[5]?>)"> <?php echo $arrays[4]?> <br> <?php echo $arrays[3]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "three" onclick = "Sender(<?php echo $arrays[8]?>)"> <?php echo $arrays[7]?> <br> <?php echo $arrays[6]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "four" onclick = "Sender(<?php echo $arrays[11]?>)"> <?php echo $arrays[10]?> <br> <?php echo $arrays[9]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "five" onclick = "Sender(<?php echo $arrays[14]?>)"> <?php echo $arrays[13]?> <br> <?php echo $arrays[12]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "six" onclick = "Sender(<?php echo $arrays[17]?>)"> <?php echo $arrays[16]?> <br> <?php echo $arrays[15]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "seven" onclick = "Sender(<?php echo $arrays[20]?>)"> <?php echo $arrays[19]?> <br> <?php echo $arrays[18]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "eight" onclick = "Sender(<?php echo $arrays[23]?>)"> <?php echo $arrays[22]?> <br> <?php echo $arrays[21]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "nine" onclick = "Sender(<?php echo $arrays[26]?>)"> <?php echo $arrays[25]?> <br> <?php echo $arrays[24]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "ten" onclick = "Sender(<?php echo $arrays[29]?>)"> <?php echo $arrays[28]?> <br> <?php echo $arrays[27]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "eleven" onclick = "Sender(<?php echo $arrays[32]?>)"> <?php echo $arrays[31]?> <br> <?php echo $arrays[30]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "twelve" onclick = "Sender(<?php echo $arrays[35]?>)"> <?php echo $arrays[34]?> <br> <?php echo $arrays[33]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "thirteen" onclick = "Sender(<?php echo $arrays[38]?>)"> <?php echo $arrays[37]?> <br> <?php echo $arrays[36]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "fourteen" onclick = "Sender(<?php echo $arrays[41]?>)"> <?php echo $arrays[40]?> <br> <?php echo $arrays[39]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "fifteen" onclick = "Sender(<?php echo $arrays[44]?>)"> <?php echo $arrays[43]?> <br> <?php echo $arrays[42]?></button></a>
        <a href = pin.php><button class = "firstbut" id = "sixteen" onclick = "Sender(<?php echo $arrays[47]?>)"> <?php echo $arrays[46]?> <br> <?php echo $arrays[45]?></button></a>
    </div>
</body>
</html>