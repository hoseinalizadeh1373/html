let left = document.getElementById("left-arrow-key");
let right = document.getElementById("right-arrow-key");

let caontainer_book = document.getElementById("book-list");
left.addEventListener('click',()=>{
    caontainer_book.scrollLeft  = 0;
});
right.addEventListener('click',()=>{
caontainer_book.scrollLeft = -caontainer_book.scrollWidth;
});