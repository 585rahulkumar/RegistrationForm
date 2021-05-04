<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
    This is my first php website
    <?php
    define('pi',3.14);
        echo "Hello world and this is printed using php";
        //single line comment
        /*
        This 
        is 
        a
        multiline 
        comment
        */
        // Lorem, ipsum dolor.
        // Lorem ipsum dolor sit.
        // Lorem ipsum dolor sit amet.

        $variable1=7;
        $variable2=2;
        echo $variable1;
        echo $variable2;
        echo $variable1+$variable2;
        // Operators in PHP

        // Arithmetic Operators
        echo "<br>";
        echo "The value of variable1 + variable2 is ";
        echo $variable1+$variable2;
        echo "<br>";
        echo "The value of variable1 - variable2 is ";
        echo $variable1-$variable2;
        echo "<br>";
        echo "The value of variable1 * variable2 is ";
        echo $variable1*$variable2;
        echo "<br>";
        echo "The value of variable1 / variable2 is ";
        echo $variable1/$variable2;
        echo "<br>";

        // Assignment Operators
        $newvar=$variable1;
        $newvar+=1;
        echo "The value of newvar is";
        echo $newvar;
        echo "<br>";

        // Comparison Operators
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        // Increment/Decrement Operators
        echo $variable1++;
        echo "<br>";
        echo $variable2--;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo --$variable2;
        echo "<br>";

        // Logical Operators
        // and (&&)
        // or (||)
        // xor
        // !
        $myvar=(true and false);
        echo var_dump($myvar);
        echo "<br>";
        $myvar=(true or false);
        echo var_dump($myvar);
        echo "<br>";

    ?>

    <?php
        // Data Types in php
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object
        echo "Data types";
        echo "<br>";
        $var="This is a string";
        echo var_dump($var);
        echo "<br>";

        $var=46;
        echo var_dump($var);
        echo "<br>";

        $var=46.1;
        echo var_dump($var);
        echo "<br>";

        $var=true;
        echo var_dump($var);
        echo "<br>";

        echo pi;




    ?>
    </div>
    
</body>
</html>