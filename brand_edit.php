<?php
if(isset($_POST["brandName"])){
$brand = $_POST["brandName"];
$id = $_POST["brandID"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE brand SET name = '$brand' WHERE id ='$id'";
mysqli_query($conn , $sql);
header("Location: brands.php");
};

$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','solidwears');

$sql = "SELECT * FROM brand WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$brand = mysqli_fetch_assoc($data);

include ("templete/header.php");
include ("templete/nav-bar.php");

 ?>
 
        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Brand</h1>
                </div>
                <a class="add-product" href="brands.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="brand_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
               

                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <input Type="hidden" class="form-control" name="brandID" value="<?php echo $brand["id"]; ?>">
                    </div>
                </div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  Brand Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="brandName" value="<?php echo $brand["name"]; ?>">
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
 
<?php  include("templete/footer.php");?>