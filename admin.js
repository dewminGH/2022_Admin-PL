
    //Inner-window-size-> >1274  gap on headers 40% 35%
    //Inner-window-size-> >900 <1274  gap on headers 30% 35%
    //Inner-window-size-> >650 <900 gap on headers 25% 20%
    //Inner-window-size-> <650  gap on headers 20% 10%
    //returns JS object
    function Resizer(){ if(window.innerWidth>1200)
    {return {width_1 : '40%',  width_2 : '30%' }}
    if(window.innerWidth>900)
    {return {width_1 : '30%',  width_2 : '20%' }}
    if(window.innerWidth>650)
    {return {width_1 : '25%',  width_2 : '20%' }}
    return {width_1 : '20%' , width_2 : '5%', }
    }

    //check inner window-width in each 0.4s
    function innerCode(){
    setTimeout(()=>{    
    var x=Resizer();
    console.log(window.innerWidth)
    //document.write(window.innerWidth)
    document.getElementById('h3').style.marginLeft=x.width_1
    document.getElementById('h5').style.marginLeft=x.width_2
    innerCode();},400)
    }
    innerCode();
    

    //--------------------
    //hide all segments except menu-div
   function backtoMenu(){
    document.getElementById('menu').style.display='block'
    document.getElementById('seller_reg').style.display='none'
    document.getElementById('delete_segment').style.display='none'
    document.getElementById('update_segment').style.display='none'
    document.getElementById('view_segment').style.display='none'
    document.getElementById('order_segment').style.display='none'
    document.getElementById('product_segment').style.display='none'
   }

    //show register-div
    function displayReg(){
    document.getElementById('menu').style.display='none'
    document.getElementById('seller_reg').style.display='block'
   }

   

   //show delete-div
   function displayDelete(){
    document.getElementById('menu').style.display='none'
    document.getElementById('delete_segment').style.display='block'
   }

   //show update_segment
   function displayUpdate(){
    document.getElementById('menu').style.display='none'
    document.getElementById('update_segment').style.display='block'
   }

   //show viewseller-segment
   function displayViewseller(){
    document.getElementById('menu').style.display='none'
    document.getElementById('view_segment').style.display='block'
   }

   //show order-segment
   function displayVieworder(){
    document.getElementById('menu').style.display='none'
    document.getElementById('order_segment').style.display='block'
   }

   //show product-segment
   function displayProduct(){
    document.getElementById('menu').style.display='none'
    document.getElementById('product_segment').style.display='block'
   }