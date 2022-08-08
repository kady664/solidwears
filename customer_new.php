<?php
if(isset($_POST["cName"])){
$n = $_POST["cName"];
$p = $_POST["cPhone"];
$a = $_POST["cAddress"];
$e = $_POST["cEmail"];
$c = $_POST["cCity"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "INSERT INTO customers (name , address , phone , email , city_id) VALUES ('$n' , '$a' , '$p' , '$e' ,  '$c')";
mysqli_query($conn , $sql); 

header("Location: customers.php");
};

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM cities";
$city_list = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">add_circle</span>
                <h1>Add New Customer</h1>
                </div>
                <a class="add-product" href="customers.php">Veiw All</a>
            </div>
	    <form class="form-horizontal" action="customer_new.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="cName">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="cPhone">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Address <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="cAddress">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="cEmail">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">City <span>*</label>
					<div class="col-sm-4">
						<select class="form-control" name="cCity">
                            <?php while($city = mysqli_fetch_assoc($city_list)) { ?>
                                <option value=<?php echo $city["id"] ?> ><?php echo $city["name"] ?></option>
                            <?php } ?>

						</select>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-3 control-label"></label>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success" >Add Customer</button>
					</div>
				</div>
			</div>
		</div>

	    </form>
    </div>

<?php include("templete/footer.php")?>
