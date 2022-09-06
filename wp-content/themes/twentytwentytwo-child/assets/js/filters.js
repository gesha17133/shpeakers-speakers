jQuery(document).ready(function($){
    const positions_select = $('.position-terms.select_filter');
    const country_select = $('.country-terms.select_filter');

    $('.select_filter').select2().on("change", function(e){    
        
        $.ajax({
            type : "post",
            url: ajax_var.url,
            dataType: 'text',
            data: { 
                nonce: ajax_var.nonce,
                action: 'speakers-filter',
                positions: positions_select.val(),
                countries: country_select.val(),
            }, 
            success: function(response){
                $('.loop-speakers').html(response);
            },
            error: function (xhr, thrownError) {
                console.log( thrownError );
            }
        });

    });
});