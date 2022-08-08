<?php
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT customers.* ,cities.name AS cityName FROM customers, cities WHERE cities.id = customers.city_id";
$data = mysqli_query($conn , $sql);


include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">diversity_3</span>
                    <h1>Customers</h1>
                </div>
                     <a class="add-product" href="customer_new.php">Add New</a>
                </div>
               <div class="recent-order product">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while($cust = mysqli_fetch_assoc($data)) { ?>

                                <tr>
                                    <td><?php echo $cust["id"]; ?></td>
                                    <td ><?php echo $cust["name"]; ?></td>
                                    <td><?php echo $cust["phone"]; ?></td>
                                    <td ><?php echo $cust["address"]; ?></td>
                                    <td ><?php echo $cust["email"]; ?></td>
                                    <td ><?php echo $cust["cityName"]; ?></td>
                                    <td class="Action">
                                       <a href="customer_edit.php?id=<?php echo $cust["id"] ?>" class="btn btn-edit">Edit</a>
                                       <a href="customer_delete.php?id= <?php echo $cust["id"] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                                <?php } ?>


                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
