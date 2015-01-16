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
    <br>
    <br>
    <?php
        $films=array(array(
            'title'=>'Funny Movie 3',
            'genre'=>'comedy',
            'stars'=>array('leading actress','leading actor','expendable dude','somebody else')));
    ?>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">

            <table class="table table-bordered table-responsive">
                <div class="bg-success" align="center"><strong>Films</strong></div>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Stars</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($films as $value){ ?>
                        <tr>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['genre'] ?></td>
                            <td>
                                <?php foreach($value['stars'] as $stars){ ?>
                                <ul>
                                    <li><?php echo $stars; ?></li>
                                </ul>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<footer class="row">

</footer>
</body>
</html>