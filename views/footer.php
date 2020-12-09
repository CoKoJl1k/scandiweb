</div>
<script>

 // displaying the required fields when selecting a type of product
    $( "#productType" ).on( "change", function() {

        let sizeDVD = $('#sizeDVD').css('display','none');
        let weightBook = $('#weightBook').css('display','none');
        let HxWxLxFurn = $('#HxWxLxFurn').css('display','none');

        switch ($( this ).val()) {
            case 'DVD-disc':
                sizeDVD.css('display','block');
                weightBook.css('display','none');
                HxWxLxFurn.css('display','none');
                break;
            case 'Book':
                weightBook.css('display','block');
                sizeDVD.css('display','none');
                HxWxLxFurn.css('display','none');
                break;
            case 'Furniture':
                HxWxLxFurn.css('display','block');
                sizeDVD.css('display','none');
                weightBook.css('display','none');
                break;
            default:
                sizeDVD.css('display','none');
                weightBook.css('display','none');
                HxWxLxFurn.css('display','none');
        }
    });
</script>

<script>

    // deleting of required products
    $( "#buttonApply" ).on( "click", function() {
        let select_value = $( "#selectDeleteAction").val();

        if ( select_value == 'mass') {
            let arr_f01 = [];
            $("input[name='product_list']:checked").each(function () {
                arr_f01.push($(this).val());
            });
            let list_of_id = arr_f01.join();
            $.post("<?php echo URL; ?>product/list/delete/" + list_of_id,
            function (data, status) {
                if (status === 'success') {
                    document.location.href = "<?php echo URL; ?>product/list";
                } else {
                    document.location.href = "<?php echo URL; ?>product/error";
                }
            });
        }
    });
</script>


<div id="footer">
    <p>(C) Footer</p>
</div>



</body>
</html>