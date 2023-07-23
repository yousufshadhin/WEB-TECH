function validate(pForm) {

	let isValid = "";
	let erruname = document.getElementById("erroruname");
	erruname.innerHTML = "";

	if (pForm.username.value === "") {
		erruname.innerHTML = "Please fill up the Username";
		isValid = "Not Valid";
	}
	
	if (isValid === "") {
		// let xhttp = new XMLHttpRequest();
		// xhttp.onload = function() {
		// 	console.log(this.responseText);
			
		// }
		// xhttp.open(pForm.method, pForm.action, false);
		// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// xhttp.send("username=" + pForm.username.value);
		return true;
	}
	else {
		return false;
	}
}