

<html>
    <head>
        <title> Appartements</title>
        <link rel="stylesheet" type="text/css">
    </head>
    
    <body>

<style>
table {
    margin: 8px;
}

.mainwrapper {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1em;
    background: #72618e;
    color: #FFF;
    
}
.title {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1em;
    border: 1px solid #DDD;
    background: #72618e;
    color: #FFF;
    
}
.text {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1em;
    border: 1px solid #DDD;
    text-align: center;
}

.appts_picture {
	width: 50%;
	display: block;
	margin: 0 auto;
	
}
</style>
<div class="title">
        <h1> &nbsp; Type in the Reference Number!</h1>
    
        <div class="mainwrapper">
            
            <div class="middle">

                <form action="database_mtl.php" method="post">
                   &nbsp; Write the reference number of the appartment here-->
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
                    $Appt1 = new appt('54',  '775.00$',  'Yes',  'Yes',  'No',  'No',  '2',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/0.png?raw=true'); 
                    $Appt2 = new appt('87',  '765.00$',  'No',  'No',  'No',  'Yes',  '2',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/1.png?raw=true'); 
					$Appt3 = new appt('90',  '600.00$',  'Yes',  'No',  'No',  'Yes',  '3',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/2.png?raw=true'); 
                    $Appt4 = new appt('45',  '475.00$',  'Yes',  'Yes',  'No',  'No',  '2',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/3.png?raw=true'); 
                    $Appt5 = new appt('32',  '640.00$',  'No',  'Yes',  'No',  'Yes',  '3',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/4.png?raw=true'); 
                   $Appt6 = new appt('43',  '390.00$',  'No',  'No',  'Yes',  'Yes',  '4',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/5.png?raw=true');
                   $Appt7 = new appt('11',  '550.00$',  'No',  'Yes',  'Yes',  'No',  '3',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/6.png?raw=true');
                   $Appt8 = new appt('07',  '660.00$',  'Yes',  'No',  'No',  'Yes',  '4',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/7.png?raw=true');
                   $Appt9 = new appt('61',  '560.00$',  'No',  'No',  'No',  'Yes',  '2',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/8.png?raw=true');
                   $Appt10 = new appt('79',  '435.00$',  'Yes',  'No',  'Yes',  'Yes',  '4',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/9.png?raw=true');
                   $Appt11 = new appt('28',  '675.00$',  'Yes',  'No',  'No',  'Yes',  '3',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/5.png?raw=true');
                   $Appt12 = new appt('84',  '615.00$',  'Yes',  'No',  'No',  'No',  '4',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/3.png?raw=true');
                   $Appt13 = new appt('13',  '475.00$',  'Yes',  'Yes',  'No',  'Yes',  '4',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/8.png?raw=true');
                   $Appt14 = new appt('37',  '525.00$',  'Yes',  'Yes',  'Yes',  'No',  '2',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/9.png?raw=true');
                   $Appt15 = new appt('29',  '495.00$',  'Yes',  'No',  'Yes',  'Yes',  '2',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/5.png?raw=true');
                   $Appt16 = new appt('40',  '655.00$',  'Yes',  'No',  'No',  'Yes',  '4',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/1.png?raw=true');
                   $Appt17 = new appt('62',  '600.00$',  'No',  'Yes',  'No',  'Yes',  '2',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/3.png?raw=true');
                   $Appt18 = new appt('97',  '750.00$',  'Yes',  'Yes',  'No',  'No',  '3',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/2.png?raw=true');
                   $Appt19 = new appt('20',  '780.00$',  'No',  'Yes',  'No',  'No',  '3',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/6.png?raw=true');
                   $Appt20 = new appt('02',  '720.00$',  'No',  'Yes',  'No',  'No',  '4',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/4.png?raw=true');
                   $Appt21 = new appt('17',  '680.00$',  'Yes',  'No',  'Yes',  'No',  '2',  'No', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/5.png?raw=true');
                   
                   
                    
 
                    $appts_number = array($Appt1, $Appt2, $Appt3, $Appt4, $Appt5, $Appt6, $Appt7, $Appt8, $Appt9, $Appt10, $Appt11, $Appt12, $Appt13
                    , $Appt14, $Appt15, $Appt16, $Appt17, $Appt18, $Appt19, $Appt20, $Appt21);
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
                                echo "<div class='text'><p> &nbsp; # " . $appts->name ." <br>&nbsp;  Rent: " . $appts->money . "  <br>&nbsp; Pet Friendly: " . $appts->pets . ".  <br>&nbsp; Student Friendly " . $appts->student . ".  <br>&nbsp; Smoking Free: " . $appts->smoking . ".  <br>&nbsp; Backyard: " . $appts->backyard .".  <br>&nbsp; Number of rooms: " . $appts->rooms . ".  <br>&nbsp; Public Transport: " . $appts->stm .  ".</p></div>";
                                $value = 1;
                            }
                        }
                        if($value == 0){
                            echo "<img class='image_index' src='https://github.com/dawnify/a3/blob/master/nothingtodohere.png?raw=true'>";
                            echo "<p class='text'>Unfortunately, ". $varAppts ."is not available anymore, we apologize.</p>" ;   
                        }
                    }
                    else{
                        //echo "<img class='image_index' src='https://github.com/dawnify/a3/blob/master/xbox_imagess.jpg?raw=true'>"; 
                        //echo "<div class='map'><h1>Search and find the apartment that you want!</h1></div>";
                    }
                    ?>
            </div>
            
            
            
            
        </div>
    </body>
    
</html>