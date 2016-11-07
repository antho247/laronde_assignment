<html>
    <head>
        <title>Assignment 3: Laronde Rides</title>
        <link href="https://github.com/antho247/laronde_assignment/blob/master/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>All You Need To Know About La Ronde's Rides</h1>
        <div class="mainwrapper">
            
            <div class="middle">

                <form action="ass3.php" method="post">
                    What's Your Favorite Ride?
                    <input type="text" name="formCountry" maxlength="50"">
                    <input type="submit" name="formSubmit" value="Submit">
                </form>

            </div>

            <div class="right">
                    <?php
                    class ride_info{
                        public $name;
                        public $thrill_level;
                        public $ride_height;
                        public $ride_speed;
                        public $flash_pass;
                        public $limited_mobility;
                        public $photo_url;
                        

                        public function __construct($name, $thrill_level, $ride_height, $ride_speed, $flash_pass, $limited_mobility, $photo_url) {
                            $this->name = $name;
                            $this->thrill_level = $thrill_level;
                            $this->ride_height = $ride_height;
                            $this->ride_speed = $ride_speed;
                            $this->flash_pass = $flash_pass;
                            $this->limited_mobility = $limited_mobility;
                            $this->photo_url = $photo_url;
                            
                        }
                    }

                    //$rides = new ride_info('', '', '', '', '', '', 'http://plusquotes.com/images/quotes-img/halloween-02.jpg', ''); 
                    $BateauPirate = new ride_info('bateau pirate',  'Maximum',  '35 ft',  '40 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $Boomerang = new ride_info('boomerang',  'Maximum',  '116 ft',  '75 km/h',  'Yes',  'Yes','https://github.com/antho247/laronde_assignment/blob/master/rideImages/Boomerang_La_Ronde.jpg?raw=true');
                    $Cobra = new ride_info('cobra',  'Maximum',  '85 ft',  '77 km/h',  'Yes',  'Yes','https://github.com/antho247/laronde_assignment/blob/master/rideImages/cobra.jpg?raw=true');
                    $Demon = new ride_info('demon',  'Maximum',  '45 ft',  'N/A',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/demonGood.jpg?raw=true'); 
                    $Ednor = new ride_info('ednor',  'Maximum',  '98 ft',  '80 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/Ednot.jpg?raw=true');
                    $Goliath = new ride_info('goliath',  'Maximum',  '173 ft',  '110 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/goliath.jpg?raw=true'); 
                    $Manitou = new ride_info('manitou',  'Maximum',  '32',  'N/A',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/manitou.jpg?raw=true'); 
                    $Monstre = new ride_info('monstre',  'Maximum',  '131 ft',  '96 km/h',  'Yes Track #2',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/monstre.jpg?raw=true'); 
                    $Orbite = new ride_info('orbite',  'Maximum',  '147 ft',  '89 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/orbite.jpg?raw=true'); 
                    $Slingshot = new ride_info('slingshot',  'Maximum',  '246 ft',  '125 km/h',  'No',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/slongshot.jpg?raw=true'); 
                    $Splash = new ride_info('splash', 'Maximum',  '50 ft',  '48 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/splash.jpg?raw=true'); 
                    $SuperManege = new ride_info('super manege',  'Maximum',  '75 ft',  '64 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/SuperManege.jpg?raw=true'); 
                    $Vampire = new ride_info('vampire',  'Maximum', '104 ft',  '80 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/vampire.jpg?raw=true'); 
                    $Vertigo = new ride_info('vertigo',  'Maximum',  '50 ft',  'N/A',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/vertigo.jpg?raw=true'); 
                    $VolUltime = new ride_info('vol ultime',  'Maximum',  '147 ft',  '60 km/h',  'Yes',  'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/volUltime.jpg?raw=true'); 
                    $AutosTampeneuse = new ride_info('autos tampeneuse', 'Moderate', 'N/A', 'N/A', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/autos.jpg?raw=true');
                    $AquaTwist = new ride_info('aquatwist', 'Moderate', 'N/A', 'N/A', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/aquatwist.jpg?raw=true'); 
                    $Catapulte = new ride_info('catapulte', 'Maximum', '150 ft', 'N/A', 'No', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/catapulte.jpg?raw=true'); 
                    $Condor = new ride_info('condor', 'Moderate', '88 ft', 'N/A', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/condor.jpg?raw=true'); 
                    $DiscoRonde = new ride_info('disco ronde', 'Moderate', 'N/A', 'N/A', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/.jpg?raw=true'); 
                    $Dragon = new ride_info('dragon', 'Moderate', 'N/A', '32 km/h', 'No', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $GrandRoue = new ride_info('grande roue', 'Mild', '147 ft', '10 km/h', 'No', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $Gravitor = new ride_info('gravitor', 'Moderate', '45 ft', '36 km/h', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $Minirail = new ride_info('minirail', 'Mild', 'N/A', '4 km/h', 'No', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $Pheonix = new ride_info('pheonix', 'Moderate', '27 ft', '23 km/h', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $Spirale = new ride_info('spirale', 'Moderate', '239 ft', '5 km/h', 'No', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $TobogganNordique = new ride_info('toboggan nordique', 'Moderate', '45 ft', 'N/A', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    $TourdeVille = new ride_info('tour de ville', 'Moderate', '15 ft', 'N/A', 'Yes', 'Yes', 'https://github.com/antho247/laronde_assignment/blob/master/rideImages/BPirate.jpg?raw=true'); 
                    

 


                    $ride_infos = array($BateauPirate, $Boomerang, $Cobra, $Demon, $Ednor, $Goliath, $Manitou, $Monstre, $Orbite, 
                     $Slingshot, $Splash, $SuperManege, $Vampire, $Vertigo, $VolUltime, $AutosTampeneuse, $AquaTwist, $Catapulte, $Condor, $DiscoRonde, $Dragon,  $GrandRoue, 
                     $Gravitor, $Minirail, $Pheonix, $Spirale, $TobogganNordique, $TourdeVille);


                    $value = 0;            

                    if(isset($_POST['formSubmit']) == "Submit"){
                        $varRides = $_POST['formCountry'];
                        $varRides = strtolower($varRides);
                        foreach($ride_infos as $con){
                            if($con->name == $varRides){
                                echo "<div class=media>";
                                echo "<img class='country_picture' src='" . $con->photo_url . "'>";
                                /**echo "<div class='location_map'><iframe src='" . $con->location_url . "'
                                        width='100%' 
                                        height='50%'
                                        frameborder='0' 
                                        style='border:0' allowfullscreen>
                                    </iframe></div>";**/
                                echo "</div>";
                                //echo $con->thrill_level;
                                echo "<div class='text'><p>" . $con->name ." <br> Ride Thrill Level: " . $con->thrill_level . " Ride Height: " . $con->ride_height . ". Ride Speed: " . $con->ride_speed . ". Flash Pass: " . $con->flash_pass . ". Limited Mobility: " . $con->limited_mobility . ".</p></div>";
                                $value = 1;
                            }
                        }
                        if($value == 0){
                            echo "<img class='worldmap' src='https://github.com/antho247/laronde_assignment/blob/master/rideImages/babyoops.jpg?raw=true'>";
                            echo "<p class='text'>Unfortunatley, ". $varRides ." does not exist.</p>" ;   
                        }
                    }
                    else{
                        echo "<img class='worldmap' src='https://github.com/antho247/laronde_assignment/blob/master/rideImages/larondefar.jpg?raw=true'>"; 
                        echo "<div class='map'><p>What's your favorite ride? Type it in and check it's stats!</p></div>";
                    }
                    ?>
            </div>
            
            
            
            
        </div>
    </body>
    
</html>