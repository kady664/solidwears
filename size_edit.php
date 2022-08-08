<?php
if(isset($_POST["sizeName"])){

$size = $_POST["sizeName"];
$id = $_POST["sizeID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE size SET name = '$size' WHERE id = '$id'";
mysqli_query($conn ,$sql);
header("Location: sizes.php");
};

$id = $_GET["id"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM size WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$size = mysqli_fetch_assoc($data);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Size</h1>
                </div>
                <a class="add-product" href="sizes.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="size_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="hidden"  class="form-control" name="sizeID" value="<?php echo $size["id"] ?>">
                    </div>
                </div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  Size Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="sizeName" value="<?php echo $size["name"] ?>">
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