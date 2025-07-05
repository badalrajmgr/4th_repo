
function loginPage_call(){
  alert(`you are not login!\nplease login!`);
  window.location.href = "./pages/loginPage.php";
  return;
}

function bag_page(){
  window.location.href = "./bag.php";
  return;
}

function cross_button(){
  
  alert('item removed!!!');
  
  let bag_content = document.querySelector('.bag-page');
  
  bag_content.innerHTML =`
    <div style="height:60%;width:100%;">
    <br>
      no item selected
    <br>
    </div>
  `;

  let count = document.querySelector('.bag-items');
  let count_num = Number(count.innerText);
  count_num--;
  count.innerText = count_num;

  return;
 
}

let noOfButtonClicked = 0;
function add_to_bag(){
  noOfButtonClicked++;
  let number = document.querySelector('.bag-item-count');
  number.innerText = `${noOfButtonClicked}`;
  console.log(noOfButtonClicked);
  return;
}

function logout(){
  window.location.href="../index.html";
  return;
}
//href="pages/bag.html"

  

  