
$(document).ready(function () {
    
    $(".error").hide();
    $("#tabella_coltelli").hide();
    
    $('#filtra').click(function(e){
        // prevent submit
        e.preventDefault(); 
        var _nome = $("#nome").val();
        var _descrizione = $("#descrizione").val();
        
        var par = {
            nome: _nome,
            descrizione: _descrizione
        };
        $.ajax({
            url: 'user/filtra_modelli',
            data : par,
            dataType: 'json',
            success: function (data, state) {
                    if(data['models'].length === 0){
                        $("#tabella_coltelli").hide();
                    }else{
                        $("#tabella_coltelli").show();
                        //delete all the table entries
                        $("#tabella_coltelli tbody").empty();
                       
                        // add rows
                        var i = 0;
                        for(var key in data['models']){
                            var model = data['models'][key];
                            $("#tabella_coltelli tbody").append(
                                "<tr id=\"row_" + i + "\" >\n\
                                       <td>a</td>\n\
                                       <td>a</td>\n\
                                       <td>a</td>\n\
                                       <td>a</td>\n\
                                 </tr>");
                            if(i%2 == 0){
                                $("#row_" + i).addClass("alt-row");
                            }
                            
                            var colonne = $("#row_"+ i +" td");
                            $(colonne[0]).text(model['id']);
                            $(colonne[1]).text(model['data']);
                            $(colonne[2]).text(model['nome']);
                            $(colonne[3]).text(model['descrizione']);
                            i++;
                            
                           
                        }
                    }               
            },
            error: function (data, state) {
            }
        
        });
        
    })
});