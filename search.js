function submit(form){
	var sId = form.id.value;
	var xhttp = new XMLHttpRequest()
	xhttp.onload = function(){
		if(this.status === 200){
			//location.href = 'info.php';
		}
	}
	xhttp.open("POST", "submitAction.php");
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	if(sId === "")
		xhttp.send();
	else
		xhttp.send("id="+sId);
	
}