<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>
<body>
<header class="row">

</header>
<section class="row">
    <div class="col-md-offset-2 col-md-8">
        <table class="table table-bordered table-responsive">
            <div class="bg-success" align="center"><strong>PLACES</strong></div>
            <thead>
            <tr>
                <th>City</th>
                <th>Country</th>
                <th>Continent</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Tokyo</td>
                <td>Japan</td>
                <td>Asia</td>
            </tr>
            <tr>
                <td>Mexico City</td>
                <td>Mexico</td>
                <td>North America</td>
            </tr>
            <tr>
                <td>NewYork City</td>
                <td>USA</td>
                <td>North America</td>
            </tr>
            <tr>
                <td>Mumbai</td>
                <td>India</td>
                <td>Asia</td>
            </tr>
            <tr>
                <td>Seoul</td>
                <td>Korea</td>
                <td>Asia</td>
            </tr>
            <tr>
                <td>Shanghai</td>
                <td>China</td>
                <td>Asia</td>
            </tr>
            <tr>
                <td>Lagos</td>
                <td>Nigeria</td>
                <td>Africa</td>
            </tr>
            <tr>
                <td>Buenosaires</td>
                <td>Argentina</td>
                <td>South America</td>
            </tr>
            <tr>
                <td>Cairo</td>
                <td>Egypt</td>
                <td>Africa</td>
            </tr>
            <tr>
                <td>London</td>
                <td>UK</td>
                <td>Europe</td>
            </tr>
            </tbody>
        </table>
    </div>
    <br>
    <br>
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
?>

    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h2>Table Create PHP Looping</h2>
            <table class="table table-bordered table-responsive">
                <div class="bg-success" align="center"><strong>PLACES</strong></div>
                <thead>
                <tr>
                    <th>City</th>
                    <th>Country</th>
                    <th>Continent</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($places as $key){ ?>
                    <tr>
                        <td><?php echo $key['city'] ?></td>
                        <td><?php echo $key['country'] ?></td>
                        <td><?php echo $key['continent'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
</section>

<footer class="row">

</footer>
</body>
</html>