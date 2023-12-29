const btn = document.getElementById('btn')
const content = document.getElementById('content')

btn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php?page=message", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data)
            }
        }
    }
    let formData = new FormData();
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send(`zkiko=${'zk'}`);
}
 