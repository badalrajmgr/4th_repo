function printNameAdd(){
	
	let name = document.querySelector('#inputNumber1').value; 
	let add = document.querySelector('#inputNumber2').value;
	
	let result = `Name: ${name} \n  Add: ${add}`;
	
	
	document.querySelector('.answer1').innerText = `${result}`;
}

function value_dataType(){
	let val1 = document.querySelector('#inputNumber3').value;
	//let isNum1 = isNaN(val1);
	let val2 = document.querySelector('#inputNumber4').value;
	//let isNum2 = isNaN(val2);
		
	let result = "";
	let showAns = document.querySelector('.answer2');
	
	if(val1 == val2) result += `value of input 1 and input 2 are same\n` ;
	else result += `value of input 1 and input 2 are not same\n`;
			
	if(!isNaN(val1) && !isNaN(val2)) result += `dataType are same`;
	else result += `dataType are different`;
			
	showAns.innerText = result;
}

function addStrings(){
	let inputstr1 = document.querySelector('#inputNumber5').value;
	let inputstr2 = document.querySelector('#inputNumber6').value;
	let result = `string after adding is: ${inputstr1.toUpperCase() + inputstr2.toUpperCase()}`;
	
	document.querySelector('.answer3').innerText = `${result} `;
}
function inBytes(){
	let str = document.querySelector('#inputNumber7').value.length;

	document.querySelector('.answer4').innerText = `The given string length in bytes are: ${str} `;
	
}
function roundof(){
	let string = document.querySelector('#inputNumber8').value;
	let num = Number(string);
	let roundDigit = document.querySelector('#inputNumber9').value;
	let roundof = num.toFixed(roundDigit);

	
	document.querySelector('.answer5').innerText = `Given no. after round to ${roundDigit} digit after decimal is: ${roundof}`;
	
	
	
}