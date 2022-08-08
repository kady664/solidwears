<?php
if(isset($_POST["vName"])){
$n = $_POST["vName"];
$p = $_POST["vPhone"];
$a = $_POST["vAddress"];
$e = $_POST["vEmail"];
$c = $_POST["vCity"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "INSERT INTO vendors (name , address , phone , email , city_id) VALUES ('$n' , '$a' , '$p' , '$e' ,  '$c')";
mysqli_query($conn , $sql); ///// تبعت جمله محددة للداتا بيز

header("Location: vendors.php");
};
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM cities";
$city_list= mysqli_query($conn,$sql);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">add_circle</span>
                <h1>Add New vendor</h1>
                </div>
                <a class="add-product" href="customers.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="vendor_new.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vName">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vPhone">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Address <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vAddress">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="vEmail">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">City <span>*</label>
					<div class="col-sm-4">
						<select class="form-control" name="vCity">
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