<?php
if(isset($_POST["vName"])){
$n = $_POST["vName"];
$p = $_POST["vPhone"];
$a = $_POST["vAddress"];
$e = $_POST["vEmail"];
$c = $_POST["vCity"];
$id = $_POST["vID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE vendors SET name = '$n', phone = '$p', address = '$a', email = '$e', city_id = '$c' WHERE id = '$id'"; 
mysqli_query($conn , $sql);

header("Location: vendors.php");
};
$id = $_GET["id"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM vendors WHERE id = '$id' ";
$data = mysqli_query($conn , $sql);
$vendor = mysqli_fetch_assoc($data);

$sql_city = "SELECT * FROM cities";
$city_list= mysqli_query($conn,$sql_city);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>
     
        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Vendor</h1>
                </div>
                <a class="add-product" href="customers.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="vendor_edit.php" method="post">

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
                    <input type="hidden"  class="form-control" name="vID" value="<?php echo $vendor["id"]?>">
                </div>
            
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vName" value="<?php echo $vendor["name"]?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vPhone" value="<?php echo $vendor["phone"]?>">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Address <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vAddress" value="<?php echo $vendor["address"]?>">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vEmail" value="<?php echo $vendor["email"]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">City <span>*</span></label>
					<div class="col-sm-4">
						<select class="form-control" name="vCity">
							 <?php while($city = mysqli_fetch_assoc($city_list)) { ?>
                                <option <?php if($vendor["city_id"] == $city["id"]) {echo "SELECTED";}?> value=<?php echo $city["id"] ?> ><?php echo $city["name"] ?></option>
                            <?php } ?> 
						</select>
                    </div>   
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