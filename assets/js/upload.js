$(document).ready(function(){

	// Variables globales
	var input_name;
	var folder;
	var res_upload;
	var tipo;
	var error = 0;

	//Abre ventana para buscar archivo
	$(".adjuntar").click(function(evento){
		evento.preventDefault();

		input_name = $(this).data('file');
		folder     = $(this).data('folder');
		res_upload = $(this).data('res');
		tipo	   = $(this).data('tipo');
		
		$("#"+input_name).click();
	});

	//Carga el archivo
	$('.input_file').change(function(){
		var url = "upload.php";
		var inputFile = document.getElementById(input_name);
		var file = inputFile.files[0];
		var data = new FormData();


		data.append('input',input_name);
		data.append('archivo',file);
		data.append('folder',folder);
		data.append('uniqid',input_name);


		
		var reader = new FileReader();
	    var image  = new Image();

	    reader.readAsDataURL(file);  
	    reader.onload = function(_file){
	        image.src    = _file.target.result;
	        image.onload = function() {
	            var w = this.width,
	                h = this.height;

                if(tipo=='slide')
                {
                	if(w!=1920 || h!=550)
                	{
                		alert('La dimensión de la imagen debe de ser: 1920 x 550');
                		error=1;
                	}                	
                }
                else if(tipo=='banner')
                {
                	if(w!=165 || h!=80)
                	{
                		alert('La dimensión de la imagen debe de ser: 165 x 80');
                		error=1;
                	}  
                }


                if(error==1)
			    {
			    	error=0;

			    	$(res_upload).html('<button type="button" class="btn btn-warning btn-large" style="cursor: default"><i class="fa fa-times"></i></button>');
			    	return false;
			    }
			    else
			    {
			    	error=0;

			    	$.ajax({
						url:url,
						type:'POST',
						contentType:false,
						data:data,
						processData:false,
						cache:false
					}).done(function(msg) {
						$(res_upload).html(msg);
					});
			    }
	        };    
	    };
	});
});