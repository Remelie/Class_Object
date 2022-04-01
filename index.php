<html>
<head>
    <title>Class and Object</title>
</head>
    <body>
        <?Php 
        class Vehicle{
            var $type = "vehicle";
            public function start(){
                if($this->type=="car"){
                    echo "Beep! <br> I am a Mustang.<br>I'm a sportscar.<br>I can run at maximum speed of 200.";
                }else{
                    echo " I am a Toyota. I am just an ordinary car.";
                }
            }
    
        }
        $firstVehicle = new Vehicle();
        $firstVehicle->type = "car";
        $firstVehicle->start();
     
        ?>
    </body>
</html>
