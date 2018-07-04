let delArr = document.querySelectorAll(".operation i");
let fullText = document.querySelector(".full-text");
delArr.forEach(function (val) {
    val.onclick = function (e) {
        let id = e.target.id;
        location.href = "/myFrame/index/del/id/" + id;
    }
});
window.onkeydown=function (e) {
    if(e.keyCode == 27){
        fullText.style.display = "none";
        fullText.classList.add("leave");
        fullText.classList.remove("enter");
    }
}
fullText.onclick=function (e) {
    let target = e.target;
    if(target.classList.contains("close")){
        fullText.classList.add("leave");
        fullText.classList.remove("enter");
        fullText.style.display = "none";
    }else if(target.classList.contains("del")){
        location.href = "/myFrame/index/del/id/"+e.target.id;
    }
}
let LookFull = document.querySelectorAll(".operation a");
let fullContent = document.querySelectorAll(".index content");
LookFull.forEach(function (val,index) {
    fullContent[index].onclick=val.onclick = function (e) {
        let parentNode = val.parentNode.parentNode;
        let title = parentNode.querySelector("h3").innerHTML;
        let content = parentNode.querySelector("content").innerHTML;
        let time = parentNode.querySelector("time").innerHTML;
        let id = parentNode.id;
        let str = `
            <i class="iconfont close">&#xe60b;</i>
            <h3>${title}</h3>
            <content>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                ${content}
            </content>
            <time>
                <span>
                    ${time}
                </span>
                <i class="iconfont del" id="${id}">&#xe61d;</i>
            </time>
        `;
        fullText.innerHTML = str;
        fullText.style.display = "block";
        fullText.classList.add("enter");
        fullText.classList.remove("leave");
    };
});

