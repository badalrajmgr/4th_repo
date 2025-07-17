function printNameAdd(){
	
	let name = document.querySelector('#inputNumber1').value; 
	let add = document.querySelector('#inputNumber2').value;
	
	let result = `Name: ${name} \n  Add: ${add}`;
	
	
	document.querySelector('.answer1').innerText = `${result}`;
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

function value_dataType() {
      const val1 = document.querySelector("#inputNumber3").value;
      const val2 = document.querySelector("#inputNumber4").value;

      let type1 = inferType(val1);
      let type2 = inferType(val2);

      let parsedVal1 = parseValue(val1, type1);
      let parsedVal2 = parseValue(val2, type2);

      const result = document.querySelector(".answer2");

      if (parsedVal1 === parsedVal2 && type1 === type2) {
        result.textContent = ` Both value and type are same. Type: ${type1}`;
      } else {
        result.textContent = ` Value or type mismatch. Type1: ${type1}, Type2: ${type2}`;
      }
}

    function inferType(val) {
      if (val === "true" || val === "false") return "boolean";
      if (!isNaN(val) && val.trim() !== "") return "number";
      return "string";
    }

    function parseValue(val, type) {
      switch (type) {
        case "number":
          return Number(val);
        case "boolean":
          return val === "true";
        default:
          return val;
		}
    }
