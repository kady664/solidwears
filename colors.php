<?php


$conn = mysqli_connect('localhost','root','','solidwears');
$sql =  "SELECT * FROM color";
$data = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">palette</span>
                    <h1>Colors</h1>
                </div>
                     <a class="add-product" href="color_add.php">Add New</a>
                </div>
               <div class="recent-order product">
                    
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Color</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php   while ( $color = mysqli_fetch_assoc($data)) { ?>



                            <tr>
                                <td><?php echo $color["id"]; ?></td>
                                <td ><?php echo $color["name"]; ?></td>
                                <td class="Action">
                                   <a href="color_edit.php?id=<?php echo $color["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="color_delete.php?id=<?php echo $color["id"] ?> " class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                          <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
                