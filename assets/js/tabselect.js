$(function() {
    $('.tab-select a').click(function (e) {
        e.preventDefault();
        // $(this).tab('show');
        var option = $(this).data('id');
        //console.log(option);
        var id = $(this).closest('.tab-select').attr('id');
        var select = $("select#"+id+"_select");
        select.val(option);
        select.trigger("change");
    });

    $('.tab-filter').on('input', function (e) {
        var filterValue = $(this).val().toLowerCase();

        // Loop through each list item
        $('.tab-select .nav-item').each(function() {
            // Get the text content of the anchor tag within the list item
            var itemText = $(this).find('.nav-link').text().toLowerCase();

            // Check if the item text contains the filter value
            if (itemText.indexOf(filterValue) > -1) {
                // If it does, show the list item
                $(this).show();
            } else {
                // If it doesn't, hide the list item
                $(this).hide();
            }
        });
    });
});