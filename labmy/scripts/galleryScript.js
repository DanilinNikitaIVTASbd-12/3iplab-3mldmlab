let numberImage = 1;
let tmpAnimation = 0;
let clickCount = 1;
const countImage = 7;
const speed = 1500;
const pathImages = "images/gallery/";

function generateImage() {
    let image = pathImages + numberImage + ".jpg";
    $('#mainImage').css("background-image", 'url('+image+')');
    $(this).css("background-size",'500px');
}

function changeImage() {
    let image = pathImages + numberImage + ".jpg";
    $('#mainImage').fadeOut(speed, function() {
        $(this).css("background-image", 'url('+image+')');
        $(this).css("background-size",'500px');
        $(this).fadeIn(speed);
    });
}

function leftRotate(degreeS) {
    const element = $("#mainImage");
    $({degrees: tmpAnimation + degreeS}).animate({degrees: tmpAnimation}, {
        duration: 3000,
        step: function(now) {
            element.css({transform: 'rotate(' + now + 'deg)'});
        }
    });
}

function rightRotate(degreeS) {
    const element = $("#mainImage");
    $({degrees: tmpAnimation - degreeS}).animate({degrees: tmpAnimation}, {
        duration: 3000,
        step: function(now) {
            element.css({transform: 'rotate(' + now +'deg)'});
        }
    });
}

// левый клик
function leftClickImage() {
     if(numberImage > 1) {
         numberImage--;
     } else {
         numberImage = countImage;
     }
     leftRotate(360)
     changeImage();
     countImage++;
}

// правый клик
function rightClickImage() {
    if(numberImage < countImage) {
        numberImage++;
    } else {
        numberImage = 1; 
    }
    rightRotate(360);
    changeImage();
    countImage++;
}

$(function(){
    generateImage();
});