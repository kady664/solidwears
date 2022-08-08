<?php
if(isset($_POST["typeID"])){
$id = $_POST["typeID"];
$type = $_POST["typeName"];


$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE type SET name = '$type' WHERE id='$id'";
mysqli_query($conn , $sql);

header("Location: type.php");
};

$id = $_GET["id"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM type WHERE id = '$id' ";
$data = mysqli_query($conn , $sql);
$type = mysqli_fetch_assoc($data);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Type</h1>
                </div>
                <a class="add-product" href="type.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="type_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="hidden"  class="form-control" name="typeID" value="<?php echo $type["id"]?>">
                    </div>
                </div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  Type Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="typeName" value="<?php echo $type["name"]?>">
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