
var id;
var sec;
var min;
var hour;
var day;

//get value
function secValue(val) {
	sec = val;
    id = setInterval(timer, 1000)
}
function minValue(val) {
	min = val; 
}
function hourValue(val) {
	hour = val;
}
function dayValue(val) {
	day = val;
}

function timer(){
	sec--; 
	document.getElementById('sec').value = sec;
	if (sec == 0){
		sec = 60; 
		min--;
		document.getElementById('min').value = min;
		if(min == 0){
			min = 60;
			hour--;
			document.getElementById('hour').value = hour;
			if(hour == 0){
				hour = 24;
				day--;
				document.getElementById('day').value = day;
				if (day == 0){
					clearInterval(id);
				}
			}
		} 
	}
}

// click on sec text field it will stop and change the value it will run again
function stop(){
	sec = 0;
	document.getElementById('sec').value = sec;
	clearInterval(id);
}


/*
	controller
*/

// change clock font size
function clockFont(fontSize){
	document.getElementById('day').style.fontSize = fontSize.value+"px";
	document.getElementById('hour').style.fontSize = fontSize.value+"px";
	document.getElementById('min').style.fontSize = fontSize.value+"px";
	document.getElementById('sec').style.fontSize = fontSize.value+"px";
}

// change clock BG color
function clockBG(color){
	document.getElementById('day').style.backgroundColor = color.value;
	document.getElementById('hour').style.backgroundColor = color.value;
	document.getElementById('min').style.backgroundColor = color.value;
	document.getElementById('sec').style.backgroundColor = color.value;
}

// change label font size
function labelFont(fontSize2){
	document.getElementById('labelD').style.fontSize = fontSize2.value+"px";
	document.getElementById('labelH').style.fontSize = fontSize2.value+"px";
	document.getElementById('labelM').style.fontSize = fontSize2.value+"px";
	document.getElementById('labelS').style.fontSize = fontSize2.value+"px";
}

// change clock font color
function clockFontColor(color){
	document.getElementById('day').style.color = color.value;
	document.getElementById('hour').style.color = color.value;
	document.getElementById('min').style.color = color.value;
	document.getElementById('sec').style.color = color.value;
}

// change label font color
function labelFontColor(color){
	document.getElementById('labelD').style.color = color.value;
	document.getElementById('labelH').style.color = color.value;
	document.getElementById('labelM').style.color = color.value;
	document.getElementById('labelS').style.color = color.value;
}