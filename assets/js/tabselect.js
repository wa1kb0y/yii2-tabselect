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
    
});