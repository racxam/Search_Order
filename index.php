
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_Order</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        :root {
    --background-color: #e7e7e1; /* gray */
    --search-order-color: #1dd258; /* green */
    --inside-searchbar-color: #d7d7d1;/* dark gray */
    --main-div-color:#f8f8f8;
    --prepaid-color:#41f465;
    --product-div-color:white;
    --track-color: #9e9d9d;/* dark gray*/
  }
  *,::after,::before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  *:focus{
    outline: none;
  }
.shadow {
    box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.5); /* Add a shadow */
  }
  
.fieldset-wrapper {
    border: 1px solid black; /* Add border */
    border-radius: 60px; /* Add border radius */

}
.main{
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;

    align-items: center;
    background-color: var(--background-color);
}
h1{
    margin-top: 2vw;
    margin-bottom: 2vw;
    font-family:'Blooming Elegant Sans Bold';
    text-transform: uppercase;
}
.searchbar-container{
    height: 76px;
    width: 70vw;
    border-radius: 100px;
    margin-bottom: 2vw;
    background-color: white;
    display: flex;
    flex-direction: column; 
    align-items: center;
    justify-content:center; 


}
.searchbar{
    height: 60px;
    width: 68vw;
}
fieldset{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        border: none; /* Remove border */
        padding: 0; /* Remove padding */
        margin: 0; /* Remove margin */
}
legend{
    margin-left: 16px;
}

fieldset input[type="text"]{
    padding: 8px 10px;
    width: clamp(150px, 50%, 600px);
    border: 3px solid rgba(0, 0, 0, 0.791);
     border-radius: 20px;
     background-color: var(--inside-searchbar-color);
}
/* fieldset input[type="text"]:active{
    outline: none
} */
button[name="searchbtn"]{
    width: clamp(90px,16%,400px);
    padding: 8px 10px;
    border-radius: 20px;
    background: rgb(31,216,91);
    background: linear-gradient(90deg, rgba(31,216,91,1) 0%, rgba(21,175,72,1) 35%, rgba(21,175,72,1) 100%);
    color: white;
    text-transform: uppercase;
    border: none;
    font-size: 0.8rem;
    margin-right: 10px ;

}
button[name="searchbtn"]:hover{
    cursor: pointer;
    
}

.order_container{

    height: 400px;
    width: 70vw;
    border-radius: 3px;
    background-color: var(--main-div-color);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-bottom: 10px;

  

}

.product{
    width: 60%;
    height: 30%;
    margin-top: 50px;
    border-radius: 4px;

    align-self: flex-start;
    margin-left: 50px;
    background-color: var(--product-div-color);
    display: flex;
    flex-direction: row;
}
.photo_container{
  height: 100%;
  width: 20%;
  /* border: 1px solid green; */
  display: flex;
  justify-content: center;

}
.photo_container img{
    margin-top: 20px;
}
.pro_details{
    height: 100%;
  width: 80%;
  /* border: 1px solid green; */

}
.order{
    width: 100%;
    height: 40%;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    /* gap: 20px; */


}
.order_box{
    height: 100%;
    width: 150px;
    /* border: 1px solid red; */
    text-align: center;
}
.buyer_details{
    flex-grow: 2;
}
.invoice{
    flex-grow: 3;
}

#prepaid{
    background-color: var(--prepaid-color);
    padding: 2px 18px;
    border-radius: 4px;
}
#track{
    background-color: var(--track-color);
    padding:3px 20px;
    border-radius:4px;
    font-size: 20px;

    color: gainsboro;

}

.pro_actual_details{
    /* height: 100%; */
    display: flex;
    flex-direction: row;
    gap:40px;


    

}
.first_half{
height: 100%;
/* border: 1px solid red; */
}
.sec_half{
    height: 100%;
    flex-grow: 2;

    /* border: 1px solid red; */

}

    </style>
</head>

<body>
    <div class="main">
        <h1>Search Order</h1>
        <div class="searchbar-container shadow">
            <fieldset class="searchbar fieldset-wrapper">
                <legend>Search Order</legend>
                <p style="margin-left: 8px;">By </p>&nbsp;&nbsp;
                <input type="radio" id="order_id" name="option" value="order_id" checked>&nbsp;
                <label for="order_id">Order id</label>&nbsp;

                <input type="radio" id="mobile" name="option" value="mobile">&nbsp;
                <label for="mobile">Mobile</label>&nbsp;
                <input type="radio" id="name" name="option" value="name">&nbsp;
                <label for="name">Name</label>&nbsp;

                <input type="radio" id="email" name="option" value="email">&nbsp;
                <label for="email">Email</label>&nbsp;&nbsp;


                <input type="text" placeholder="Search..." id="searchInput">&nbsp;&nbsp;
                <button type="button" name="searchbtn" id="submitButton">Search Order</button>
            </fieldset>

        </div>
        <div class="order_container shadow" id="searchResult">
            <div class="order">
                <div class="order_date order_box">
                    <p><b>Order Date</b></p>
                    <p style="font-size: 0.8rem; text-align: center;  " >27-12-2023</p>
                    <p style="font-size: 0.8rem; text-align: center; ">19:51:41 PM</p>
                </div>
                <div class="order_no order_box">
                    <p style="color: blue;">1784215910</p>
                    <span id="prepaid">Prepaid</span>
                </div>
                <div class="buyer_details order_box">
                    <p style="text-align: start;"><b><u>Buyer Details:</u></b></p>
                    <p style="text-align: start; font-size:0.8rem;">
                        123
                        <br>
                        309 barkat, Jaipur,Rajasthan
                        <br>
                        Email:wedewe6342@vkr1.com
                        <br>
                        Phone: 9876543210  Pincode : 302018
                    </p>
                </div>
                <div class="payment_status order_box">
                    <p style="color: red;"><b>Payment-awaiting</b></p>
                    <p><b>Total:53800</b></p>

                </div>
                <div class="track order_box">

                    <span id="track">Track</span>
                </div>
                <div class="invoice order_box" style="display: flex; justify-content: start;">
                    <a href="#" ><b>Generate Invoice</b></a>
                </div>
            </div>
            <div class="product shadow">
                <div class="photo_container">
                    <img src="data:image/jpeg;base64,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" height="50px" width="80px"  >


                </div>
                <div class="pro_details">
                    <a href="#"> Marshall Woburn 3 Bluetooth Speaker With HDMI Connectivity</a>
                    <div class="pro_actual_details">
                        <span class="first_half">
                            <p> Model: Woburn 3
                                <br>
                                Price: Rs. 53800
                                <br>
                                Date: 2023-12-27 19:51:41
                                <br>
                                Discount: 0</p>
                        </span>
                        <span class="sec_half">
                            <p>
                           
                                Oty: 1
                                <br>
                                Delivery Charge:0
                                <br>
                                Status: payment-awaiting
                                 </p>
                        </span>
                        
                    </div>
                    

                </div>

            </div>

        </div>

    </div>
    <script>
        $(document).ready(function(){
            $("#submitButton").click(function(){
                
                var selectedOption = $("input[name='option']:checked").val();
                var searchInput = $("#searchInput").val();
                if(searchInput!=""){
                    $.ajax({
                        url:"livesearch.php",
                        method:"POST",
                        data:{searchInput:searchInput,
                            selectedOption:selectedOption,
                        },
                        success:function(data){
                            $('#searchResult').html(data);
                            $('#searchResult').css("display","block");

                        }
                    });
                    
                } else{
                    // $("#searchResult").css("display","none");
                }

            });
        });
    
    </script>
</body>

</html>