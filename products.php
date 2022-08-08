<?php
$conn = mysqli_connect('localhost','root','','solidwears');
$sql = "SELECT products.* ,
 type.name As typeName ,
 brand.name As brandName ,
 category.name As catName ,
 color.name As colorName,
 size.name As sizeName  FROM products , type  , brand ,category , color , size
 WHERE type.id =products.type_id
 AND  brand.id = products.brand_id
 AND category.id = products.category_id
 AND color.id = products.color_id
 AND size.id = products.size_id ";
$data = mysqli_query($conn , $sql);

include ("templete/header.php");
include ("templete/nav-bar.php");
?>

        <div class="content">
            <div class="product-title">
                <div class="title">
                    <span class="material-symbols-outlined">visibility</span>
                    <h1>View Product</h1>
                </div>
                     <a class="add-product" href="product_new.php">Add Product</a>
                </div>
               <div class="recent-order product">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Product Name</th>
                                <th>Unit Cost</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Brand</th>
                                <th>color</th>
                                <th>size</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while($product = mysqli_fetch_assoc($data)){ ?>
                            <tr>
                                <td><?php echo $product["id"] ?></td>
                                <td class="image"><img src="images/nike2.jpg"></td>
                                <td><?php echo $product["name"] ?></td>
                                <td class="warning"><?php echo $product["unit_cost"] ?></td>
                                <td class="primary"><?php echo $product["unit_price"] ?></td>
                                <td><?php echo $product["stock"] ?></td>
                                <td><?php echo $product["catName"] ?></td>
                                <td><?php echo $product["typeName"] ?></td>
                                <td><?php echo $product["brandName"] ?></td>
                                <td><?php echo $product["colorName"] ?></td>
                                <td><?php echo $product["sizeName"] ?></td>
                                <td class="Action">
                                   <a href="product_edit.php?id=<?php echo $product["id"]?>" class="btn btn-edit">Edit</a>
                                   <a href="product_delete.php?id=<?php echo $product["id"]?>" class="btn btn-danger">Delete</a>
                                </td>
                                <?php } ?>


                        </tbody>
                    </table>
                </div>
         </div>

<?php include("templete/footer.php")?>
