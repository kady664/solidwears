<?php
if(isset($_POST["eName"])){
$n = $_POST["eName"];
$p = $_POST["ePhone"];
$a = $_POST["eAddress"];
$e = $_POST["eEmail"];
$c = $_POST["eCity"];
$id = $_POST["eID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE employes SET name = '$n', phone = '$p', address = '$a', email = '$e', city_id = '$c' WHERE id = '$id'"; 

mysqli_query($conn , $sql);

header("Location: employees.php");
};

$id = $_GET["id"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM employes WHERE id= '$id'";
$data = mysqli_query($conn,$sql);
$emp = mysqli_fetch_assoc($data);

$sql_city = "SELECT * FROM cities";
$city_list = mysqli_query($conn,$sql_city);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>     

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Employee</h1>
                </div>
                <a class="add-product" href="employees.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="employee_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<div class="col-sm-4">
						<input type="hidden"  class="form-control" name="eID" value="<?php echo $emp["id"]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="eName" value="<?php echo $emp["name"]?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="ePhone" value="<?php echo $emp["phone"]?>">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Address <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="eAddress" value="<?php echo $emp["address"]?>">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="eEmail" value="<?php echo $emp["email"]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">City <span>*</span></label>
					<div class="col-sm-4">
						<select class="form-control" name="eCity">
							<?php while($city = mysqli_fetch_assoc($city_list)) { ?>
                                <option <?php if($emp["city_id"] == $city["id"]) {echo "SELECTED";}?> value=<?php echo $city["id"] ?> ><?php echo $city["name"] ?></option>
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