$("#button-blue").on("click", function() {
    
    var txt_name = $("#name").val();
    var txt_email = $("#email").val();
    var txt_commentary = $("#commentary").val();

    $.ajax({
        url: "http://104.154.238.79",
        
        type: "post",
        data: {name: txt_name, commentary: txt_commentary, email: txt_email},
        beforeSend: function() {
        
            console.log("Tentando enviar os dados....");

        }
    }).done(function(e) {
        alert("Dados Salvos");
    })

});