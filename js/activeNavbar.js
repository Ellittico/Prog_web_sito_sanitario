document.addEventListener('load', activeTag());
    function activeTag(){
    var url = window.location.href;
    console.log(url);
    var navTags = document.getElementsByClassName("sidebar-link");
    
    Array.from(navTags).forEach(a => {
        var aHref = a.getAttribute("href");
        aHref=aHref.substring(2);
        if(url.includes(aHref)){
            a.classList.add("active");
        }
    });
}
