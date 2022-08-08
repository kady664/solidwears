<?php
if(isset($_POST["eName"])){
$n = $_POST["eName"];
$p = $_POST["ePhone"];
$a = $_POST["eAddress"];
$e = $_POST["eEmail"];
$c = $_POST["eCity"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "INSERT INTO employes (name , address , phone , email , city_id) VALUES ('$n' , '$a' , '$p' , '$e' ,  '$c')";
mysqli_query($conn , $sql); 

header("Location: employees.php");
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
                <h1>Add New Employee</h1>
                </div>
                <a class="add-product" href="employees.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="employee_new.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="eName">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="ePhone">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Address <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="eAddress">
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="eEmail">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">City <span>*</label>
					<div class="col-sm-4">
						<select class="form-control" name="eCity">
							 <?php while($city = mysqli_fetch_assoc($city_list)) { ?>
                                <option value=<?php echo $city["id"] ?> ><?php echo $city["name"] ?></option>
                            <?php } ?> 
						</select>
				</div>	
			
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"></label>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success" >Add Employee</button>
					</div>
				</div>
			</div>
		</div>

	    </form>
    </div>

<?php include("templete/footer.php")?>