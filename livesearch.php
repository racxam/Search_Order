<?php
include("config.php");
if(isset($_POST["selectedOption"]) and isset($_POST["searchInput"])){
    $selectedOption = $_POST["selectedOption"];
    $searchInput = $_POST["searchInput"];
    
    $query = "SELECT * FROM order_table 
    INNER JOIN customer_table ON order_table.cust_id = customer_table.cust_id
    INNER JOIN product_table ON order_table.product_id = product_table.product_id
    WHERE order_table.order_id LIKE '{$searchInput}%' ";
    
    
    
      
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){ 
        ?>
       <?php
          while($row = mysqli_fetch_assoc($result)){

            $timestamp = strtotime($row['order_timestamp']);

            // Format date and time separately
            $date = date('Y-m-d', $timestamp); // Date format: YYYY-MM-DD
            $time = date('H:i:s', $timestamp); // Time format: HH:MM:SS
            $order_id= $row["order_id"];
            $order_type= $row["order_type"];
            $payment_status= $row["payment_status"];
            $payment= $row["payment"];
            $product_name= $row["product_name"]; 
            $cust_email= $row["cust_email"]; 
            $cust_mobile= $row["cust_mobile"]; 
            $product_img= $row["product_img"];
            $product_name= $row["product_name"];

            $cust_address= $row["cust_address"];
            $address_parts = explode(',', $cust_address);
            if (count($address_parts) >= 2) {
                $house_number = trim($address_parts[0]); // Trim any leading/trailing whitespace
                $another_addr = trim($address_parts[1]); 
                $another_addr2 = trim($address_parts[2]); 

                // Trim any leading/trailing whitespace
                
            } else {
                // Handle case where address format is unexpected
                echo "Unable to parse address";
            }
           


            ?>
            
            
            



          
          <!-- <?php echo $product_name;?> -->
          <div class="order_container shadow" id="searchResult">
            <div class="order">
                <div class="order_date order_box">
                    <p><b>Order Date</b></p>
                    <p style="font-size: 0.8rem; text-align: center; " ><?php echo $date;?></p>
                    <p style="font-size: 0.8rem; text-align: center; "><?php echo $time;?></p>
                </div>
                <div class="order_no order_box">
                    <p style="color: blue;"><?php echo $order_id;?></p>
                    <span id="prepaid"><?php echo $order_type;?></span>
                </div>
                <div class="buyer_details order_box">
                    <p style="text-align: start;"><b><u>Buyer Details:</u></b></p>
                    <p style="text-align: start; font-size:0.8rem">
                       
                        <?php echo $house_number;?>
                        <br>
                        <?php echo $another_addr;?> <?php echo","?> <?php echo $another_addr2;?><br>
                        Email: <?php echo $cust_email;?>
                        <br>
                        Phone: <?php echo $cust_mobile;?>  
                        Pincode : 763921
                    </p>
                </div>
                <div class="payment_status order_box">
                    <p style="color: red;"><b><?php echo $payment_status;?></b></p>
                    <p><b>Total:<?php echo $payment;?></b></p>

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
                    <img src=<?php echo $product_img;?> height="70px"   >
                    
                    


                </div>
                <div class="pro_details">
                    <a href="#"> <?php echo $product_name;?></a>
                    <div class="pro_actual_details">
                        <span class="first_half">
                            <p> Model: Electronics
                                <br>
                                Price: <?php echo $payment;?>
                                <br>
                                Date: <?php echo $order_timestamp;?>
                                <br>
                                Discount: 0</p>
                        </span>
                        <span class="sec_half">
                            <p>
                           
                                Oty: 1
                                <br>
                                Delivery Charge:0
                                <br>
                                Status: <?php echo $payment_status;?>
                                 </p>
                        </span>
                        
                    </div>
                    

                </div>

            </div>

        </div>
          
          <?php




          }
          ?>

<?php

    }else{
        echo "<h1 style='color:red; text-align:center;'>No data Found!!</h1>";
    }
}
?>
