document.addEventListener('DOMContentLoaded', function(){

	if(document.querySelector('#form_login')){

		let form = document.querySelector('#form_login');

		form.onsubmit = function(e){
			e.preventDefault();

			let user = document.querySelector('#text-user').value;
			let pass = document.querySelector('#text-pass').value;

			if(user == "" || pass == ""){

				alert("Favor ingresar todos los campos");
				return false;

			}else{

				var request = (window.XMLHttpRequest) ? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
				var ajaxUrl = base_url+"Home/login";
				var formData = new FormData(form);
				request.open("POST", ajaxUrl, true);
				request.send(formData);
				

				request.onreadystatechange = function(){
					if(request.readyState == 4 && request.status == 200){

						var objData = JSON.parse(request.responseText);
						
						if(objData.status){

							$("#mensaje").html(objData.msg);
							window.location = base_url+"Monitoreo";
							
						}else{

							$("#mensaje").html(objData.msg);
							document.querySelector('#text-user').value = "";
							document.querySelector('#text-pass').value = "";
						}
						
					}
				}

			}

		}
	}
})




