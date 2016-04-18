var template = (function() {
  var pathLoad;
  var newHtml;
  var animation = false;
  var animation_type;
  var speed = 1000;


  return {
    setPath: function(path){
      pathLoad = path;
    },
    load: function(template, target, data, callback){
    	var dataToReplace = data.data;
       	$.ajax({
		  url: pathLoad+template,
		  method: "GET",
		  crossDomain : true,
		  //data: { name : name },
		  dataType: "html"
		}).success(function(html) {
			
			//recorro el objecto data y reemplazo la info por los tags
			newHtml = html;
			for(var index in dataToReplace) { 
				
				//console.log('replace '+ index + ' to '+dataToReplace[index]);
				if(dataToReplace.hasOwnProperty(index)){

					var tag = '<%'+index+'%>';
					var regex = new RegExp(tag);
					newHtml = newHtml.replace(regex, dataToReplace[index]);
									  
				} 
			}


		    
			//muestro el html en donde corresponda
			$(target).html(newHtml);

			//eecuto el callback
			callback;
		}).fail(function() {
			console.log("Hubo un error al cargar el template: " + template );
		});
    },
    each: function(template, target, data, callback){
    	
    	var template_id = data.id;
    	var dataToReplace = data.data;
       	$.ajax({
		  url: pathLoad+template,
		  method: "GET",
		  crossDomain : true,
		  //data: { name : name },
		  dataType: "html"
		}).success(function(html) {
			var class_animate = '<%animation_type%>';
			var regex_class = new RegExp(class_animate, "g");
			var finalHtml = html.replace(regex_class, animation_type);

			var template_id_regex = '<%template_id%>';
			var regex_template_id = new RegExp(template_id_regex, "g");
			var finalHtmlWithId = finalHtml.replace(regex_template_id, template_id);

			//recorro el objecto data y reemplazo la info por los tags
			newHtml = finalHtmlWithId;
			for(var index in dataToReplace) { 
				
				//console.log('replace '+ index + ' to '+dataToReplace[index]);
				if(dataToReplace.hasOwnProperty(index)){

					var tag = '<%'+index+'%>';
					var regex = new RegExp(tag, "g");
					newHtml = newHtml.replace(regex, dataToReplace[index]);
					
								  
				} 
				
			}

			if(animation){

					
					$(target).append(newHtml);
						
							$('#template-'+template_id).removeClass('animate-hidden');

						
					
					
				}
			/*if(animation){
				if(animation_type == 'fade'){
					$(target).append(newHtml).hide().fadeIn(speed);
				}else if(animation_type == 'slide'){
					$(target).append(newHtml).hide().SlideDown(speed);
				}else{
					console.log('El tipo de animacion es incorrecto, por favor use fade o slide');
				}
			}else{
				$(target).append(newHtml);
			}	*/		

			//eecuto el callback
			callback;
		}).fail(function() {
			console.log("Hubo un error al cargar el template: " + template );
		});
    },
    setAnimation: function(type, speed){
    	//type: fade, slide
    	//speed: number (default 1000)
    	animation = true;
    	animation_type = type;
    	speed = speed;
    }
  };
})();