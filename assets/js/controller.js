function validateForm() {
	var x = document.forms["myForm"]["fname"].value;
	if (x == "") {
		alert("Empty required fields! Please fill out.");
		return false;
	}
}