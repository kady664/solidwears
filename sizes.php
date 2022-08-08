<?php

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM size";
$data = mysqli_query($conn,$sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">badge</span>
                    <h1>Sizes</h1>
                </div>
                     <a class="add-product" href="size_add.php">Add New</a>
                </div>
               <div class="recent-order product">
                    
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Size</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while( $size = mysqli_fetch_assoc($data)){ ?>
                            <tr>
                                <td><?php echo $size["id"]; ?></td>
                                <td ><?php echo $size["name"]; ?></td>
                                <td class="Action">
                                   <a href="size_edit.php?id=<?php echo $size["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="size_delete.php?id=<?php echo $size["id"] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
