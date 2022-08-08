<?php
if(isset($_POST["cityName"])){
$city = $_POST["cityName"];
$id = $_POST["cityID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE cities SET name = '$city' WHERE id ='$id'";
mysqli_query($conn , $sql);

header("Location: cities.php");
};

$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','solidwears');

$sql = "SELECT * FROM cities WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$city = mysqli_fetch_assoc($data);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit City</h1>
                </div>
                <a class="add-product" href="cities.php">Veiw All</a>
            </div>
	    <form class="form-horizontal" action="city_edit.php" method="post">

		<div class="box box-info add">
			<div class="box-body">
        <div class="form-group">
          
          <div class="col-sm-4">
            <input type="hidden"  class="form-control" name="cityID" value="<?php echo $city["id"]; ?>">
          </div>
        </div>

				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  city Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="cityName" value="<?php  echo $city["name"]; ?>">
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