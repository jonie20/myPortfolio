
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="articles.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->

    <title>Document</title>
</head>
<body class="container1">
    <!-- <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div> -->
<div class="col-md-12">
    <div class="card">
      <div class="card-header bg-info"> 
        <div class="text-black" align="center">ARTICLES POSTS</div>
      </div><div class="col-md-12 mt-1 mb-2" align="center"><button type="button" id="createx" class="btn btn-success">Add Article</button></div>
    </div>
    <div class="card-header ">
        <div class="alert alert-success">*Author is the source of the article.<br>*Remember 6 articles only posted.<br>*Admin will have to approve your article.</div>
    </div>
    

<!-- start of article 1 -->
        <div class="article-row">
                <?php

                include 'conn.php';

                $query="SELECT quote,modifyid,author from articles where articleid='1' and status='active'"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>               
        
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            
                <div class="tm-content-box">
                    <h2>"<?php echo $array[0];?>"</h2>
                    <div id="infom">
                    <h6>Am, <?php echo $array[1];?></h6> 
                    <p >Origin, <?php echo $array[2];?></p>
                   </div>  
                </div>
               </div>   

                <?php endwhile; ?>

                <?php else: ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                   <h2 class="text-danger">"No Article here,You have a chance to add"</h2>
                 </div>
                </div>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>



<!-- start of article 2 -->
               <?php

                include 'conn.php';

                $query="SELECT quote,modifyid,author from articles where articleid='2' and status='active'"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>           
        
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                    <h2>"<?php echo $array[0];?>"</h2>
                    <div id="infom">
                    <h6>Am, <?php echo $array[1];?></h6> 
                    <p >Origin, <?php echo $array[2];?></p>
                    
                </div>
             </div>
        
                <?php endwhile; ?>

                <?php else: ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                   <h2 class="text-danger">"No Article here,You have a chance to add"</h2>
                 </div>
                </div>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

        </div>



<!-- start of article 3 -->
        <div class="article-row2">
              <?php

                include 'conn.php';

                $query="SELECT quote,modifyid,author from articles where articleid='3' and status='active'"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
            
            
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                    <h2>"<?php echo $array[0];?>"</h2>
                    <div id="infom">
                    <h6>Am, <?php echo $array[1];?></h6> 
                    <p >Origin, <?php echo $array[2];?></p> 
                    
                </div>
             </div>
               <?php endwhile; ?>

                <?php else: ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                   <h2 class="text-danger">"No Article here,You have a chance to add"</h2>
                 </div>
                </div>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

        



<!-- start of article 4 -->
               <?php

                include 'conn.php';

                $query="SELECT quote,modifyid,author from articles where articleid='4' and status='active'"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
 
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="tm-content-box">
                    <h2>"<?php echo $array[0];?>"</h2>
                    <div id="infom">
                    <h6>Am, <?php echo $array[1];?></h6> 
                    <p >Origin, <?php echo $array[2];?></p>    
                </div>
              </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                   <h2 class="text-danger">"No Article here,You have a chance to add"</h2>
                 </div>
                </div>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

        </div>


<!-- start of article 5 -->
        <div class="article-row3">

              <?php

                include 'conn.php';

                $query="SELECT quote,modifyid,author from articles where articleid='5' and status='active'"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

            
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="tm-content-box">
                    <h2>"<?php echo $array[0];?>"</h2>
                    <div id="infom">
                    <h6>Am, <?php echo $array[1];?></h6> 
                    <p >Origin, <?php echo $array[2];?></p>
                    
                </div>
             </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                   <h2 class="text-danger">"No Article here,You have a chance to add"</h2>
                 </div>
                </div>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

        




<!-- start of article 6 -->
                   <?php

                include 'conn.php';

                $query="SELECT quote,modifyid,author from articles where articleid='6' and status='active'"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

            
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="tm-content-box">
                    <h2>"<?php echo $array[0];?>"</h2>
                    <div id="infom">
                    <h6>Am, <?php echo $array[1];?></h6> 
                    <p >Origin, <?php echo $array[2];?></p>
                    
                </div>
            </div>

                

                <?php endwhile; ?>

                <?php else: ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="tm-content-box">
                   <h2 class="text-danger">"No Article here,You have a chance to add"</h2>
                 </div>
                </div>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
            </div>
        </div> 




   
<!-- FORM REQUIRED WHEN  ADDING AN ARTICLE --> 

 <div class="modal fade" id="ajax-modalx" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="custCrudModalx">Add New Article</h4>
            </div>
            <div class="modal-body">
                <form action="add-articles.php" id="custFormx" name="custForm" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Author:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="auname" name="auname" placeholder="Author of the quote" value="" maxlength="100" required="">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Quote:</label>
                        <div class="col-sm-12">
                            <textarea type="text" class="form-control" id="quname" name="quname"  value=""  rows="5" required="">Article here... </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Your name:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="coname" name="coname" placeholder="Enter your name" value="" maxlength="100" required="">
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="createx" >Upload</button>
                    </div>
                    
                </form>
                
            </div>
            
        </div>
        
    </div>
      
  </div>
  <script type="text/javascript">
 $(document).ready(function($){

    //bootstrap on the create1 which is th advert form

    $('#createx').click(function () {
        $('#custFormx').trigger("reset");
        $('#custCrudModalx').html("Add New Article");
        $('#ajax-modalx').modal('show');
     });
 
    



    
});
</script>

</body>
</html>