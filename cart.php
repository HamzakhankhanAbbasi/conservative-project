<?php include 'includes/header.php';?>
<style>
   .cart-sec-1 {
	padding: 60px 0;
}
.cart-wrap {
	border: 1px solid #a9a9a9;
	border-radius: 18px 10px 10px 18px;
}
.card-head {
	display: flex;
}
.head-text1 {
	padding: 30px 90px;
	min-width: 455px;
	text-align: center;
	border-bottom: 1px solid #a3a3a3;
}
.head-text2 {
	padding: 30px 30px;
	border-right: 1px solid #a3a3a3;
	min-width: 115px;
	text-align: center;
	border-bottom: 1px solid #a3a3a3;
}
.head-text3 {
	padding: 30px 0 30px 30px;
	border-right: 1px solid #a3a3a3;
	min-width: 315px;
	border-bottom: 1px solid #a3a3a3;
}
.head-text4 {
	padding: 30px 30px;
	min-width: 130px;
	text-align: center;
	border-bottom: 1px solid #a3a3a3;
}
.head-text5 {
	padding: 30px 30px;
	min-width: 128px;
	text-align: center;
	border-bottom: 1px solid #a3a3a3;
}
.head-text {
	color: #2c2c2c;
	font-weight: 600;
	font-size: 18px;
}
.content1 {
	min-width: 455px;
	max-width: 455px;
	border-right: 1px solid #a3a3a3;
}
.content-card {
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 55px 0;
}
.sizeinner-wrap {
	min-width: 115px;
	max-width: 115px;
	border-right: 1px solid #a3a3a3;
}
.card-content {
	display: flex;
}
.content-counter {
	padding: 79.5px 32px;
}
.counterinnerwrap {
	min-width: 315px;
	max-width: 315px;
	border-right: 1px solid #a3a3a3;
}
.content-card2 {
	display: flex;
	justify-content: center;
	align-items: baseline;
	padding: 86px 0 86px 0;
}
.card-headtext {
	color: #2c2c2c;
	font-weight: 700;
	font-size: 18px;
}
.card-headtext2 {
	color: #a3a3a3;
	font-weight: 600;
	font-size: 14px;
}
.content-card .content-text {
	margin-left: 30px;
}
.content-image img {
	min-width: 89px;
	max-width: 89px;
	min-height: 89px;
	max-height: 89px;
	object-fit: contain;
	object-position: center;
}
/* counter-css-start */
.quaitity-box .plus-minus input {
	border: 0;
	background: #fff !important;
	font-size: 17px;
	color: #191919;
	font-weight: 600;
	border-radius: 8px;
	border: 1px solid #c2c2c2;
	text-align: center;
	width: 70px;
	height: 40px;
	margin: 0 7px;
}
.minus {
	cursor: pointer;
}
.plus-minus button {
	width: 50px;
	height: 37px;
	background: #971b25;
	outline: none;
	border: none;
	color: #fff;
    border-radius: 5px;
}
/* counter-csss-end */
.content-card3 {
	display: flex;
	justify-content: center;
	align-items: baseline;
	padding: 86px 0 92px 0;
}
.content-card4 {
	display: flex;
	justify-content: center;
	align-items: baseline;
	padding: 87px 0 85px 0;
}
.remove-innerwrap {
	border-right: 1px solid #a3a3a3;
}
.content-card3 .card-headtext {
	color: #626262;
	font-weight: 700;
	font-size: 14px;
}
.footer-wrap {
	display: flex;
	border-top: 1px solid #a3a3a3;
}
.foot-text1 {
	padding: 20px 30px;
	border-right: 1px solid #a3a3a3;
	min-width: 155px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}
.foot-text2 {
	padding: 10px 30px;
	border-right: 1px solid #a3a3a3;
	min-width: 145px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}
.foot-text3 {
	padding: 20px 30px;
	min-width: 155px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}
.foot-text4 {
	padding: 20px 30px;
	min-width: 115px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
	border-top: 1px solid #a3a3a3;
}
.foot-text5 {
	padding: 20px 30px;
	min-width: 180px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
	border-right: 1px solid #a3a3a3;
}
.foot-text6 {
	padding: 20px 30px;
	min-width: 140px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}
.foot-text7 {
	padding: 20px 30px;
	min-width: 120px;
	max-width: 120px;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}
.foot-text {
	color: #565656;
	font-weight: 700;
	font-size: 18px;
}
.voucher-input input {
	padding: 20px 125px 15px 30px;
	border-radius: 15px;
	font-size: 14px;
	color: #8f8f8f !important;
	font-weight: 600;
	border: 2px solid #ddd;
	margin-bottom: 30px;
	outline: none;
}
.cart-sec-2 {
	padding: 0 0 60px 0;
}
.voucher-input input::placeholder {
	color: #444444;
}
.cart-btnwrap {
	display: flex;
	justify-content: flex-end;
	align-items: baseline;
}
.cart-rightwrap {
	text-align: end;
}
.cart-btnwrap .indexSec4-button {
	margin: 0 0 15px 15px;
}
@media only screen and (max-width:1025px){
        .cart-wrap {
        overflow-x: scroll;
    }
}
@media only screen and (max-width:991px){
        .card-headtext {
          font-size: 16px;
    }
    .content-card2 {
        padding: 89px 0 86px 0;
    }
    .content-card4 {
        padding: 90px 0 85px 0;
    }
}
@media only screen and (max-width:910px){
        .card-headtext {
          font-size: 14px;
    }
        .content-card2 {
        padding: 92px 0 86px 0;
    }
    .content-card4 {
        padding: 93px 0 85px 0;
    }
}
@media only screen and (max-width:767px){
        .cart-btnwrap {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
    }
        .cart-rightwrap {
        text-align: initial;
    }
}
@media only screen and (max-width:385px){
    .cart-btnwrap .cta-btn {
        padding: 10px 23px;
    }
    .voucher-input input {
        padding: 20px 70px 15px 30px;
    }
}
 </style>   
<section class="innerSec-1 about-sec-1">
   <div class="container">
      <div class="innerSec1-content text-center">
         <p>Home 
            <span>-Cart</span>
         </p>
      </div>
   </div>
</section>
<section class="cart-sec-1">
   <div class="container">
         <div class="cart-textwrap mb-4">
            <p class="black-heading mb-4">Shopping Cart.</p>
         </div>
      <div class="cart-wrap mt-4">
         <div class="card-content">
            <div class="content1">
               <div class="head-text1">
                  <p class="head-text">Description</p>
               </div>
               <div class="content-card">
                  <div class="content-image">
                     <img src="assets/images/card1.png" class="img-fluid">
                  </div>
                  <div class="content-text">
                     <p class="card-headtext mb-2">Lorem Ispum</p>
                     <P class="card-headtext2">Product Code : Ml5B</P>
                  </div>
               </div>
               <div class="content-card">
                  <div class="content-image">
                     <img src="assets/images/dona.png" class="img-fluid">
                  </div>
                  <div class="content-text">
                     <p class="card-headtext mb-2">Lorem Ispum</p>
                     <P class="card-headtext2">Product Code : Ml5B</P>
                  </div>
               </div>
               <div class="content-card">
                  <div class="content-image">
                     <img src="assets/images/card1.png" class="img-fluid">
                  </div>
                  <div class="content-text">
                     <p class="card-headtext mb-2">Lorem Ispum</p>
                     <P class="card-headtext2">Product Code : Ml5B</P>
                  </div>
               </div>
               <div class="footer-wrap">
                  <div class="foot-text1">
                     <p class="head-text">Discount</p>
                  </div>
                  <div class="foot-text2">
                     <p class="foot-text">$0.00</p>
                  </div>
                  <div class="foot-text3">
                     <p class="head-text">Delivery</p>
                  </div>
               </div>
            </div>
            <!-- size-start -->                      
            <div class="sizeinner-wrap">
               <div class="head-text2">
                  <p class="head-text">Size</p>
               </div>
               <div class="content-card2">
                  <div class="content-text">
                     <p class="card-headtext">S</p>
                  </div>
               </div>
               <div class="content-card2">
                  <div class="content-text">
                     <p class="card-headtext">S</p>
                  </div>
               </div>
               <div class="content-card2">
                  <div class="content-text">
                     <p class="card-headtext">S</p>
                  </div>
               </div>
               <div class="foot-wrap">
                  <div class="foot-text4">
                     <p class="foot-text">0.00</p>
                  </div>
               </div>
            </div>
            <!-- size-end -->
            <!-- counter-start -->
            <div class="counterinnerwrap">
               <div class="head-text3">
                  <p class="head-text">Quality</p>
               </div>
               <div class="content-counter">
                  <!-- counter-start -->
                  <div class="quaitity-box">
                     <div class="plus-minus">
                        <button type="button"class="minus">-</button>
                        <input type="number" class="count" name="qty" value="1" id="quantity-select" >
                        <button type="button" class="plus">+</button>
                     </div>
                  </div>
                  <!-- counter-end -->
               </div>
               <div class="content-counter">
                  <!-- counter-start -->
                  <div class="quaitity-box">
                     <div class="plus-minus">
                        <button type="button"  class="minus">-</button>
                        <input type="number" class="count" name="qty" value="1" id="quantity-select" >
                        <button type="button"   class="plus">+</button>
                     </div>
                  </div>
                  <!-- counter-end -->
               </div>
               <div class="content-counter">
                  <!-- counter-start -->
                  <div class="quaitity-box">
                     <div class="plus-minus">
                        <button type="button" class="minus">-</button>
                        <input type="number" class="count" name="qty" value="1" id="quantity-select" >
                        <button type="button" class="plus">+</button>
                     </div>
                  </div>
                  <!-- counter-end -->
               </div>
               <div class="footer-wrap">
                  <div class="foot-text5">
                     <p class="head-text">Subtotal</p>
                  </div>
                  <div class="foot-text6">
                     <p class="card-headtext">$99.00</p>
                  </div>
               </div>
            </div>
            <!-- counter-end -->
            <!-- Remove-start -->
            <div class="remove-innerwrap">
               <div class="head-text4">
                  <p class="head-text">Remove</p>
               </div>
               <div class="content-card3">
                  <div class="content-text">
                     <p class="card-headtext">X</p>
                  </div>
               </div>
               <div class="content-card3">
                  <div class="content-text">
                     <p class="card-headtext">X</p>
                  </div>
               </div>
               <div class="content-card3">
                  <div class="content-text">
                     <p class="card-headtext">X</p>
                  </div>
               </div>
               <div class="footer-wrap">
                  <div class="foot-text7">
                     <p class="head-text">Total</p>
                  </div>
               </div>
            </div>
            <!-- Remove-end -->
            <!-- price-start -->
            <div class="price-innerwrap">
               <div class="head-text5">
                  <p class="head-text">Price</p>
               </div>
               <div class="content-card4">
                  <div class="content-text">
                     <p class="card-headtext">$99.00</p>
                  </div>
               </div>
               <div class="content-card4">
                  <div class="content-text">
                     <p class="card-headtext">$99.00</p>
                  </div>
               </div>
               <div class="content-card4">
                  <div class="content-text">
                     <p class="card-headtext">$99.00</p>
                  </div>
               </div>
               <div class="footer-wrap">
                  <div class="foot-text7">
                     <p class="card-headtext">$99.00</p>
                  </div>
               </div>
            </div>
            <!-- price-end -->
         </div>
      </div>
   </div>
</section>
<section class="cart-sec-2">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
            <p class="card-headtext mb-4">If you have a promotion code: please enter it here</p>
            <div class="voucher-input">
               <input type="text" placeholder="Please enter promo code">
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-6">
            <div class="cart-rightwrap">
               <div class="cart-btnwrap">
                  <div class="indexSec4-button">
                     <a href="javascript:void(0)" class="cta-btn active-btn">Apply Discount</a>
                  </div>
                  <div class="indexSec4-button">
                     <a href="javascript:void(0)" class="cta-btn active-btn">Checkout</a>
                  </div>
               </div>
               <div class="voucher-input">
                  <input type="text" placeholder="Update Quantity">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'includes/footer.php';?>
<script>
     //PRODUCT QUANTITY SELECT INPUT
 $(document).ready(function(){
    $('.count').prop('disabled', true);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});
</script>  