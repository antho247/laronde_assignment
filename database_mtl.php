<html>
    <head>
        <title> Appartements</title>
        <link href="https://github.com/dawnify/a3/blob/master/styles4.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>Search your perfect appartement</h1>
        <div class="mainwrapper">
            
            <div class="middle">

                <form action="database_mtl.php" method="post">
                   Write the reference number of the appartment
                    <input type="text" name="formappts" maxlength="50"">
                    <input type="submit" name="formSubmit" value="Submit">
                </form>
            </div>
            <div class="right">
                    <?php
                    class appt{
                        public $name;
                        public $money;
                        public $pets;
                        public $student;
                        public $smoking;
                        public $backyard;
                        public $rooms;
                        public $stm;
                        public $photo_url;
                        
                        public function __construct($name, $money, $pets, $student, $smoking, $backyard, $rooms, $stm, $photo_url) {
                            $this->name = $name;
                            $this->money = $money;
                            $this->pets = $pets;
                            $this->student = $student;
                            $this->smoking = $smoking;
                            $this->backyard = $backyard;
                            $this->rooms = $rooms;
                            $this->stm = $stm;
                            $this->photo_url = $photo_url;
                            
                        }
                    }
                    //$rides = new appt('', '', '', '', '', '', 'http://plusquotes.com/images/quotes-img/halloween-02.jpg', ''); 
                    $Appt1 = new appt('5477',  '400$',  'Yes',  'Yes',  'No',  'Yes',  '3',  'Yes', 'https://github.com/dawnify/a3/blob/master/bo3.png?raw=true'); 
                    $Appt2 = new appt('9125',  '900$',  'No',  'No',  'No',  'Yes',  '5',  'Yes', 'https://github.com/dawnify/a3/blob/master/gta5.jpg?raw=true'); 
					$Appt3 = new appt('7311',  '250$',  'Yes',  'No',  'Yes',  'No',  '2',  'No', 'https://github.com/dawnify/a3/blob/master/smite.png?raw=true'); 
                    $Appt4 = new appt('1452',  '600$',  'Yes',  'No',  'Yes',  'Yes',  '4',  'No', 'https://github.com/dawnify/a3/blob/master/bf1.jpeg?raw=true'); 
                    $Appt5 = new appt('2413',  '550$',  'No',  'Yes',  'Yes',  'No',  '4',  'Yes', 'https://github.com/dawnify/a3/blob/master/rocket.jpg?raw=true'); 
                   
                    
 
                    $appts_number = array($Appt1, $Appt2, $Appt3, $Appt4, $Appt5);
                    $value = 0;            
                    if(isset($_POST['formSubmit']) == "Submit"){
                        $varAppts = $_POST['formappts'];
                        $varAppts = strtolower($varAppts);
                        foreach($appts_number as $appts){
                            if($appts->name == $varAppts){
                                echo "<div class=media>";
                                echo "<img class='appts_picture' src='" . $appts->photo_url . "'>";
                            
                                echo "</div>";
                                //echo $appts->money;
                                echo "<div class='text'><p>" . $appts->name ." <br>  Rent: " . $appts->money . "  <br> Pet Friendly: " . $appts->pets . ".  <br> Student Friendly " . $appts->student . ".  <br> Smoking Free: " . $appts->smoking . ".  <br> Backyard: " . $appts->backyard .".  <br> Number of rooms: " . $appts->rooms . ".  <br> Public Transport: " . $appts->stm .  ".</p></div>";
                                $value = 1;
                            }
                        }
                        if($value == 0){
                            echo "<img class='image_index' src='https://github.com/dawnify/a3/blob/master/nothingtodohere.png?raw=true'>";
                            echo "<p class='text'>Unfortunately, ". $varAppts ."is not available anymore, we apologize.</p>" ;   
                        }
                    }
                    else{
                        echo "<img class='image_index' src='https://github.com/dawnify/a3/blob/master/xbox_imagess.jpg?raw=true'>"; 
                        echo "<div class='map'><p>Check out and find the apartment that you want!</p></div>";
                    }
                    ?>
            </div>
            
            
            
            
        </div>
    </body>
    
</html>