require('./bootstrap');

window.addEventListener('scroll',()=>{
    var header = document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY > 0)
})

var head = document.querySelectorAll(".faq_header");
head.forEach(head =>{
    head.addEventListener('click',event=>{
        head.classList.toggle("active");
        var body=head.nextElementSibling;
        if(head.classList.contains("active")){
            body.style.maxHeight=body.scrollHeight + "px"
        } else{
            body.style.maxHeight=0;
        }
    });                                 
})