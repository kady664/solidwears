<?php
if(isset($_POST["pID"])){
$id = $_POST["pID"];
$cat = $_POST["pCategory"];
$name = $_POST["pName"];
$brand = $_POST["pBrand"];
$u_cost = $_POST["pUnitCost"];
$u_price = $_POST["pUnitPrice"];
$stock = $_POST["pStock"];
$size = $_POST["pSize"];
$color = $_POST["pColor"];
$desc = $_POST["pDescription"];
$type = $_POST["pType"];

$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "UPDATE products SET category_id = '$cat', name = '$name', brand_id = '$brand', unit_cost = '$u_cost', unit_price = '$u_price' , stock = '$stock' , size_id = '$size' , color_id = '$color' , description = '$desc' , type_id = '$type' WHERE id = '$id'"; 

mysqli_query($conn , $sql);

header("Location: products.php");
};

$id = $_GET["id"];
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT * FROM products WHERE id = '$id'";
$sql_cat = "SELECT * FROM category";
$sql_brand = "SELECT * FROM brand";
$sql_color = "SELECT * FROM color";
$sql_size = "SELECT * FROM size";
$sql_type = "SELECT * FROM type";
$data = mysqli_query($conn,$sql);
$product = mysqli_fetch_assoc($data);
$cat_list= mysqli_query($conn,$sql_cat);
$brand_list= mysqli_query($conn,$sql_brand);
$color_list= mysqli_query($conn,$sql_color);
$size_list= mysqli_query($conn,$sql_size);
$type_list= mysqli_query($conn,$sql_type);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>   
  
        <div class="content">
        <div class="product-title add">
            <div class="title">
                <span class="material-symbols-outlined">edit</span>
                <h1>Edit Product</h1>
                </div>
                <a class="add-product" href="products.php">Veiw All</a>
            </div>                
	    <form class="form-horizontal" action="product_edit.php" method="post" >

		<div class="box box-info add">
			<div class="box-body">
				<div class="form-group">
					<div class="col-sm-4">
						<input type="hidden"  class="form-control" name="pID" value="<?php echo $product["id"]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"> Category  <span>*</span></label>
					<div class="col-sm-4">
						<select class="form-control" name="pCategory">
							<?php while($cat = mysqli_fetch_assoc($cat_list)) { ?>
                                <option <?php if($product["category_id"] == $cat["id"]) {echo "SELECTED";}?> value=<?php echo $cat["id"] ?> ><?php echo $cat["name"] ?></option>
                            <?php } ?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Product Name <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="pName" value="<?php echo $product["name"]?>">
					</div>
				</div>	
				 <div class="form-group">
					<label for="" class="col-sm-3 control-label">Type <span>*</span></label>
					<div class="col-sm-4">
						<select class="form-control" name="pType">
							<?php while($type = mysqli_fetch_assoc($type_list)) { ?>
                                <option <?php if($product["type_id"] == $type["id"]) {echo "SELECTED";}?> value=<?php echo $type["id"] ?> ><?php echo $type["name"] ?></option>
                            <?php } ?>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Brand <span>*</span></label>
					<div class="col-sm-4">
						<select class="form-control" name="pBrand">
							<?php while($brand = mysqli_fetch_assoc($brand_list)) { ?>
                                <option <?php if($product["brand_id"] == $brand["id"]) {echo "SELECTED";}?> value=<?php echo $brand["id"] ?> ><?php echo $brand["name"] ?></option>
                            <?php } ?>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Select Size</label>
					<div class="col-sm-4">
						<select class="form-control" name="pSize">
							<?php while($size = mysqli_fetch_assoc($size_list)) { ?>
                                <option <?php if($product["size_id"] == $size["id"]) {echo "SELECTED";}?> value=<?php echo $size["id"] ?> ><?php echo $size["name"] ?></option>
                            <?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Select Color</label>
					<div class="col-sm-4">
						<select class="form-control" name="pColor">
							<?php while($color = mysqli_fetch_assoc($color_list)) { ?>
                                <option <?php if($product["color_id"] == $color["id"]) {echo "SELECTED";}?> value=<?php echo $color["id"] ?> ><?php echo $color["name"] ?></option>
                            <?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Unit Cost <br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="pUnitCost" value="<?php echo $product["unit_cost"]?>">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Unit Price <span>*</span><br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="pUnitPrice" value="<?php echo $product["unit_price"]?>">
					</div>
				</div>	

				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Quantity <span>*</span></label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="pStock" value="<?php echo $product["stock"]?>">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Description</label>
					<div class="col-sm-8">
						<textarea  id='summernote' class="form-control" cols="30" rows="10" id="editor1" name="pDescription" value="<?php echo $product["description"]?>"></textarea>
					</div>
				</div>

				<!--<div class="form-group">
					<label for="" class="col-sm-3 control-label">Select Vendor</label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="pVendor">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Select Photo <span>*</span></label>
					<div class="col-sm-4" style="padding-top:4px;">
						<input type="file" name="p_featured_photo">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Other Photos</label>
					<div class="col-sm-4" style="padding-top:4px;">
                        <div class="upload-btn">
                            <input type="file"  style="margin-bottom:5px;">
                        </div>
                    </div>       
                    <a href="#" class="delete btn btn-danger">X</a>    
                    <a href="#" class="btn btn-primary" style="margin-left:5px">Add item</a>    
					
				</div>-->
				 
				<div class="form-group">
					<label for="" class="col-sm-3 control-label"></label>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success pull-left" name="form1">Add Product</button>
					</div>
				</div>
			</div> 
		</div>

	    </form>
    </div>

<?php include("templete/footer.php")?>