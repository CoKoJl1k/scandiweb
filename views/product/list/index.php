<div class=".container-fluid">
    <div class="row" id="rowSave">
        <div class="col-9" ><h4 >Product List</h4></div>
        <div class="col-3" >
            <div class="input-group">
                <select class="custom-select" id="selectDeleteAction">
                    <option >Choose...</option>
                    <option value="mass" selected>Mass delete action</option>
                </select>
                <div class="input-group-append">
                    <button id = "buttonApply" class="btn btn-outline-secondary" type="button">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <?php
        foreach ($this->productList as $key => $value) {
            echo '<div class="col-sm-3">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<p class="card-text"><input type="checkbox" name="product_list" value="'. $value["id"]. '"/></p>';
            echo '<h5 class="text-center">'. $value["sku"].$value["id"] .'</h5>';
            echo '<h5 class="text-center">'. $value["name"]. '</h5>';
            echo '<h5 class="text-center">'. $value["price"]. ' $</h5>';
            echo '<h5 class="text-center">'. $value["size"] = $value['size'] == 0 ? '' : 'Size: '.$value['size']. ' MB'.'</h5>';
            echo '<h5 class="text-center">'. $value["weight"] = $value['weight'] == 0 ? '' : 'Weight: '.$value['weight'].  ' KG'.'</h5>';
            echo '<h5 class="text-center">'. $value["height"] = $value['height'] == 0 ? '' : 'Dimension: '.$value['height']. 'x'. $value["width"].'x'. $value["length"]. '</h5>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>


