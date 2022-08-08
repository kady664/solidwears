<?php


$conn = mysqli_connect('localhost','root','','solidwears');
$sql =  "SELECT * FROM category";
$data = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
 ?>
 
 
        <div class="content">
            <div class="product-title">
                <div class="title">
                   <span class="material-symbols-outlined">category</span>
                    <h1>Category</h1>
                </div>
                     <a class="add-product" href="category_add.php">Add New</a>
                </div>
               <div class="recent-order product">
                    
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php   while ( $cat = mysqli_fetch_assoc($data)) { ?>
                                
                            <tr>
                                <td><?php echo $cat["id"]; ?></td>
                                <td ><?php echo $cat["name"]; ?></td>
                                <td class="Action">
                                   <a href="category_edit.php?id=<?php echo $cat["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="category_delete.php?id=<?php echo $cat["id"] ?> " class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                          <?php } ?>

                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
                