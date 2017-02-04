// JavaScript Document

var expanded = false;
function showCheckboxes() {
	var checkboxes = document.getElementById("checkboxes");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}


function showCheckboxes2() {
	var checkboxes = document.getElementById("checkboxes2");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}

function showCheckboxes3() {
	var checkboxes = document.getElementById("checkboxes3");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}

function showCheckboxes4() {
	var checkboxes = document.getElementById("checkboxes4");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}

function showCheckboxes5() {
	var checkboxes = document.getElementById("checkboxes5");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}

function showCheckboxes6() {
	var checkboxes = document.getElementById("checkboxes6");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}

function showCheckboxes7() {
	var checkboxes = document.getElementById("checkboxes7");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}

function showCheckboxes8() {
	var checkboxes = document.getElementById("checkboxes8");
	if (!expanded) {
		checkboxes.style.display = "block";
		expanded = true;
	} else {
		checkboxes.style.display = "none";
		expanded = false;
	}
}


$(document).ready(function(){
	$('#groupID').change(function() {
		//alert('YEAH');
		//get specialties
		$.post('getSpecialties.php', {groupID: myForm.groupID.value},
		function(result) {
			$('#checkboxes').html(result).show();
		});
	});
})
