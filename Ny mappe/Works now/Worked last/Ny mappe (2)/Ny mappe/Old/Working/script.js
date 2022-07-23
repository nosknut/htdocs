$(document).ready(function () {
	updateButtonStates();
});

function togglePort(port) {
	if (checkPwd()) {
		$.get("http://35.204.206.85/transmit.php?server=35.187.40.176&user=nosk&password=1234&query=Select+*+FROM+Traverskran.Traverskran", function (data) {//Get state
			var $states = JSON.parse(data)[1];
			$.get(("http://35.204.206.85/transmit.php?server=35.187.40.176&user=nosk&password=1234&query=UPDATE%20Traverskran.Traverskran%20SET%20Status=" + (!($states[port] == 1)) + "%20WHERE%20Utgang=" + port), function () {//Set db to oposite state
				updateButtonStates();
			});
		});
	}   
	else {
		alert("passcode ...");
	}
}

function updateButtonStates() {
	$.get("http://35.204.206.85/transmit.php?server=35.187.40.176&user=nosk&password=1234&query=Select+*+FROM+Traverskran.Traverskran", function (data) {//Get state
		var $states = JSON.parse(data)[1];
		for (var button = 0; button < 9; button++) {
			$("button[name = " + button + "]").attr('id', (($states[button] == 1) ? "on" : "off"));//Alter the id of buttons named 0-9 to 'on' or 'off' based on retreived JSON
		}
	});
}

function checkPwd() {
	var $password = "traverskran"
    return ($("#pwd_box").val() == $password);
}