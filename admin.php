<?php include("conn.php");?>
<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
 <head>
  <title>How to Disable Enable User Login in PHP using Ajax</title>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>


  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Admin panel and operation center</h2>
   <br />
   <div align="right">
    <a href="logout.php" class="btn btn-primary">Logout</a>
   </div>
   <br />
    <div class="panel panel-default">
    <div class="panel-heading">Profile details</div>
    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
     </div>
      </div>
     </div>


           <div class="panel panel-default">
    <div class="card-header bg-info"> 
        <div class="text-black" align="center">ARTICLES POSTS</div>
    </div>
    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
     </div>

     <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Article Id.</th>
                  <th scope="col">Modify Id.</th>
                  <th scope="col">Quote</th>
                  <th scope="col">Author</th>
                  <th scope="col">status</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
     <tbody>
                <?php

                include 'conn.php';

                $query="select * from articles limit 200"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td> 
                      <button type="button" class="btn btn-success editBtn">Edit</button>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
          </table>
      </div>




     
      </div>
     </div>
     
    <div class="container mt-2">  
    <div class="roW">
          <div class="card-header bg-info"> 
            <div class="text-black" align="center">ADVERTS AVAILABLE</div>
          </div>
          <div class="col-md-8 mt-1 mb-2" align="center"><button type="button" id="create" class="btn btn-success" >Add Advert</button></div>
    

        <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product Name.</th>
                  <th scope="col">Detail Info.</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Photo</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
     <tbody>
                <?php

                include 'conn.php';

                $query="select * from adverts limit 200"; // Fetch all the data from the table customers

                $result=mysqli_query($conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td> 
                      <a href="javascript:void(0)" class="btn btn-primary edit" data-id="<?php echo $array[0];?>">Edit</a>
                      <a href="javascript:void(0)" class="btn btn-primary delete" data-id="<?php echo $array[0];?>">Delete</a>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
          </table>
      </div>
  </div>
</div>    

     <div class="table-responsive" id="user_data">
     </div>
     <script>
     $(document).ready(function(){
      
      load_user_data();
      
      function load_user_data()
      {
       var action = 'fetch';
       $.ajax({
        url:'action.php',
        method:'POST',
        data:{action:action},
        success:function(data)
        {
         $('#user_data').html(data);
        }
       });
      }
      
      $(document).on('click', '.action', function(){
       var user_id = $(this).data('user_id');
       var user_status = $(this).data('user_status');
       var action = 'change_status';
       $('#message').html('you sure');
       if(confirm("Are you Sure you want to delete status of this Article?"))
       {
        $.ajax({
         url:'action.php',
         method:'POST',
         data:{user_id:user_id, user_status:user_status, action:action},
         success:function(data)
         {
          if(data != '')
          {
           load_user_data();
           $('#message').html(data);
          }
         }
        });
       }
       else
       {
        return false;
       }
      });
      
     });
     </script>
      </div>
     </div>



   
  </div>
 <!-- Bootstrap model on dialop on update add -->
 <!-- FORM REQUIRED WHEN  ADDING AN ADVERT -->
<!-- ######################################################################################################################################################## -->
  <div class="modal fade" id="ajax-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="custCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="custForm" name="custForm" class="form-horizontal" method="POST">
                    <input type="hidden" name="custId" id="custId">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Product</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter name" value="" maxlength="100" required="">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Banner</label>
                        <div class="col-sm-12">
                            <!-- <input type="text" class="form-control" id="bname" name="bname" placeholder="Enter name" value="" maxlength="100" required=""> -->
                            <input type="hidden" name="size" value="1000000">
                            <div><input type="file" class="form-control" name="image"></div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Details</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="dname" name="dname" placeholder="Enter name" value="" maxlength="100" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter name" value="" maxlength="100" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
                    </div>
                    
                </form>
                
            </div>
            
        </div>
        
    </div>
      
  </div>

  <!-- ##################################################################################################################################### -->

  <div class="modal fade" id="ajax-modal5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="custCrudModal">Change Status</h4>
            </div>
            <div class="modal-body">
                <form action="change_status.php" id="custForm" name="custForm" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Article Id</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="updateid" name="updateid" placeholder="Enter Id" value="" required="">
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="status">
                                <option>inactive</option>
                                <option>active</option>
                            </select>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="changestatus" id="btn-save" value="create">Save changes</button>
                    </div>
                    
                </form>
                
            </div>
            
        </div>
        
    </div>
      
  </div>







<!-- start bootstrap model -->
<script type="text/javascript">
 $(document).ready(function($){

    //bootstrap on the create1 which is th advert form

    $('#create1').click(function () {
        $('#custForm1').trigger("reset");
        $('#custCrudModal1').html("Add New Article");
        $('#ajax-modal1').modal('show');
     });

    //bootstrap on the create1 which is th advert form
    $('#create').click(function () {
       $('#custForm').trigger("reset");
       $('#custCrudModal').html("Add New Advertisement");
       $('#ajax-modal').modal('show');

    });
 
    $('.editBtn').on('click', function () {

        $('#ajax-modal5').modal('show')
         
        $tr=$(this).closest('tr');

        var data=$tr.children("td").map(function(){
            return $(this).text();

        }).get();
        console.log(data);
        $('#pname').val(data[0]);
        $('#bname').val(data[1]);
        $('#dname').val(data[2]);
        $('#cname').val(data[4]);
        // $.ajax({
            
        //     success: function(res){
        //       $('#custCrudModal').html("Edit Advertisement");
        //       $('#ajax-modal').modal('show');
        //       $('#custId').val(res.custId);
        //       
        //    }
        // });

    });



    $('body').on('click', '.delete', function () {

       if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
         
        // ajax
        $.ajax({
            type:"POST",
            url: "delete.php",
            data: { id: id },
            dataType: 'json',
            success: function(res){

              $('#fname').html(res.fname);
              $('#lname').html(res.lname);
              $('#email').html(res.email);
              window.location.reload();
           }
        });
       }

    });

    $('#custForm').submit(function() {
         
        // ajax
        $.ajax({
            type:"POST",
            url: "add-update.php",
            data: $(this).serialize(), // get all form field value in 
            dataType: 'json',
            success: function(res){
             window.location.reload();
             $('#msg').html('');
           }
        });

    });

});
</script>
 </body>
</html>