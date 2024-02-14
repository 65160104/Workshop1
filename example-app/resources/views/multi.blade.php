<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        #container {
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #output {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
        input[type="number"], button {
            padding: 8px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }
        input[type="number"]:focus, button:focus {
            outline: none;
        }
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div id="container">
        <h1>Multiplication Table Generator</h1>
        <input type="number" id="numberInput" placeholder="Enter a number">
        <button id="generateBtn">Generate Table</button>
        <div id="output"></div>
    </div>

    <script>
    $(document).ready(function(){
        $('#generateBtn').click(function(){
            var num = $('#numberInput').val();
            if(!isNaN(num) && num !== ""){
                $('#output').empty();
                var table = '<h2>Multiplication Table for ' + num + '</h2><ul>';
                for(var i = 1; i <= 10; i++){
                    table += '<li>' + num + ' x ' + i + ' = ' + (num * i) + '</li>';
                }
                table += '</ul>';
                $('#output').append(table);
            }
            else {
                alert("Please enter a valid number.");
            }
        });
    });
    </script>
</body>
</html>
