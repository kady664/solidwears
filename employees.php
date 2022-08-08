<?php
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT employes.* , cities.name AS cityName FROM employes , cities WHERE cities.id = employes.city_id ";
$data = mysqli_query($conn , $sql);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">badge</span>
                    <h1>Employees</h1>
                </div>
                     <a class="add-product" href="employee_new.php">Add New</a>
                </div>
               <div class="recent-order product">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th id="id">ID</th>
                                <th id="name">Name</th>
                                <th id="phone">phone</th>
                                <th id="address">Address</th>
                                <th id="email<">Email</th>
                                <th id="city</">City</th>
                                <th id="action">Action</th>

                            </tr>
                        </thead>
                        <?php while($emp = mysqli_fetch_assoc($data)) { ?>

                                <tr>
                                    <td><?php echo $emp["id"]; ?></td>
                                    <td ><?php echo $emp["name"]; ?></td>
                                    <td><?php echo $emp["phone"]; ?></td>
                                    <td ><?php echo $emp["address"]; ?></td>
                                    <td ><?php echo $emp["email"]; ?></td>
                                    <td ><?php echo $emp["cityName"]; ?></td>
                                    <td class="Action">
                                       <a href="employee_edit.php?id=<?php echo $emp["id"] ?>" class="btn btn-edit">Edit</a>
                                       <a href="employe_delete.php?id=<?php echo $emp["id"] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                                <?php } ?>

                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
