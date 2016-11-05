<html>
    <head>
        <title>Assignment 3: Laronde Rides</title>
        <link href="https://github.com/tomhockey01/CART-351/blob/master/Assignment_3/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>All You Need To Know About La Ronde's Rides</h1>
        <div class="mainwrapper">
            
            <div class="middle">

                <form action="ass3.php" method="post">
                    What's Your Favorite Ride?
                    <input type="text" name="formCountry" maxlength="50" value="Favorite Ride Here">
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
                    $BateauPirate = new ride_info('bateau pirate',  'Maximum',  '35 ft',  '40 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_5559.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178784.32599555986!2d-73.85213382064889!3d45.56028048700914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C+Qu%C3%A9bec!5e0!3m2!1snl!2sca!4v1477581095126'); 
                    $Boomerang = new ride_info('boomerang',  'Maximum',  '116 ft',  '75 km/h',  'Yes',  'Yes','https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_1408.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101459.40852239418!2d-6.025098356078732!3d37.37548641810342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c1114be6291%3A0x34f018621cfe5648!2sSevilla%2C+Spanje!5e0!3m2!1snl!2sca!4v1477580430940');
                    $Cobra = new ride_info('cobra',  'Maximum',  '85 ft',  '77 km/h',  'Yes',  'Yes','https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/969734_485048571579869_1388567840_n.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101814.37905923014!2d-8.287958812851128!3d37.11227369799212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1aceae38ddc41f%3A0xed22e7a562441045!2sAlbufeira%2C+Portugal!5e0!3m2!1snl!2sca!4v1477581011749');
                    $Demon = new ride_info('demon',  'Maximum',  '45 ft',  'N/A',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_0465.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408595.92552921263!2d174.58459752049401!3d-36.86269257308265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fb5a9ce6fb%3A0x500ef6143a29917!2sAuckland%2C+Nieuw-Zeeland!5e0!3m2!1snl!2sca!4v1477758299458'); 
                    $Ednor = new ride_info('ednor',  'Maximum',  '98 ft',  '80 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_1168.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28182.422323264316!2d153.40483932819583!3d-27.99992938552605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b910fe19fd1c2b7%3A0x502a35af3dea680!2sSurfers+Paradise+Queensland+4217%2C+Australi%C3%AB!5e0!3m2!1snl!2sca!4v1477759065628');
                    $Goliath = new ride_info('goliath',  'Maximum',  '173 ft',  '110 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_6301.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248057.53966374998!2d100.49268160068301!3d13.72456078582444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6032280d61f3%3A0x10100b25de24820!2sBangkok%2C+Thailand!5e0!3m2!1snl!2sca!4v1477759295789'); 
                    $Manitou = new ride_info('manitou',  'Maximum',  '32',  'N/A',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/2.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127482.68814800383!2d101.61677733903137!3d3.1385034981846958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c701efeae7%3A0xf4d98e5b2f1c287d!2sKuala+Lumpur%2C+Federal+Territory+of+Kuala+Lumpur%2C+Maleisi%C3%AB!5e0!3m2!1snl!2sca!4v1477759448646'); 
                    $Monstre = new ride_info('monstre',  'Maximum',  '131 ft',  '96 km/h',  'Yes Track #2',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Orbite = new ride_info('orbite',  'Maximum',  '147 ft',  '89 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Slingshot = new ride_info('slingshot',  'Maximum',  '246 ft',  '125 km/h',  'No',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Splash = new ride_info('splash', 'Maximum',  '50 ft',  '48 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $SuperManege = new ride_info('super Manege',  'Maximum',  '75 ft',  '64 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Vampire = new ride_info('vampire',  'Maximum', '104 ft',  '80 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Vertigo = new ride_info('vertigo',  'Maximum',  '50 ft',  'N/A',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $VolUltime = new ride_info('vol Ultime',  'Maximum',  '147 ft',  '60 km/h',  'Yes',  'Yes', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    /**$AirPapillion = new ride_info('Air Papillion', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $GrandCarousel = new ride_info('Grand Carousel', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $JoyeuxMoussaillions = new ride_info('Joyeux Moussaillions', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $LaDanseDesBestioles = new ride_info('La Danse Des Bestioles', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $LaMarcheDuMillePattes = new ride_info('La Marche Du Mille Pattes', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $LeGalopant = new ride_info('Le Galopant', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $MaraisEnchante = new ride_info('Marais Enchante', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $MonsieurLarbre = new ride_info('Monsieur L abre', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $OursonFripon = new ride_info('Ourson Fripon', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Pitoune = new ride_info('Pitounes', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $PommesDapi = new ride_info('Pommes D api', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263');
                    $AutosTampeneuse = new ride_info('Autos Tampeneuse', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263');
                    $AquaTwist = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Catapulte = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Condor = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $DiscoRonde = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Dragon = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $GrandRoue = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Gravitor = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    //$LaGrandeEnvoler = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Minirail = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Pheonix = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $Spirale = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $TobogganNordique = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $TourdeVille = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 
                    $VolUltime = new ride_info('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263');**/

 


                    $ride_infos = array($BateauPirate, $Boomerang, $Cobra, $Demon, $Ednor, $Goliath, $Manitou, $Monstre, $Orbite, 
                     $Slingshot, $Splash, $SuperManege, $Vampire, $Vertigo, $VolUltime);


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
                                echo "<div class='text'><p>" . $con->name ." <br> Ride Thrill Level: " . $con->thrill_level . " Ride Height: " . $con->ride_height . ". Ride Speed: " . $con->ride_speed . ", Is Flash Pass available: " . $con->flash_pass . ". Limited Mobility: " . $con->limited_mobility . ".</p></div>";
                                $value = 1;
                            }
                        }
                        if($value == 0){
                            echo "<img class='worldmap' src='https://www.google.ca/search?q=laronde+goliath&safe=off&espv=2&biw=1274&bih=656&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjNhYm0io7QAhXK7IMKHQBXDWYQ_AUIBigB#safe=off&tbm=isch&q=la+ronde&imgrc=vvXIKyY1k87CJM%3A'>";
                            echo "<p class='text'>Unfortunatley, ". $varRides ." does not exist.</p>" ;   
                        }
                    }
                    else{
                        echo "<img class='worldmap' src='http://i.ebayimg.com/images/i/191287530781-0-1/s-l1000.jpg'>"; 
                        echo "<div class='map'><p>What's your favorite ride? Type it in and check it's stats!</p></div>";
                    }
                    ?>
            </div>
            
            
            
            
        </div>
    </body>
    
</html>