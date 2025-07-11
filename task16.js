startTime();

function increaseTextSize(){
	let paragraph = document.querySelector('#text');
	let currentSize = parseFloat(getComputedStyle(paragraph).fontSize);
	let button = document.querySelector('#increase');
	currentSize += 1;
	paragraph.style.fontSize = currentSize + 'px';
}


function decreaseTextSize(){
	let paragraph = document.querySelector('#text');
	let currentSize = parseFloat(getComputedStyle(paragraph).fontSize);
			
	let button = document.querySelector('#increase');
	currentSize -= 1;
	paragraph.style.fontSize = currentSize + 'px';
}

function startTime(){
	const today = new Date();
	let h = today.getHours();
	let m = today.getMinutes();
	let s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	document.querySelector('#currentTimeandDate').innerHTML = `${h}:${m}:${s}
		<br>
		${today.getDate()}-${today.getMonth()}-${today.getFullYear()}`;
		setTimeout(startTime, 1000);
}
function checkTime(i) {
	if (i < 10) {i = "0" + i}; 
	return i;
}

function printFormData(){
	let name = document.querySelector('#inputNumber1').value;
	let collegeName = document.querySelector('#inputNumber2').value;
	let branch = document.querySelector('#inputNumber3').value;
	let session = document.querySelector('#inputNumber4').value;
	let mobileNo = document.querySelector('#inputNumber5').value;
	
	
	
	
	document.querySelector('.answer1').innerHTML = `
		<br>
		Name = ${name};<br>
		College name = ${collegeName};<br>
		Branch = ${branch};<br>
		Session = ${session};<br>
		Mobile No = ${mobileNo};<br>
	`;
	
	
}

function changeImage(){
	let image = document.querySelector('#zoomImage');
	
	image.src="./images/free-nature-images2.jpg";
	
}