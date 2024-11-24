<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class car {
        public $color;
        public $model;
        public function _constructor($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function txt()
        {
            return "my car is a ".$this->color." ".$this->model."!";
        }
    }
    $mycar = new car("red","volvo");
    //var_dump($mycar);
    foreach ($mycar as $item => $it)
    {
        echo "$item : $it <br>";
            
    }
    echo "Welcome ".$_GET["uname"];
    echo "Your mail is: ".$_GET["email"];

    
    ?>
</body>
</html>