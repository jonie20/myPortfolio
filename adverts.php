
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/css1/fontawesome.css" -->>
    <link rel="stylesheet" type="text/css" href="css/advert.css">
    <title>Document</title>
</head>
<body>

<!-- start of advert 1 -->
    <?php

                include 'conn.php';

                $query="SELECT product,photo,detail,contact from adverts"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

            
            <div class="container-fluid">
                <div class="col-md-6">
            <div class="left-content">
                <div class="adverts">
                    <h2><?php echo $array[0];?></h2>
                    <!-- <h6><?php echo $array[1];?></h6> -->
                    <p ><?php echo $array[2];?></p>
                    <p id="contact">Contact Info: <?php echo $array[3];?></p>
                </div>
            </div>
            </div>    
            </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>



<!-- start of advert 2 -->
    <?php

                include 'conn.php';

                $query="SELECT product,photo,detail,contact from adverts where advertId=2"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

            
            <div class="container-fluid">
                <div class="col-md-6">
            <div class="left-content">
                <div class="adverts">
                    <h2><?php echo $array[0];?></h2>
                    <!-- <h6><?php echo $array[1];?></h6> -->
                    <p ><?php echo $array[2];?></p>
                    <p id="contact">Contact Info: <?php echo $array[3];?></p>
                </div>
            </div>
            </div>    
            </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>





    <!-- start of advert 3 -->
    <?php

                include 'conn.php';

                $query="SELECT product,photo,detail,contact from adverts where advertId=3"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

            
            <div class="container-fluid">
                <div class="col-md-6">
            <div class="left-content">
                <div class="adverts">
                    <h2><?php echo $array[0];?></h2>
                    <!-- <h6><?php echo $array[1];?></h6> -->
                    <p ><?php echo $array[2];?></p>
                    <p id="contact">Contact Info: <?php echo $array[3];?></p>
                </div>
            </div>
            </div>    
            </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>




<!-- start of advert 2 -->
    <?php

                include 'conn.php';

                $query="SELECT product,photo,detail,contact from adverts where advertId=4"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

            
            <div class="container-fluid">
                <div class="col-md-6">
            <div class="left-content">
                <div class="adverts">
                    <h2><?php echo $array[0];?></h2>
                    <!-- <h6><?php echo $array[1];?></h6> -->
                    <p ><?php echo $array[2];?></p>
                    <p id="contact">Contact Info: <?php echo $array[3];?></p>
                </div>
            </div>
            </div>    
            </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

<div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                
                            <h2>About Us</h2>
                            <p>Please tell your friends about templatemo website. A variety of free CSS templates are available for immediate downloads.</p> 
                            <p>Phasellus vitae faucibus orci. Etiam eleifend orci sed faucibus semper. Cras varius dolor et augue fringilla, eu commodo sapien iaculis. Donec eget dictum tellus. <a href="#">Curabitur</a> a interdum diam. Nulla vestibulum porttitor porta.</p>
                            <p>Nulla vitae interdum libero, vel posuere ipsum. Phasellus interdum est et dapibus tempus. Vestibulum malesuada lorem condimentum mauris ornare dapibus. Curabitur tempor ligula et <a href="#">placerat</a> molestie.</p>
                            <p>Aliquam efficitur eu purus in interdum. <a href="#">Etiam tincidunt</a> magna ex, sit amet lobortis felis bibendum id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                          <div class="main-btn"><a href="#3">Read More</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <!-- <img src="img/about_image.jpg" alt="my image"> -->
                      </div>
                    </div>
                </div>
            </div>
          </div>    
</body>
</html>