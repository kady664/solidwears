<?php
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT COUNT(id) FROM customers";
$data = mysqli_query($conn,$sql);
$cust = mysqli_fetch_row($data);

$sql = "SELECT COUNT(id) FROM vendors";
$data = mysqli_query($conn,$sql);
$vendor = mysqli_fetch_row($data);

$sql = "SELECT COUNT(id) FROM employes";
$data = mysqli_query($conn,$sql);
$emp = mysqli_fetch_row($data);

$sql = "SELECT COUNT(id) FROM products";
$data = mysqli_query($conn,$sql);
$product = mysqli_fetch_row($data);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

         <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">speed</span>
                    <h1>Dashboard</h1>
                </div>

            </div>

            <div class="data">
                <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo $cust[0]; ?></h3>
                            <p>Customers</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-users-between-lines dash-blue"></i>
                        </div>
                </div>
                <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $vendor[0]; ?></h3>
                            <p>Vendors</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-people-group dash-danger"></i>
                        </div>
                </div>
                <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $emp[0]; ?></h3>
                            <p>Employees</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user-tie dash-sucsess"></i>
                        </div>
                </div>
                <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $product[0]; ?></h3>
                            <p>Total Product</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping dash-warning"></i>
                        </div>
                </div>
                <div class="small-box bg-info">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Total Stock</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-cubes-stacked dash-info"></i>
                        </div>
                </div>
                <div class="small-box gray-1">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Total Stock Price</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-dollar-sign dash-gray"></i>
                        </div>
                </div>
                <div class="small-box brown-1">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Total Income</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-coins dash-brown"></i>
                        </div>
                </div>
                <div class="small-box teal-1">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Total Outcome</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-money-bill-trend-up dash-teal"></i>
                        </div>
                </div>
                <div class="small-box salmon-1">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Total Profit</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-dollar-sign dash-salmon"></i>
                        </div>
                </div>



            </div>
        </div>

<?php include("templete/footer.php")?>
