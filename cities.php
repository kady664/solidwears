<?php


$conn = mysqli_connect('localhost','root','','solidwears');
$sql =  "SELECT * FROM cities";
$data = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
 ?>

        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">location_city</span>
                    <h1>Cities</h1>
                </div>
                     <a class="add-product" href="city_add.php">Add New</a>
                </div>
               <div class="recent-order product">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>City Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php   while ( $city = mysqli_fetch_assoc($data)) { ?>



                            <tr>
                                <td><?php echo $city["id"]; ?></td>
                                <td ><?php echo $city["name"]; ?></td>
                                <td class="Action">
                                   <a href="city_edit.php?id=<?php echo $city["id"] ?>" class="btn btn-edit">Edit</a>
                                   <a href="cities_delete.php?id=<?php echo $city["id"] ?> " class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                          <?php } ?>


                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
