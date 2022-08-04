<!DOCTYPE html>
<html>
    <head>

        <title>Admin-PL</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <link rel="stylesheet" href="adminfix.css">
        <script  src="./admin.js"></script>
    </head>
   
    <body>
<!--menu segment-->
<div id="menu">
        <div class="ui segment topSegment">
            <h1 class="ui header">POLYFIX</h1> 
            <h3 class="ui header" id="h3" >Admin Drashboard</h3>
            <h5 class="ui header " id="h5"></h5><button class="ui basic button inverted black">Login</button></h5>
        </div>
        <div class="ui segment tertiary inverted gray">
            <div class="ui gride">
                <div class="ui four column grid">
                    <div class="row grid-row top-row">
                      <div class="column">
                        <button class="ui basic button massive box">
                            <i class="icon user"></i>
                            USER
                          </button>
                      </div>
                      <div class="column">
                        <button class="ui basic button massive box">
                            <i class="icon shipping fast"></i>
                            ORDER
                          </button>
                      </div>
                      <div class="column">
                        <button class="ui basic button massive box">
                            <i class="icon box"></i>
                            PRODUCTS
                          </button>
                      </div>
                      <div class="column">
                        <div class="column">
                            <button class="ui basic button massive box" >
                                <i class="icon box"></i>
                                METERIALS
                            </button>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                    <button class="ui basic button massive " onclick="displayViewseller()">View Sellers </button >
                    </div>
                    <div class="column">
                        <button class="ui basic button  massive " onclick="displayVieworder()">View Orders </button>
                    </div>
                    <div class="column">
                        <button class="ui basic button massive "onclick="displayProduct()">View Products </button>
                    </div>
                    <div class="column">
                        <button class="ui basic button massive ">Daily Report </button>
                    </div>
                </div>
                
                <div class="row">
                    <div class="column">
                    <button class="ui basic button massive" onclick="displayReg()">Add Sellers </button>
                    </div>
                    <div class="column">
                        <button class="ui basic button massive" onclick="displayDelete()">Delete Orders </button>
                    </div>
                    <div class="column">
                        <button class="ui basic button massive" onclick="displayUpdate()">Update Products </button>
                    </div>
                    <div class="column">
                        <button class="ui basic button massive">Weekly Report </button>
                    </div>
                </div>
        </div>
    </div>
        
    </div>
</div>

<!--seller-reg-segment-->
<div class="seller-reg" id="seller_reg">
   <div class="ui segment tertiary inverted gray">
    <div class="ui buttons segment-margin">
        <button class="ui labeled icon button" onclick="backtoMenu()">
          <i class="left chevron icon"></i>
          Back
        </button >
    </div>
    <label class="label-seller">SELLER REG</label>
    <form class="ui form" action="seller_reg.php" method="post">
        <div class="field">
          <label>Company Name</label>
          <input type="text" name="Company_Name" placeholder="Company Name">
        </div>
        <div class="field">
          <label>Email</label>
          <input type="text" name="Email" placeholder="Email">
        </div>
        <div class="field">
            <label>Contact Number</label>
            <input type="text" name="Contact_Number" placeholder="Contact Number">
        </div>
        <div class="field">
            <label>Pass</label>
            <input type="text" name="Pass" placeholder="Pass">
        </div>
        <div class="field">
            <label>District</label>
            <input type="text" name="District" placeholder="District">
        </div>
        
        <button class="ui button" type="submit" name="reg_submit">Submit</button>
      </form>
   </div>
</div>

<!--delete-segment-->
<div class="delete-segment" id="delete_segment">
    <div class="ui segment tertiary inverted gray">
        <div class="ui buttons segment-margin">
            <button class="ui labeled icon button" onclick="backtoMenu()">
              <i class="left chevron icon"></i>
              Back
            </button >
        </div>
        <label class="label-delete">REMOVE ORDER</label>
        <form class="ui form" action="delete.php" method="post">
                <div class="ui placeholder segment tertiary inverted gray">
                    <div class="ui icon header">
                      <i class="trash alternate icon"></i>
                      Please double check ID Remove will be permenet.
                    </div>
                    <input type="text" name="order_id" placeholder="Order ID">
                </div>
                <button class="ui button" type="submit" name="remove_submit">Submit</button>
                </div>
               
          </form>
       </div>

</div>

<!--update-segment-->
<div class="update-segment" id="update_segment">
    <div class="ui segment tertiary inverted gray">
        <div class="ui buttons segment-margin">
            <button class="ui labeled icon button" onclick="backtoMenu()">
              <i class="left chevron icon"></i>
              Back
            </button >
        </div>
        <label class="label-product">UPDATE PRODUCTS</label>
        <form class="ui form" action="update.php" method="post">
            <div class="field">
              <label>Product ID</label>
              <input type="text" name="product_id" placeholder="ID">
            </div>
            <div class="field">
              <label>Product Type</label>
              <input type="text" name="product_type" placeholder="Type">
            </div>
            <div class="field">
                <label>Quntity</label>
                <input type="text" name="product_quntity" placeholder="Quntity">
            </div>
            <div class="field">
                <label>Price</label>
                <input type="text" name="product_price" placeholder="LKR">
            </div>
            
            
            <button class="ui button" type="submit" name="update_submit">Submit</button>
          </form>
       </div>
</div>

<!--seller-view-segment-->
<div class="viewseller-segment" id="view_segment">
    <div class="ui segment tertiary inverted gray">
        <div class="ui buttons segment-margin">
            <button class="ui labeled icon button" onclick="backtoMenu()">
              <i class="left chevron icon"></i>
              Back
            </button >
        </div>
        <label class="label-product">SELLER INFO</label>
        <?php  include 'sellerinfo.php';?>
       </div>
</div>

<!--orders-view-segment-->
<div class="vieworders-segment" id="order_segment">
    <div class="ui segment tertiary inverted gray">
        <div class="ui buttons segment-margin">
            <button class="ui labeled icon button" onclick="backtoMenu()">
              <i class="left chevron icon"></i>
              Back
            </button >
        </div>
        <label class="label-product">ORDER INFO</label>
        <?php  include 'orderinfo.php';?>
       </div>
</div>

<!--product-view-segment-->
<div class="product-segment" id="product_segment">
    <div class="ui segment tertiary inverted gray">
        <div class="ui buttons segment-margin">
            <button class="ui labeled icon button" onclick="backtoMenu()">
              <i class="left chevron icon"></i>
              Back
            </button >
        </div>
        <label class="label-product">PRODUCTS INFO</label>
        <?php  include 'productinfo.php';?>
       </div>
</div>
 
    <footer class="footerfix">
        <p class="footer">Copyright @Copyright 2022 Admin-PL. All Rights Reserved.</p>
    </footer>
    </body>
</html>

