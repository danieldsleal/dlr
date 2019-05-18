function Login(){
    var usernameInput = document.getElementById('username').value;
    var passInput = document.getElementById('password').value;

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var response = JSON.parse(this.responseText);
			if(response.status==='not_ok') window.location.href = 'wronglogin.php';
			else if(response.status==='ok')window.location.href = '../index.php';
			}
		};

	xmlhttp.open("POST", "action_login.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");

	var message = "username=" + usernameInput + "&" + "password=" + passInput ;
	xmlhttp.send(message);
    return;
    
}