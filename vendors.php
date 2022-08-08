<?php
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT vendors.* , cities.name AS cityName FROM vendors,cities WHERE vendors.city_id = cities.id ";
$data = mysqli_query($conn , $sql);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

    <div class="content">
        <div class="product-title">
            <div class="title">
                <span class="material-symbols-outlined">diversity_3</span>
                <h1>Vendors</h1>
            </div>
                    <a class="add-product" href="vendor_new.php">Add New</a>
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
                    <?php while($vendor = mysqli_fetch_assoc($data)) { ?>

                        <tr>
                            <td><?php echo $vendor["id"]; ?></td>
                            <td ><?php echo $vendor["name"]; ?></td>
                            <td><?php echo $vendor["phone"]; ?></td>
                            <td ><?php echo $vendor["address"]; ?></td>
                            <td ><?php echo $vendor["email"]; ?></td>
                            <td ><?php echo $vendor["cityName"]; ?></td>
                            <td class="Action">
                                <a href="vendor_edit.php?id=<?php echo $vendor["id"] ?>" class="btn btn-edit">Edit</a>
                                <a href="vendor_delete.php?id=<?php echo $vendor["id"] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include("templete/footer.php")?>
