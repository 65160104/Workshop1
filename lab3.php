<html >

<head>
    <meta charset="utf-8">
</head>

<body>
<style>
      body{
    background-color: #E4F3D8;
    background-repeat: no-repeat;
      }
    </style>
    
    <center>

    
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
    
    <DIV align=left style=' color: #000000; background-color: #7cfc00; border: solid 2px black; width: 200px; height: 300px; overflow: scroll; '>

        <?php

            $number = 1;
            while ($number<=24){
                $result =  $multi_x * $number;
                
                echo "<Center> $multi_x * $number = $result</Center>";
                echo "<br>";
            
                $number++;
                
            }
            ?>    
        
        
        <tbody>
     </DIV>        
            
        </tbody>
    </table>

    <style>
        
        table {
            
            width: 150px;
            height: 265px;
        }
    </style>
    </center>
</body>

</html>