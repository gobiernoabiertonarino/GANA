// JavaScript Document
// JavaScript Document
function gana(var1,var2,var3,var4,var5,var6,var7,var8,var9,acc,pag,div){
        var parametros = {
                "var1" : var1, "var2" : var2, "var3" : var3, "var4" : var4, "var5" : var5, "var6" : var6, "var7" : var7, "var8" : var8, "var9" : var9, "acc" : acc                
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
		
		for(i=1;i<1000;i++){$("#obj"+i).val('');}
}


/**/
