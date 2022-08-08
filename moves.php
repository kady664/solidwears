<?php

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM move";
$data = mysqli_query($conn,$sql);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>
     
        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">badge</span>
                    <h1>Moves</h1>
                </div>
                     <a class="add-product" href="moves_add.php">Add New</a>
                </div>
               <div class="recent-order product">
                    
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>move Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while($move= mysqli_fetch_assoc($data)){ ?>
                            <tr>
                                <td><?php echo $move["id"]?></td>
                                <td ><?php echo $move["name"]?></td>
                                <td class="Action">
                                   <a href="moves_edit.php?id=<?php echo $move["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="moves_delete.php?id=<?php echo $move["id"] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
                