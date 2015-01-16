<?php
    $places=array(array(
                'city'=>'Tokyo',
                'country'=>'Japan',
                 'continent'=>'Asia'),
        array(
            'city'=>'Mexico City',
            'country'=>'Mexico',
            'continent'=>'North America'),
        array(
            'city'=>'NewYork City',
            'country'=>'USA',
            'continent'=>'North America'),
        array(
            'city'=>'Mumbai',
            'country'=>'India',
            'continent'=>'Asia'),
        array(
            'city'=>'Seoul',
            'country'=>'Korea',
            'continent'=>'Asia'),
        array(
            'city'=>'Tokyo',
            'country'=>'Japan',
            'continent'=>'Asia'),
        array(
            'city'=>'Shanghai',
            'country'=>'China',
            'continent'=>'Asia'),
        array(
            'city'=>'Lagos',
            'country'=>'Nigeria',
            'continent'=>'Africa'),
        array(
            'city'=>'Buenosaires',
            'country'=>'Argentina',
            'continent'=>'South America'),
        array(
            'city'=>'Cairo',
            'country'=>'Egypt',
            'continent'=>'Africa')
                );
    print_r($places);

    echo $places;
    echo $places[3];
    echo $places[3]['continent'];
    echo $places[3]['country']='Bangladesh';
    echo $places[3]['city']."<br><br>";

    $oddnumbers=array(1,3,5,7,9,11,13,15,17);

    foreach($oddnumbers as $key){
        echo $key." ";
    }
    echo "<br>";
    $names=array('Meem','Fahad','Fahad1','Arifa','Saima');
    foreach($names as $key){
        echo $key." ";
    }

    echo "<br><br>";
    foreach($places as $key){
        //foreach($key as $value){echo $value." ";}
        //print_r($key);
        echo $key['city'].' - '.$key['country'].' - '.$key['continent']."<br>";
    }
    echo "<br>"."<br";
$cards=array('Red'=>array(1,2,3,4),
            'Blue'=>array(1,2,3,4),
            'Green'=>array(1,2,3,4),
            'Red'=>array(1,2,3,4));
print_r($cards);
echo "<br>"."<br";
