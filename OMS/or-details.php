<?php 
$id = $_GET["id"];
$status = $_GET["status"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet"
data-purpose="Layout StyleSheet"
title="Web Awesome"
href="/css/app-wa-3b124ff0e0d7a67cd8c995d0aeb1d15a.css?vsn=d"><link rel="stylesheet"
href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css"><link rel="stylesheet"
href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css"><link rel="stylesheet"
href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css"><link rel="stylesheet"
href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css"><link rel="stylesheet"
href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css"><link rel="stylesheet"
href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'>
<link rel="stylesheet" href="nav.css">
<script type="text/javascript" src="app.js" defer></script>
<style>
    :root {
        --upradius: 11px;
        --width: fit-content;
      }
      @font-face {
        font-family: grotesk;
        src: url("LazareGroteskTrial-Regular-BF647806db2b1eb.otf");
      }
      
      * {
        margin: 0;
        padding: 0;
      }
      
      .dashboard {
        display: inline-flex;
        height: 100vh;
        width: -webkit-fill-available;
        position: relative;
      }
      .sidebar {
        background-color: rgb(39, 32, 29);
        height: 100vh;
        width: fit-content;
      }
      .main {
        padding: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 15px;
        padding-top: 3vw;
      }
      .main {
        padding: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 15px;
        padding-top: 3vw;
        overflow-x: hidden;
        overflow-y: auto;
        width: -webkit-fill-available;
      }
      
      .headrow {
        display: grid;
        background-color: #f1f1f2;
        border-radius: var(--upradius) var(--upradius) 0 0;
        border: 1px solid black;
        width: var(--width);
      }
      
      .cell {
        padding: 7px;
        font-family: grotesk;
        font-size: smaller;
      }
      .row > .cell {
        padding: 7px;
        font-size: medium;
      }
      .row:last-child {
        display: grid;
        border: 1px solid black;
        border-radius: 0 0 var(--upradius) var(--upradius);
        border-top: none;
        width: var(--width);
      }
      
      .item:last-child {
        border: 1px solid black;
        border-radius: 0 0 var(--upradius) var(--upradius);
        border-top: none;
      }
      .item > .row:last-child {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(52px, 6vw));
        width: var(--width);
        border-radius: 0%;
        border: none;
      }
      .item {
        border: 1px solid black;
        border-top: none;
        width: 100%;
      }
      
      body {
        position: relative;
        overflow-x: hidden;
      }
      .card {
        height: 44vh;
        width: 45vh;
        border: 3px solid black;
        border-radius: var(--upradius);
        padding: 15px;
        display: flex;
        flex-direction: column;
        row-gap: 7px;
      }
      .date {
        font-family: grotesk;
        font-size: x-small;
      }
      .address {
        width: 62%;
        font-family: grotesk;
      }
      .list {
        padding-top: 15px;
        height: 20vw;
        overflow: hidden auto;
      }
      
      h3 {
        font-weight: 500;
      }
      .list > .headrow {
        width: 100%;
        grid-template-columns: repeat(4, 6vw);
      }
      .item > .row {
        width: 100%;
        grid-template-columns: repeat(4, 6vw);
      }
      .item > .row > .cell {
        text-overflow: clip;
      }
      .total {
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-self: end;
        font-family: grotesk;
      }
      h3 {
        border: 1px solid black;
        border-radius: 7px;
        padding: 3px 7px;
      }
      button {
        padding: 1px 5px;
        font-family: "grotesk";
      }
      .overlay {
        height: 100vh;
        opacity: 0%;
        position: absolute;
        background-color: black;
        z-index: 1;
        transition: opacity 2s;
      }
      .container {
        transition: transform 2s;
        transform: translate(100vw);
        background-color: #fff;
        z-index: 5;
        position: absolute;
        width: fit-content;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 18px;
      }
      i.fa-solid.fa-xmark {
        align-self: end;
        padding: 5px 0;
        font-size: larger;
      }
      .thead-or > .headrow,
      .tbody-or > .row {
        grid-template-columns: 7vw 30vw 6vw 6vw 6vw;
        width: fit-content;
        text-wrap: nowrap;
        color: #5c5c66b3;
      }
      .thead-or > .headrow > .cell {
        color: #161527;
      }
      .tbody-or > .row {
        display: grid;
        border: 1px solid #5c5c66b3;
        border-top: none;
        align-items: center;
      }
      .headrow:nth-child(5) {
        /* width: 83px; */
        overflow: hidden;
        text-overflow: ellipsis;
        text-wrap: nowrap;
      }
      .tbody-or > .row > .cell:nth-child(2) {
        color: #0b0a0e;
      }
      
      .thead-or > .headrow > .cell:first-child {
        margin-left: 15px;
        padding: 7px;
      }
      .tbody-or > .row > .cell:first-child {
        margin-left: 15px;
        padding: 7px 1px;
        font-size: medium;
      }
      
      .header {
        font-family: grotesk;
      }
      .menu {
        display: flex;
        justify-content: space-between;
        margin-top: 1vw;
        width: 93%;
      }
      .table {
        margin: 10px 30px 50px;
      }
   
      
      
      select:focus-visible {
        outline-offset: 0;
        outline: 0;
      }
      .payments {
        margin-top: 13px;
        width: fit-content;
      }
      h3 {
        border: none;
      }
      
      .bill > .row:first-child {
        border: 1px solid;
        border-radius: 7px 7px 0 0;
      }
      .bill > .row {
        grid-template-columns: 6vw 43vw 6vw;
        width: fit-content;
        text-wrap: nowrap;
        color: #5c5c66b3;
      }
      .bill > .row:last-child {
        grid-template-columns: 49vw 6vw;
        width: fit-content;
        text-wrap: nowrap;
        color: #5c5c66b3;
      }
      .d {
        margin-top: 13px;
        width: fit-content;
      }
      h5 {
          color: #85878d;
      }
      section.contains {
        display: flex;
    }
    
    .customer {
        margin: 10px auto ;
    
    }

    .customercard {
        border: 1px solid;
        width: 13vw;
        padding: 11px;
        display: flex;
        gap: 15px;
        flex-direction: column;
        border-radius: 5px;
    }
    .details>h4, .details>h5 {
        font-weight: 500;
    }
    h5 {
        color: #85878d;
    }
    .details>h4 {
        font-size: smaller;
    }
    .header, #or-data {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .header {
        margin: 1vh auto;
        width: 85%;
    }
    div#or-data {
        gap: 28px;
    }
    .or-status>h5, a>h5 {
        padding: 2px 11px;
        border: 1px solid;
        color: black;
        border-radius: 6px;
    }
    a {
        text-decoration: none;
    }
    a>h5 {
        background: #3c55ff;
        color: white;
        font-weight: 500;
    }
    i.fa-solid.fa-arrow-left-long {
    height: fit-content;
    width: fit-content;
    border: 1px solid;
    border-radius: 5px;
    padding: 5px;
    font-size: x-large;
    color: black;
}
.icons {
    display: flex;
    align-items: center;
    gap: 15px;
}
</style>
</head>
<body>
    <div class="dashboard">
        <div class="overlay"></div>
        <div class="sidebar">
            <nav id="sidebar">
                <ul>
                  <li>
                    <span class="logo">MedicineGO</span>
                    <button onclick=toggleSidebar() id="toggle-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
                    </button>
                  </li>
                  <li >
                    <a href="index.html">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/></svg>
                      <span>Home</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="orders.html">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                      <span>Orders</span>
                    </a>
                  </li>
                  <li>
                    <button onclick=toggleSubMenu(this) class="dropdown-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z"/></svg>
                      <span>Create</span>
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                    </button>
                    <ul class="sub-menu">
                      <div>
                        <li><a href="#">Folder</a></li>
                        <li><a href="#">Document</a></li>
                        <li><a href="#">Project</a></li>
                      </div>
                    </ul>
                  </li>
                  <li>
                    <button onclick=toggleSubMenu(this) class="dropdown-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m221-313 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-228q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm0-320 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-548q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm339 353q-17 0-28.5-11.5T520-320q0-17 11.5-28.5T560-360h280q17 0 28.5 11.5T880-320q0 17-11.5 28.5T840-280H560Zm0-320q-17 0-28.5-11.5T520-640q0-17 11.5-28.5T560-680h280q17 0 28.5 11.5T880-640q0 17-11.5 28.5T840-600H560Z"/></svg>
                      <span>Todo-Lists</span>
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                    </button>
                    <ul class="sub-menu">
                      <div>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Private</a></li>
                        <li><a href="#">Coding</a></li>
                        <li><a href="#">Gardening</a></li>
                        <li><a href="#">School</a></li>
                      </div>
                    </ul>
                  </li>
                  <li>
                    <a href="calendar.html">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
                      <span>Calendar</span>
                    </a>
                  </li>
                  <li>
                    <a href="profile.html">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                      <span>Profile</span>
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
        <div class="main">
            <div class="header">
            <div class="icons"><a href="orders.html" class="href"><i class="fa-solid fa-arrow-left-long"></i>
           </a> <h1>Orders #<span id="orderID"><?php echo $id;?></span></h1>
                 </div><div id="or-data"> <div class="or-status"><h5>Status:<span id="status"><?php echo $status?></span></h5></div>
                <div class="dwn"><a onclick="generatePDF()"><h5>Download Invoice</h5></a></div>
            </div></div>

            <section class="contains">     
            <div class="table">
                <div class="d">
                  <h3>Order Details</h3>
                </div>
                <div class="thead-or">
                  <div class="headrow">
                    <div class="cell" contenteditable="true">Id</div>
                    <div class="cell" contenteditable="true">Product Name</div>
                    <div class="cell" contenteditable="true">Qty</div>
                    <div class="cell" contenteditable="true">Price</div>
                    <div class="cell" contenteditable="true">Total</div>
                  </div>
            
                </div>
                <div class="tbody-or">
                  <div class="row">
                    <div class="cell">101</div>
                    <div class="cell">Paracetamol</div>
                    <div class="cell">x2</div>
                    <div class="cell">₹50</div>
                    <div class="cell">₹100</div>
                  </div>
            
                  <div class="row">
                    <div class="cell">102</div>
                    <div class="cell">Amoxicillin</div>
                    <div class="cell">x1</div>
                    <div class="cell">₹120</div>
                    <div class="cell">₹120</div>
                  </div>
            
                  <div class="row">
                    <div class="cell">103</div>
                    <div class="cell">Ibuprofen</div>
                    <div class="cell">x3</div>
                    <div class="cell">₹30</div>
                    <div class="cell">₹90</div>
                  </div>
            
                  <div class="row">
                    <div class="cell">104</div>
                    <div class="cell">Cough Syrup</div>
                    <div class="cell">x1</div>
                    <div class="cell">₹150</div>
                    <div class="cell">₹150</div>
                  </div>
            
                </div>
            
                <div class="d">
                  <h3>Paid by Customer</h3>
                </div>
            
                <div class="tbody-or bill">
                  <div class="row">
                    <div class="cell">Subtotal</div>
                    <div class="cell"><span class="items"></span> items</div>
            
                    <div class="cell Subtotal">₹470</div>
                  </div>
            
                  <div class="row">
                    <div class="cell">Shipping</div>
                    <div class="cell"></div>
                    <div class="cell ship">₹12</div>
                  </div>
            
                  <div class="row">
                    <div class="cell">Total paid by customer</div>
            
                    <div class="cell total">₹482</div>
                  </div>
            
                </div>
            
              </div>
          <div class="customer">
              <div class="d">
                <h3>Customer Information</h3>
              </div>
          <div class="customercard">
            <div class="name details">
              <h5>Name</h5>
              <h4>Micky Jonson</h4>
            </div>

            <div class="email details">
                <h5>Email</h5>
                <h4>mickyjson062311@gmail.com</h4>
            </div>

                <div class="addresso details">
                  <h5>Shipping address</h5>
                  <h4>544/800 C Block,Park Way</h4></div>
            
            <div class="addresso details">
                  <h5>Payment address</h5>
                  <h4>Same as shipping address</h4></div>
            
                  <div class="payment details">
                    <h5>Payment</h5>
                    <h4>Cash on Delivery</h4>
                  </div>
                </div>
            </div>
                </section>





<div class="container">
    <i class="fa-solid fa-xmark"></i>
    <div class="card" >
        <div class="date">October 9, 2024</div>
        <div class="address">Christian Medical College & Hospital, Brown Rd, CMC Campus, Ludhiana, Punjab 141008</div>
        <div class="list">
            <div class="headrow">
                <div class="cell">Drug</div>
                <div class="cell">quantity</div>
                <div class="cell">price</div>
                <div class="cell">Total</div>
            </div>
      

        </div>
        <div class="total">
            <h3>Total</h3>
            <h3>2500</h3>
        </div>
    </div>
</div>




        </div>
        
    </div>
    <script>
  function generatePDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Add customer information
    const customerName = document.querySelector('.name h4').innerText;
    const customerEmail = document.querySelector('.email h4').innerText;
    const shippingAddress = document.querySelectorAll('.addresso h4')[0].innerText;
    const paymentAddress = document.querySelectorAll('.addresso h4')[1].innerText;
    const paymentMethod = document.querySelector('.payment h4').innerText;

    doc.setFontSize(12);
    doc.text(`Customer Name: ${customerName}`, 20, 20);
    doc.text(`Email: ${customerEmail}`, 20, 30);
    doc.text(`Shipping Address: ${shippingAddress}`, 20, 40);
    doc.text(`Payment Address: ${paymentAddress}`, 20, 50);
    doc.text(`Payment Method: ${paymentMethod}`, 20, 60);

    // Add space after customer info
    let currentY = 70;

    // Define table headers
    const headers = [["Id", "Product Name", "Qty", "Price", "Total"]];

    // Collect data from your HTML table structure
    const rows = [];
    const tableRows = document.querySelectorAll(".tbody-or .row");

    tableRows.forEach(row => {
      const cells = row.querySelectorAll(".cell");
      if (cells.length === 5) {
        const rowData = [
          cells[0].innerText,  // Id
          cells[1].innerText,  // Product Name
          cells[2].innerText,  // Qty
          cells[3].innerText,  // Price
          cells[4].innerText   // Total
        ];
        rows.push(rowData);
      }
    });

    // Use autoTable to add the extracted data to the PDF
    doc.autoTable({
      head: headers,
      body: rows,
      startY: currentY,
      theme: 'striped',
      headStyles: { fillColor: [41, 128, 185] }, // Custom header background color
      margin: { top: 10 }
    });

    // Add Subtotal, Shipping, and Total Paid
    const subtotalElement = document.querySelector(".Subtotal");
    const shippingElement = document.querySelector(".ship");
    const totalPaidElement = document.querySelector(".total");

    const subtotal = subtotalElement ? subtotalElement.innerText : "N/A";
    const shipping = shippingElement ? shippingElement.innerText : "N/A";
    const totalPaid = totalPaidElement ? totalPaidElement.innerText : "N/A";

    doc.text(`Subtotal: ${subtotal}`, 20, doc.autoTable.previous.finalY + 10);
    doc.text(`Shipping: ${shipping}`, 20, doc.autoTable.previous.finalY + 20);
    doc.text(`Total Paid: ${totalPaid}`, 20, doc.autoTable.previous.finalY + 30);

    // Save the PDF
    doc.save('invoice.pdf');
  }
</script>
    <script>
// datafill function fill data to table 
//cardval fetch specific order from order id
//uptable fetch all data 
//colorupdate() updates color of badges
//request function will request for data acording to tag buttons
//update_month() will update month to request



       
        // Replace '1' with the actual order or customer ID you want to fetch
        async function cardval(order){

        // Fetch the data from the API
        await fetch(`data.php?order="${order}"`)
            .then(response => response.text())  // Parse as text
            .then(data => {
                // Insert the table into the div
               
                let d = JSON.parse(data);
                console.log(d);
                updatevals(d)
            })
            .catch(error => {
                console.error('Error fetching order data:', error);
            });

        }

        function updatevals(data,t = 0,i=0){
          
            let subtotal = document.querySelector(".Subtotal");
            let total = document.querySelector(".total");
            let tbody = document.querySelector(".tbody-or");
            let ship = document.querySelector(".ship");
            let item = document.querySelector(".items");
             
            tbody.innerHTML = "";
            data.forEach(data=>{t+=(data["price"]*data["quantity"]);
              i++;

              tbody.innerHTML +=  `   <div class="row">
                     <div class="cell">12341</div>
                      <div class="cell">${data["product_name"]}</div>
                        <div class="cell">x${data["quantity"]}</div>
                        <div class="cell">₹${data["price"]}</div>
                        <div class="cell">₹${(data["price"]*data["quantity"]).toFixed(2)}</div>
                  </div>`
            })
            subtotal.innerHTML = "₹"+t.toFixed(2);
            let amt = parseFloat(t.toFixed(2))+parseFloat(ship.innerHTML.split("₹")[1]);
            total.innerHTML = "₹"+amt;
            colorupdate();
            console.log(`${<?php echo $status?>}`);
            item.innerHTML = i;
        } 
     
      function colorupdate(){
        let cell = document.querySelector("#status");
        let color,background;
            switch(cell.innerHTML){
                case "Pending":
                 color = "rgb(255, 0, 0)";
                 background = "rgba(255, 0, 0, 0.36)";
                 break;
                 case "Delivered":
                 color = "#32cd32";
                 background = "#32cd3236";
                 break;
                 case "Shipped":
                 color = "#ffa500";
                 background = "#ffa50036";
                 break;
        }
        cell.style.color = color;

       }

    

    
       cardval(<?php echo $id;?>)

    
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
</body>
</html>