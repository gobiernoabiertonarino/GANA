function inicio(obj1,obj2,obj3,acc,div,pag){
        
        var parametros = {
                "obj1" : obj1, "obj2" : obj2, "obj3" : obj3, "acc" : acc              
        };
        $.ajax({
                data:  parametros,
                url:   pag,
                type:  'post',
                beforeSend: function () {
                        $(div).html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $(div).html(response);
                }
        });
		
}