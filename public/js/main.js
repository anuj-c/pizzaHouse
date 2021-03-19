function stickyBottom(){
    var foot = document.querySelector("footer");
    if(foot.offsetTop < window.innerHeight){
        foot.classList.add("foot");
    }else if(foot.classList.contains("foot")){
        foot.classList.remove("foot");
    }
}