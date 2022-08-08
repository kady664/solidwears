<?php
if(isset($_POST["colorName"])){
$city = $_POST["colorName"];
$id = $_POST["colorID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE color SET name = '$city' WHERE id ='$id'";
mysqli_query($conn , $sql);

header("Location: colors.php");
};
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','solidwears');

$sql = "SELECT * FROM color WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$color = mysqli_fetch_assoc($data);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Color</h1>
                </div>
                <a class="add-product" href="colors.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="color_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <input type="hidden"  class="form-control" name="colorID" value="<?php echo $color["id"]; ?>">
                    </div>
                </div>
                
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  Color Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="colorName" value="<?php echo $color["name"]; ?>">
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