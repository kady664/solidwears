<?php
if(isset($_POST["catName"])){
$cat = $_POST["catName"];
$id = $_POST["catID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE category SET name = '$cat' WHERE id ='$id'";
mysqli_query($conn , $sql);

header("Location: category.php");
};

$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','solidwears');

$sql = "SELECT * FROM category WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$cat = mysqli_fetch_assoc($data);

include ("templete/header.php");
include ("templete/nav-bar.php");
 ?>
 
 
        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Category</h1>
                </div>
                <a class="add-product" href="category.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="category_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
                <div class="form-group">
				<div class="col-sm-4">
                    <input Type="hidden" class="form-control" name="catID" value="<?php echo $cat["id"]; ?>">
                </div>
                </div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  Brand Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="catName" value="<?php echo $cat["name"]; ?>">
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

<?php include("templete/footer.php");?>