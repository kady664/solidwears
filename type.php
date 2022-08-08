<?php


$conn = mysqli_connect('localhost','root','','solidwears');
$sql =  "SELECT * FROM type";
$data = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>
     
        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">styler</span>
                    <h1>Type</h1>
                </div>
                     <a class="add-product" href="type_add.php">Add New</a>
                </div>
               <div class="recent-order product">
                    
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while( $type = mysqli_fetch_assoc($data)){ ?>
                            <tr>
                                <td><?php echo $type["id"]; ?></td>
                                <td ><?php echo $type["name"]; ?></td>
                                <td class="Action">
                                   <a href="type_edit.php?id=<?php echo $type["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="type_delete.php?id=<?php echo $type["id"] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
         </div>
    
<?php include("templete/footer.php")?>