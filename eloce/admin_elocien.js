$(document).ready(function() {
    $('.add_elocien').hide();
    $('.edit_elocien').hide();
} );

$('.button_add_elo').click(function(){
    $('.add_elocien').show();
    $('.edit_elocien').hide();
})

$('#button_back_add').click(function(){
    $('.add_elocien').hide();
    console.log("add_hide");
})

$('#button_back_edit').click(function(){
    $('.edit_elocien').hide();
    console.log("edit_hide");

})


$('.button_edit_elo').click(function(){
    $('.edit_elocien').show();
    $('.add_elocien').hide();

    var id_current_elocien = $(this).attr('value');
    console.log(id_current_elocien);

    $('#lastname_edit').val($('#elocien_lastname_'+id_current_elocien).val());
    $('#firstname_edit').val($('#elocien_firstname_'+id_current_elocien).val());
    $('#date_birth_edit').val($('#elocien_birth_'+id_current_elocien).val());
    $('#formation_edit').val($('#formation_id_'+id_current_elocien).val());
    $('#date_begin_edit').val($('#elocien_date_begin_'+id_current_elocien).val());
    $('#date_end_edit').val($('#elocien_date_end_'+id_current_elocien).val());
    $('#email_edit').val($('#elocien_email_'+id_current_elocien).val());
    $('#elocien_id_edit').val($('#elocien_id_'+id_current_elocien).val());
    //console.log($('#elocien_id_'+id_current_elocien).val());

})

$('.button_add_elo_confirm').click(function(){
    console.log("ADD BTN");
    $('.add_elocien').hide();
})

$('.button_edit_elo_confirm').click(function(){
    console.log("EDIT BTN");
    $('.edit_elocien').hide();
})
