<?php
if(isset($_POST["moveName"])){
$move = $_POST["moveName"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "INSERT INTO move (name) VALUES ('$move')";
mysqli_query($conn,$sql);
header("Location: moves.php");
};

include ("templete/header.php");
include ("templete/nav-bar.php");
?> 

        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">add_circle</span>
                <h1>Add New Move</h1>
                </div>
                <a class="add-product" href="moves.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="moves_add.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Move Name  <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="moveName">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"></label>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success" >Add Move</button>
					</div>
				</div>
			</div>
		</div>

	    </form>
    </div>

<?php include("templete/footer.php")?>