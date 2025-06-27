
function sort(){
	let arr = [3,2,3,4,1,7,5,9,8];
	
	arr.sort();
	console.log(arr);
}
sort();

function concatenate(){
	let arr1 = [2,3,1,4];
	let arr2 = [4,5,8,3,8];
	let arr3 = arr1 +','+ arr2;
	
	console.log(arr3);
	
}
concatenate();

function remove1stEle(){
	let arr = [1,2,3,4,5,6];
	arr.shift(1);
	console.log(arr);
}
remove1stEle();