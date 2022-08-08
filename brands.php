<?php


$conn = mysqli_connect('localhost','root','','solidwears');
$sql =  "SELECT * FROM brand";
$data = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
 ?>

     
        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">badge</span>
                    <h1>Brands</h1>
                </div>
                     <a class="add-product" href="brand_add.php">Add New</a>
                </div>
               <div class="recent-order product">
                    
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Brand Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                             <?php   while ( $brand = mysqli_fetch_assoc($data)) { ?>



                            <tr>
                                <td><?php echo $brand["id"]; ?></td>
                                <td ><?php echo $brand["name"]; ?></td>
                                <td class="Action">
                                   <a href="brand_edit.php?id=<?php echo $brand["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="brand_delete.php?id=<?php echo $brand["id"] ?> " class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                          <?php } ?>
                            
                            
                        </tbody>
                    </table>
                </div>
         </div>

  <?php 
  include ("templete/footer.php");  ?>
                