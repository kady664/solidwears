<?php

if(isset($_POST["cName"])){
$n = $_POST["cName"];
$p = $_POST["cPhone"];
$a = $_POST["cAddress"];
$e = $_POST["cEmail"];
$c = $_POST["cCity"];
$id = $_POST["cID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE customers SET name = '$n', phone = '$p', address = '$a', email = '$e', city_id = '$c' WHERE id = '$id'"; 
mysqli_query($conn , $sql);

header("Location: customers.php");
};

$id = $_GET["id"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM customers WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$cust = mysqli_fetch_assoc($data);

$sql_city = "SELECT * FROM cities";
$city_list = mysqli_query($conn , $sql_city);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Customer</h1>
                </div>
                <a class="add-product" href="customers.php">Veiw All</a>
            </div>
	    <form class="form-horizontal" action="customer_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">


				<div class="form-group">
					<div class="col-sm-4">
						<input type="hidden"  class="form-control" name ="cID" value="<?php echo $cust["id"]; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name ="cName" value="<?php echo $cust["name"]; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name ="cPhone" value="<?php echo $cust["phone"]; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Address <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name ="cAddress" value="<?php echo $cust["address"]; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name ="cEmail" value="<?php echo $cust["email"]; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">City <span>*</span></label>
					<div class="col-sm-4">
						<select class="form-control" name ="cCity" >
							<?php while($city = mysqli_fetch_assoc($city_list)) { ?>
                      <option <?php if($cust['city_id'] == $city['id']){echo "SELECTED" ;} ?> value=<?php echo $city["id"] ?> ><?php echo $city["name"] ?></option>
              <?php } ?>
						</select>
				</div>	

				<div class="form-group">
					<label for="" class="col-sm-3 control-label"></label>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success" >Save</button>
					</div>
				</div>
			</div>
		</div>

	    </form>
    </div>

<?php include("templete/footer.php")?>
