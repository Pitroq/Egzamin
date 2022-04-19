function sleep (time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}       

function check_nav() {
    sleep(200).then(() => {
        document.querySelector("body > article").style.minHeight = document.querySelector("body > nav").clientHeight+"px";

        var objects = document.getElementsByClassName("left-nav-link-a");
        var h = document.getElementById("article-header").innerHTML;
        for(var i=0; i<objects.length; i++){
            //console.log(h.toLowerCase(), objects[i].innerHTML.toLowerCase());
            if (h.toLowerCase() == objects[i].innerHTML.toLowerCase()) {
                objects[i].style.backgroundColor = '#eeeeee';
                objects[i].style.textDecoration = "none !important"; 
                break;
            }
        }
    })
    
}