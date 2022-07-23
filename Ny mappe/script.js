var $server = "35.234.143.133";//"35.197.234.41";

$(document).ready(function () {
	updateButtonStates();
});

function setPort(port, state) {
    if (checkPwd()) {
		$.get(("http://" + $server + "/transmit.php/?command=setPort&state=" + state + "&port=" + port), function () {//Set db to oposite state
			updateButtonStates();
		});
	}
	else {
		alert("passcode ...");
	}
}

function togglePort(port) {
	if (checkPwd()) {
		$.get("http://" + $server + "/transmit.php/?command=getPorts", function (data) {//Get state
			var $states = JSON.parse(data);
			$.get(("http://" + $server + "/transmit.php/?command=setPort&state=" + (!($states[port] == 1)) + "&port=" + port), function () {//Set db to oposite state
				updateButtonStates();
			});
		});
	}
	else {
		alert("passcode ...");
	}
}

function updateButtonStates() {
	$.get("http://" + $server + "/transmit.php/?command=getPorts", function (data) {//Get state
		var $states = JSON.parse(data);
		for (var button = 0; button < 9; button++) {
			$("button[name = " + button + "]").attr('id', (($states[button] == 1) ? "on" : "off"));//Alter the id of buttons named 0-9 to 'on' or 'off' based on retreived JSON
		}
	});
}

function setAll(state){
	if (checkPwd()) {
		$.get(("http://" + $server + "/transmit.php/?command=setAllPorts&state=" + state), function () {//Set db to oposite state
			updateButtonStates();
		});
	}
	else {
		alert("passcode ...");
	}
}

function checkPwd() {
	var $password = "traverskran"
    return ($("#pwd_box").val() == $password);
}
