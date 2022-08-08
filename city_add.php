<?php
if(isset($_POST["cityName"])){
$city = $_POST["cityName"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "INSERT INTO cities (name) VALUES ('$city')";
mysqli_query($conn , $sql);
header("Location: cities.php");
};
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">add_circle</span>
                <h1>Add New City</h1>
                </div>
                <a class="add-product" href="cities.php">Veiw All</a>
            </div>
	    <form class="form-horizontal" action="city_add.php" method="post"  >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> City Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control"  name="cityName">
					</div>
				</div>


				<div class="form-group">
					<label for="" class="col-sm-3 control-label"></label>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success" >Add City</button>
					</div>
				</div>
			</div>
		</div>

	    </form>
    </div>

<?php include("templete/footer.php")?>
