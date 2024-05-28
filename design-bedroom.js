
//         design

function create(){
      
       
    const text= document.getElementById(`text`);
    const list= document.getElementById(`list`);
   text1=String(text.value);
    if(text1.length ==0){
alert(`Please enter a value`)}
        else{
    let shi = document.createElement(`li`);
    let link = document.createElement(`a`);
    link.innerHTML= text.value;

    list.appendChild(shi);
    shi.appendChild(link);}



    }



//         bedrooom

    function master(){
        document.getElementById(`master`);
      const img1 = document.getElementById(`img1`).src ="images/bedroom.jpg";
      
    }
    function luxury(){
        document.getElementById(`luxury`);
        const img2 = document.getElementById(`img1`).src = "images/luxury.png";
        
    }
    function kids(){
        document.getElementById(`kids`);
        const img3 = document.getElementById(`img1`).src="images/Kd.png";

    }

    // l