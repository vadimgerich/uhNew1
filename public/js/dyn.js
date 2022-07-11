$(document).ready(function (){

    $('.basicAutoSelect').autoComplete();

    $("#search_tickets").submit(function (e){
        e.preventDefault();
        $.ajax({
            url: "/ajax_call",
            type: "GET",
            data:{
                phone_number: $("#search_ticket").val(),
                back_to: false
            },
            success:function(response){
                $(".box-body").html(response);
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        })
    })

    $(document).on("change","#is_infoservice", function (e){
        e.preventDefault();
        const is_infoservice = document.querySelector("#is_infoservice");
        if(is_infoservice.checked===true){
            $("#infoservice_type_div").slideDown();
        }else{
            $("#infoservice_type_div").slideUp();
        };
    })

    $(document).on("change","#is_extended", function (e){
        e.preventDefault();
        const is_extended = document.querySelector("#is_extended");
        if(is_extended.checked===true){
            $("#volonteur_div").slideDown();
            $("#location_div").slideDown();
            $("#cp_div").slideDown();
            $("#city_id_div").slideDown();
            $("#address_i_div").slideDown();
            $("#featured_needs_div").slideDown();
        }else{
            $("#volonteur_div").slideUp();
            $("#location_div").slideUp();
            $("#cp_div").slideUp();
            $("#city_id_div").slideUp();
            $("#address_i_div").slideUp();
            $("#featured_needs_div").slideUp();
        };
    })

    $('.back_to_catalog_btn').click(function (e){
        e.preventDefault();
        var id = $(this).id().substr(17);
        alert(id);
        // $("#ticket_div_8").
    })

    $(".edit-ticket-btn").click(function (e){
        e.preventDefault();

        var id = $(this).data('id');
        $.ajax({
            url: "/ajax_call",
            type: "GET",
            data:{
                phone_number: $('#ticket_phone_i_'+id).val(),
                back_to: 'ticket_phone_i'+id
            },
            success:function(response){
                $("#ticket_div_"+id).html(response)
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        })

        // $.ajax({
        //     url: "/ajax_call",
        //     type: "GET",
        //     data:{
        //         phone_number: $("#search_ticket").val()
        //     },
        //     success:function(response){
        //         $(".box-body").html(response);
        //     },
        //     error: function(xhr, status, error) {
        //         var err = eval("(" + xhr.responseText + ")");
        //         alert(err.Message);
        //     }
        // })
    });
});
