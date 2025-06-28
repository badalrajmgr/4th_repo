startTime();
		let scale = 1; 
	
		
		function changeImageSize(){
			const image = document.querySelector('#myImage');
			const button = document.querySelector('#my-button');
			// Initial scale of the image
			
			button.addEventListener('click', () => {
				scale += 0.1; // Increase scale by 0.1
				image.style.transform = `scale(${scale})`;
				
			});
		}
		function changeImage(){
			let image = document.querySelector('#my2Image');
			let button = document.querySelector('#my-2button');
			
			image.src="jethalal.jpeg";
			button.innerText = "pdh le bhai🤦‍♂️";
		}
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
				${today.getDate()}-${today.getMonth()}-${today.getFullYear()}
			`;
			setTimeout(startTime, 1000);
		}
		function checkTime(i) {
			if (i < 10) {i = "0" + i}; 
			return i;
		}