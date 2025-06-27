function checkNegative(){
	
	let num = document.querySelector('#inputNumber1').value; 
	let check1 = Number(num);
	
	let result = '';
	
	if(check1 == 0 && num != '0') result += `invalid input`;
	else if(num < 0) result += `given number is <b> Negative </b>`;
	else result += `given number is <b> Positive </b>`;
	
	document.querySelector('.answer1').innerHTML = `${result}`;
}

function absoluteDifference(){
	let num2 = document.querySelector('#inputNumber2').value; 
	let diff = 13-num2;
	let abs = Math.abs(diff);
	let result = '';
	
	if(num2 > 13) {	
		result += `absolute difference between 13 and the entered number ${num2} is ${abs} <br> since entered number is greater then 13, so after doubling the absolute value is ${abs * 2}`;	
	}
	else {
		result += `absolute difference between 13 and the entered number [${num2}] is ${abs} `;
		
	}
	document.querySelector('.answer2').innerHTML = `${result}`;
}

function fibonacciSeries(){
	let inputstr = document.querySelector('#inputNumber3').value;
	let n = Number(inputstr);
	const fib =[0,1];
	if(n === 0) return [];
	else if(n === 1) return [0];
	
	for(let i=2;i<n;i++){
		fib[i] = fib[i-1] + fib[i-2];
	}
	
	document.querySelector('.answer3').innerText = `${fib} `;
}
function sumOfMul3and5(){
	let arr = [];
	let count = 0;
	
	for(let i=0;i<1000;i=i+3){
		if(i%5==0) arr.push(i);
	}
	for(let i=0;i<arr.length;i++) count += arr[i];
	document.querySelector('.answer4').innerHTML = `
		
			<p> multiples of 3 and 5 under 1000 are:  </p>
			<div style="width:20cm;"> ${arr} </div>
			<p>And sum of multiples of 3 and 5 under 1000 is ${count};</p>
	
	`;
}
function cube(){
	let enterNum = document.querySelector('#inputNumber5').value;
	let n = Number(enterNum);
	
	
	document.querySelector('.answer5').innerText = ` cube of ${n} is ${n*n*n} `;
	
	
}