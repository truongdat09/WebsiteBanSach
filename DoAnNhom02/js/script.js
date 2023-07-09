let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}
// tăng giảm số lượng
$(document).ready(function() {
   $('.qtyplus').click(function(e) {
       e.preventDefault();
       var quantityInput = $(this).siblings('.qty');
       var currentQuantity = parseInt(quantityInput.val());
       quantityInput.val(currentQuantity + 1);
   });

   $('.qtyminus').click(function(e) {
       e.preventDefault();
       var quantityInput = $(this).siblings('.qty');
       var currentQuantity = parseInt(quantityInput.val());
       if (currentQuantity > 1) {
           quantityInput.val(currentQuantity - 1);
       }
   });
});