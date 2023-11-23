<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page Admin</title>
    

</head>
<body>
    <div>
        
        <h3>Product Details</h3>

        <form action="insert.php" method="POST" enctype="multipart/form-data">

        <label class="form-label">Product Name</label>
        <input type="text" name="pname" class="form-control" placeholder="Enter product name">

        <label class="form-label">Product Price</label>
        <input type="text" name="pprice" class="form-control" placeholder="Enter product price">

        <label class="form-label">Product Image</label>
        <input type="file" name="pimage" class="form-control">

        <label class="form-label">Select Page Category</label>
        <select id="" class="form-select" name="pages">
            <option value="home">Home</option>
            <option value="books">Books & Suggestion</option>
            <option value="dress">Dress & Bags</option>
        </select>

        <button name="submit" class="">Upload</button>

        </form>
    </div>
    

</body>
</html>




