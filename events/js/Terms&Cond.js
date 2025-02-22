function loadData (name){
	if(name=="btn1"){
		document.getElementById("terms").style.display="block";
        document.getElementById("Privacy").style.display="none";
		
	}
	else if(name=="btn2"){
        document.getElementById("terms").style.display="none";
        document.getElementById("Privacy").style.display="block";		
	}
}