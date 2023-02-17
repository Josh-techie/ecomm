

//copy menu for Mobile

function copyMenu(){
// copy inside .dpt-cat to .departments
var dptCategory= document.querySelector('.dpt-cat');
var dptPlace= document.querySelector('.departments');
dptPlace.innerHTML=dptCategory.innerHTML;


// copy inside nav to nav
var mainNav= document.querySelector('.header-nav nav');
var navPlace = document.querySelector('.off-canvas nav')
navPlace.innerHTML=mainNav.innerHTML;


//copy .header-top .wrapper to .thetop-nav
var topNav = document.querySelector('.header-top .wrapper');
var topPlace = document.querySelector('.off-canvas .thetop-nav');
topPlace.innerHTML=topNav.innerHTML;
}
copyMenu();



 




//show mobile menu

let menuButton = document.querySelector(".trigger");
let closeButton = document.querySelector(".t-close");
let addClass = document.querySelector(".site");

    menuButton.addEventListener('click' ,function(){
    addClass.classList.add("showmenu");
    });
    
    closeButton.addEventListener('click', function() {
    addClass.classList.remove("showmenu");

    });






// show sub Menu on mobile
const submenu=document.querySelectorAll('.has-child .icon-small');
submenu.forEach((menu) => menu.addEventListener('click',toggle));

function toggle(e){
    e.preventDefault();
    submenu.forEach((item) => item != this ? item.closest('.has-child').classList.remove('expand') : null);
    if (this.closest('.has-child').classList !='expand');
    this.closest('.has-child').classList.toggle('expand');
}   




//SLIDER
const swiper = new Swiper('.swiper', {
    loop: true,

    pagination: {
      el: '.swiper-pagination',
    },
 
  });

//affichage des departements
const dptButton=document.querySelector('.dpt-cat .dpt-trigger');
const dptClass=document.querySelector('.site');
dptButton.addEventListener('click',function(){
  dptClass.classList.toggle('showdpt');
  
});

// products image slider
const productThumb = new Swiper('.small-image',{
    loop:true,
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints:{
        481:{
            spaceBetween:32,

        }
    }
});

const productBig = new Swiper (".big-image", {
    loop:true,
    slidesPerView: 1,
    autoHeight: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs:{
        swiper: productThumb,
    }
});


function increaseQuantity(id) {
    let input = document.getElementById(id);
    let quantity = input.value;
    input.value = parseInt(quantity) + 1;
    updateQuantity(id, input.value);
}

function decreaseQuantity(id) {
    let input = document.getElementById(id);
    let quantity = input.value;
    if(quantity > 1) {
        input.value = parseInt(quantity) - 1;
        updateQuantity(id, input.value);
    }
}

function updateQuantity(id, newQuantity) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "cart.php?id_prod=" + id + "&update_quantity=" + newQuantity, true);
    xhr.send();
}


function addToCart() {
    let radioButton = document.querySelector('input[name="size"]:checked');
    let size = radioButton.value;
    add_to_cart(id_prod, name_prod, image, price, quantity, size);
}

function updateSelectedSize(value) {
    document.getElementById("selected-size").value = value;
  }


  function redirectPage() {
    var select = document.getElementById("select-page");
    var selectedOption = select.options[select.selectedIndex];
    var redirectUrl = selectedOption.value;
    if(redirectUrl) {
        window.location.href = redirectUrl;
    }
}