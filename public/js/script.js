
let navbar = document.getElementById("navbar");
let header = document.getElementById("showcase");

let path = window.location.pathname;
let page = path.split("/").pop();
alert(page);
if(page.contains("index")){
    header.classList.add("back_showcase");
    
}
else{
    header.classList.remove("back_showcase");
}

navbar.addEventListener('click',()=>{
let a = document.getElementById("showcase_img");
let scroll = document.getElementById("scroll-down");
    if(a.classList.contains('click')){
        a.classList.remove('click');
        scroll.classList.remove('scroll-down-pos');
        return;
    }
 a.classList.add('click');
 scroll.classList.add('scroll-down-pos');
});


function drag(str){
    fundrag(str);
  
}

  document.addEventListener('DOMContentLoaded', fundrag(str)) ;
  function fundrag(str)
  {
   
    const ele = document.getElementById(str);
    ele.style.cursor = 'grab';

    let pos = { top: 0, left: 0, x: 0, y: 0 };

    const mouseDownHandler = function (e) {
        ele.style.cursor = 'grabbing';
        ele.style.userSelect = 'none';

        pos = {
            left: ele.scrollLeft,
            top: ele.scrollTop,
            // Get the current mouse position
            x: e.clientX,
            y: e.clientY,
        };

        document.addEventListener('mousemove', mouseMoveHandler);
        document.addEventListener('mouseup', mouseUpHandler);
    };

    const mouseMoveHandler = function (e) {
        // How far the mouse has been moved
        const dx = e.clientX - pos.x;
        const dy = e.clientY - pos.y;

        // Scroll the element
        ele.scrollTop = pos.top - dy;
        ele.scrollLeft = pos.left - dx;
    };

    const mouseUpHandler = function () {
        ele.style.cursor = 'grab';
        ele.style.removeProperty('user-select');

        document.removeEventListener('mousemove', mouseMoveHandler);
        document.removeEventListener('mouseup', mouseUpHandler);
    };

    // Attach the handler
    ele.addEventListener('mousedown', mouseDownHandler);
}
// let left = document.getElementById("left-arrow-key");
// let right = document.getElementById("right-arrow-key");

function left(str){
    let caontainer_book = document.getElementById(str);
   
        caontainer_book.scrollLeft  = 0;
        


}
function right(str){
    let caontainer_book = document.getElementById(str);
   
   
    
caontainer_book.scrollLeft = -caontainer_book.scrollWidth;
}