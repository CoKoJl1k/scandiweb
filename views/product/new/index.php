<form method="post" action="<?php echo URL; ?>product/new/create">
    <div class=".container-fluid">
        <div class="row"  id="rowAdd">
            <div class="col-11" >
                <h4 >Product Add </h4>
            </div>
            <div class="col-1" >
                <button class="btn btn-outline-secondary" type="submit" >Save</button>
            </div>
        </div>
    </div>

    <label class="col-1">Name</label><input type="text" name="name" required/><br/>
    <label class="col-1">Price</label><input type="number" name="price" required/><br/>

    <label class="col-1">Type of product</label>
    <select name="type_product" id="productType" >
        <option selected>Choose...</option>
        <option value="DVD-disc">DVD-disc</option>
        <option value="Book">Book</option>
        <option value="Furniture">Furniture</option>
    </select><br/>

    <div id="sizeDVD" >
        <label class="col-1">Size</label><input type="number" name="size"/>
    </div>
    <div id="weightBook" >
        <label class="col-1">Weight</label><input type="number" name="weight"/>
    </div>
    <div id="HxWxLxFurn" >
        <label class="col-1">Height</label><input type="number" name="height"/><br/>
        <label class="col-1">Width</label><input type="number" name="width"/><br/>
        <label class="col-1">Length</label><input type="number" name="length" /><br/>
    </div>
</form>