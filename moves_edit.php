<?php

if(isset($_POST["moveName"])){
$move = $_POST["moveName"];
$id = $_POST["moveID"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE move SET name = '$move' WHERE id='$id'";
mysqli_query($conn,$sql);

header("Location: moves.php");
};
$id = $_GET["id"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM move WHERE id = '$id'";
$data = mysqli_query($conn , $sql);
$move = mysqli_fetch_assoc($data);
include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit move</h1>
                </div>
                <a class="add-product" href="moves.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="moves_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
                <div class="form-group">
				<div class="col-sm-4">
                    <input Type="hidden" class="form-control" name="moveID" value="<?php echo $move["id"]; ?>">
                </div>
                </div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">  Move Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="moveName" value="<?php echo $move["name"]; ?>">
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