<?php 
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"> 
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
        text-wrap: pretty;
        
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
      .thead-or > .headrow, .tbody-or > .row {
        grid-template-columns: 9vw 10vw 40vw 9vw 25vw;
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
        flex-direction: column;
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
.tbody-or > .row>.cell:nth-child(3) {
    color: #202022;
}
.tbody-or > .row>.cell:nth-child(5) {
    color: #202022;
}
.table {
    margin: 10px 17px 17px;
}
button.checkout[disabled] {
    color: #b1b1b1;
}
button.checkout {
    width: 80%;
    align-self: center;
    background: #f1f1f2;
    border: 1px solid;
    border-radius: 5px;
    padding: 4px;
    color: black;
}
</style>
</head>
<body>
    <div class="dashboard">
        <div class="overlay"></div>
        
        <div class="main">
            <div class="header">
            <div class="icons"><a href="index.html" class="href"><i class="fa-solid fa-arrow-left-long"></i>
           </a> <h1>Orders #<span id="orderID"><?php echo $id;?></span></h1>
                 </div></div>

            <section class="contains">     
            <div class="table">
                <div class="d">
                  <h3>Order Details</h3>
                </div>
                <div class="thead-or">
                  <div class="headrow">
                    <div class="cell" contenteditable="true"></div>
                    <div class="cell" contenteditable="true">Id</div>
                    <div class="cell" contenteditable="true">Product Name</div>
                    <div class="cell" contenteditable="true">Qty</div>
                    <div class="cell" contenteditable="true">Location</div>
                  </div>
            
                </div>
                <div class="tbody-or">
               
            
                  
            
                </div></div>
            
              <button type="button" class="checkout" disabled= "" onclick="message()">Checkout</button>
                </section>










        </div>
        
    </div>
   
    <script>
// datafill function fill data to table 
//cardval fetch specific order from order id
//uptable fetch all data 
//colorupdate() updates color of badges
//request function will request for data acording to tag buttons
//update_month() will update month to request

function validation(){
    console.log("hello")
let checkbox = document.querySelectorAll(".cell>input");
let button = document.querySelector(".checkout");
for(let i = 0;i<checkbox.length;i++){
    if(checkbox[i].checked != true){
        button.setAttribute('disabled', 'disabled');
        break;
    }
    if(checkbox[i].checked == true && checkbox[i] == checkbox[checkbox.length-1]){
        button.removeAttribute('disabled');
    }
}

}
       
async function cardval(order){

// Fetch the data from the API
await fetch(`../data.php?order="${order}"`)
    .then(response => response.text())  // Parse as text
    .then(data => {
        // Insert the table into the div
       
        let d = JSON.parse(data);
        
        updatevals(d)
    })
    .catch(error => {
        console.error('Error fetching order data:', error);
        alert('Error fetching order data:', error);
    });

}



        function updatevals(data,t = 0,i=0){
            let tbody = document.querySelector(".tbody-or");
             
            tbody.innerHTML = "";
            data.forEach(data=>{

              tbody.innerHTML +=  `    <div class="row"><div class="cell"><input type="checkbox" name="" id="" onclick="validation()"></div>
                    <div class="cell">101</div>
                    <div class="cell">${data["product_name"]}</div>
                    <div class="cell">x${data["quantity"]}</div>
                    <div class="cell">BOX 12,ROW A,Section C,Block A</div></div>`
            })
        } 
        function message(){

        }
     
cardval(<?php echo $id?>)

    
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
</body>
</html>