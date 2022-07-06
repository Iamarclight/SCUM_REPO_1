<?php
$html_template = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="redirectx()">
    <script>
        alert("hey");
        function redirectx(){
            location.href = "main.py";
        }
    </script>
</body>
</html>'
echo $html_template;


?>