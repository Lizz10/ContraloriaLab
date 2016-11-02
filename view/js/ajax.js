function cargar(){
$.ajax({
    type:'POST',
    url:'../intercargar.php',
    dataType:'HTML',
    data:{    
    },
    beforeSend:function(){
        $('#pre').html('Cargando...');
    },
    success:function(datos){
        $('#pre').html(datos);
    },
    error:function(jqXHR,texStatus,error){
    }
 })   
}