const form = document.querySelector("form"),
statusTex = form.querySelector(".button-are span");
form.onsubmit = (e)=>{
    e.preventDefault();
    statusTex.style.display = "block";
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.onload = () =>{
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response;
            console.log(response);
            statusTex.innerText = response;

        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}