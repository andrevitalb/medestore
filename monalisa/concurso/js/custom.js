/*------------- Version Selector -----------------*/

function vers_soft() {
	document.getElementById('version_soft').style.border = '3.5px solid rgb(29, 154, 206)';
	document.getElementById('version_mild').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_hard').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_ultra').style.border = '3.5px solid rgba(0,0,0,0)';
}

function vers_mild() {
	document.getElementById('version_soft').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_mild').style.border = '3.5px solid rgb(29, 154, 206)';
	document.getElementById('version_hard').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_ultra').style.border = '3.5px solid rgba(0,0,0,0)';
}

function vers_hard() {
	document.getElementById('version_soft').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_mild').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_hard').style.border = '3.5px solid rgb(29, 154, 206)';
	document.getElementById('version_ultra').style.border = '3.5px solid rgba(0,0,0,0)';
}

function vers_ultra() {
	document.getElementById('version_soft').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_mild').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_hard').style.border = '3.5px solid rgba(0,0,0,0)';
	document.getElementById('version_ultra').style.border = '3.5px solid rgb(29, 154, 206)';
}

//---------- Validate ---------------//

function validate() {
	var pass = 0;
	var val = 0;
	var ver = document.getElementsByName("version");
	var codigo = document.getElementById("codigo").value.length;
	var seller = document.getElementById("seller").value.length;
	var seller_str = document.getElementById("seller").value;

    for (var i = 0, len = ver.length; i < len; i++) {
    	if (ver[i].checked) {
    		val++;
    		pass++;
    	}
    }

    if(!val) document.getElementById("notifs").innerHTML = '<div class="alert alert-warning alert-dismissible" role="alert" id = "select_ver"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Atención!</strong> Selecciona una versión.</div>';

	if(codigo == 0) {
		document.getElementById("codigo").placeholder = 'Campo requerido';
		document.getElementById("codigo").style.color = 'rgb(224, 29, 29)';
		document.getElementById("notifs").innerHTML += '<div class="alert alert-warning alert-dismissible" role="alert" id = "add_code"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Atención!</strong> Ingrese un código.</div>';
	}
	// else if(codigo < 9 || codigo > 9){
	// 	document.getElementById("notifs").innerHTML += '<div class="alert alert-warning alert-dismissible" role="alert" id = "long_code"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Atención!</strong> El código debe de contener 9 caracteres.</div>';
	// 	document.getElementById("codigo").style.color = 'rgb(224, 29, 29)';
	// }
	else {
		document.getElementById("codigo").placeholder = 'Código';
		document.getElementById("codigo").style.color = 'rgb(85, 85, 85)';
		pass++;
	}

	if(seller == 0) {
		document.getElementById("seller").placeholder = 'Campo requerido';
		document.getElementById("seller").style.color = 'rgb(224, 29, 29)';
		document.getElementById("notifs").innerHTML += '<div class="alert alert-warning alert-dismissible" role="alert" id = "add_seller"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Atención!</strong> Ingrese el nombre del vendedor.</div>';
	}
	else {
		document.getElementById("seller").placeholder = 'Vendedor';
		document.getElementById("seller").style.color = 'rgb(85, 85, 85)';
		pass++;
	}

	if(/\d/.test(seller_str)) {
		document.getElementById("seller").style.color = 'rgb(224, 29, 29)';
		document.getElementById("notifs").innerHTML += '<div class="alert alert-warning alert-dismissible" role="alert" id = "seller_number"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Atención!</strong> El nombre del vendedor no puede contener números.</div>';
	}
	else {
		document.getElementById("seller").style.color = 'rgb(85, 85, 85)';
		pass++;
	}

	if(pass == 4) document.getElementById("validateCheck").checked = true;
}