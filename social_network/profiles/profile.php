<?php
$name ="";
session_start();
include("includes/connection.php");
$name;
$p1;
$p2;
$p3;
if(isset($_GET['user_name'])){
    $username = $_GET['user_name'];
    //mysql_connect("localhost","root","") or die("could not connect")
    //mysql_
    $userquery = mysqli_query($con, "select * from users where user_name='$username'");
    if (mysqli_num_rows($userquery) != 1){
        die("that username could not be found.");
    }

    while($row = mysqli_fetch_array($userquery,MYSQLI_ASSOC)){
        //echo $row['username'];
        $name = $row['user_name'];
        $p1 = $row['user_p1'];
        $p2 = $row['user_p2'];
        $p3 = $row['user_p3'];

    }
}
?>
<html lang="en">
<head>
    <title><?php echo $name; ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row">
        <div class="col-sm-12">
            <div style="background-color: #187FAB; padding-top: 10px;  padding: 15px;">
                <center><img src="images/logo.png"></center>
            </div>
        </div>
    </div>

<div class="outer-container home-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                         <img src="<?php echo $p1; ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                            include_once ('connect-mysql.php');
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max'];    
                                
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max'];    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                         <img src="<?php echo $p2; ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                            include_once ('connect-mysql.php');
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-1;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-1;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                         <img src="<?php echo $p3; ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                            include_once ('connect-mysql.php');
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-2;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-2;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-3;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-3;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-3;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-4;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-4;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-4;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-5;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-5;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-5;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-6;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-6;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-6;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-7;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-7;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-7;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-8;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-8;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-8;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-9;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-9;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-10;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-11;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-11;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                             <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-11;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-12;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['location']."<br>";
                                    }
                                }
                            ?>.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3>
                            <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-12;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['title']."<br>";
                                    }
                                }
                            ?>
                        </h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li>
                                <?php
                                $rowSQL = mysqli_query($db,"SELECT MAX( ID ) AS max FROM `data`;" );
                                $row = mysqli_fetch_array( $rowSQL );
                                $largestNumber = $row['max']-12;    
                                include_once ('connect-mysql.php');
                                 $sql= "SELECT * FROM data WHERE id='$largestNumber';";
                                 //echo $largestNumber;
                                 $result = mysqli_query($db, $sql);
                                 $resultCheck = mysqli_num_rows($result);
                                 if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['text']."<br>";
                                    }
                                }
                            ?>
                            </li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</div><!-- .outer-container -->

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html> 