function openNav() {
    document.getElementById("mysidenav").style.width = "250px";
}
function closeNav(){
    document.getElementById("mysidenav").style.width = "0"; 
}

let i = 0;
let imgArray = ['Photo for Slider/photo1.png','Photo for Slider/photo2.png','Photo for Slider/photo3.png','Photo for Slider/photo4.png', 'Photo for Slider/photo5.png', 'Photo for Slider/photo6.png', 'Photo for Slider/photo7.png', 'Photo for Slider/photo8.png'];

function change(){
    document.getElementById('slider').src = imgArray[i];

    if(i< imgArray.length -1){
      i++;
    }
    else{
        i=0;
    }
        
}
document.addEventListener(onload, change());



$(document).ready(function() {
    const reviews = $('.review');
    const pageNumber = $('.page-number');
    let currentIndex = 0;

    function showReview(index) {
        reviews.hide().eq(index).show();
        pageNumber.text(index + 1);
    }

    function nextReview() {
        currentIndex = (currentIndex + 1) % reviews.length;
        showReview(currentIndex);
    }

    function prevReview() {
        currentIndex = (currentIndex - 1 + reviews.length) % reviews.length;
        showReview(currentIndex);
    }


    showReview(currentIndex);


    setInterval(nextReview, 5000);


    $('.slider-container').on('click', '.next-btn', nextReview);
    $('.slider-container').on('click', '.prev-btn', prevReview);
});
