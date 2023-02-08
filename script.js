const form = document.querySelector(".wrapper form"),
fullURL = form.querySelector("input"),
shortenBtn = form.querySelector("button");

form.onssubmit = (e)=>{
    e.preventDefault();
}

shortenBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/url-control.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
            let data = xhr.response;
            console.log(data);
        }
    }
    xhr.send();
}