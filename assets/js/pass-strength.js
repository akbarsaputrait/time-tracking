// fungsi untuk mengecek kekuatan password
function passwordStrength(p){
	var status = document.getElementById('status');

	var regex = new Array();
	regex.push("[A-Z]");
	regex.push("[a-z]");
	regex.push("[0-9]");
	regex.push("[!@#$%^&*]");

	var passed = 0;
		for(var x = 0; x < regex.length;x++){
		if(new RegExp(regex[x]).test(p)){
			console.log(passed++);
		}
	}

	var strength = null;
	var color = null;

	switch(passed){
		case 0:
		case 1:
		case 2:
			strength = "Tidak Aman";
			color = "#FF3232";
		break;
		case 3:
			strength = "Cukup Aman";
			color = "#E1D441";
		break;
		case 4:
			strength = "Sangat Aman";
			color = "#27D644";
	}

	status.innerHTML = strength;
	status.style.color = color;
}
// fungsi untuk menampilkan dan menyembunyikan password
function passToggle(){
	var pass = document.getElementById('pass');
	var showbtn = document.getElementById('show');
	// kalau type inputnya password
	if(pass.type == 'password'){
		pass.type = 'text';
		showbtn.innerHTML = 'Sembunyikan';
	}else{
		pass.type = 'password';
		showbtn.innerHTML = 'Lihat Password'; 
	}
}