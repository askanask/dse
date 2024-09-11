<html>
<head>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<title> home page sign in </title>
<link rel="stylesheet"  href="style.css">

<style> 
.sample a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}
@media screen and (max-width:2000px){
    .background .sample{
        display: flex;
    width: 100%;
justify-content: center;
    
}
.foodname{justify-content: center;
    align-items: center;
    margin: 10px 20px 10px 20px;
    width: auto;
    height: auto;
    background-color: #FFC300;
    color:black;
    border-radius: 10px;
    padding: 10px;
font-size: 15px;


}

}
@media screen and (max-width:640px){
    .background {
    background-size: cover;
    height: 1000%;
}
.background h1{
    font-size: 30px;
}

   .background .description{
    visibility: hidden;
   }
.background .foodcontainer #foodandprice #food img{
    width: 480px;
    height: 250px;
}

.background .foodcontainer{
    display: block;
}
.background .description{
    width: 350px;
    height: auto;
font-size: 20px;
}
}

.foodcontainer{

height: 700px;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;

margin: 0;


}
#foodandprice{
border-radius: 20px;
background:#FFC300 ;
margin:20px;
font-size: 17px;
flex-direction:row ;
border: white 2px solid ;
border: 2px;
height: 400px;
box-shadow: 0 14px 28px black;
}

#food{

	
	margin: 10px;
	background: white;
	border-radius: 5px;
}
#food img{
	margin: 5px;
    width: 300px;
height: 200px;	
border-radius: 5px;
transition: all 1s ease-in-out;
object-fit: cover;
}
#food img:hover{
	transform:scale(1.2);
	width: 300px;
height: 200px;
	}

	

#food_order{
    
 color: white;
 background: #000;
 border-radius: 5px;
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 font-weight: bold;
 font-size: 30px;
 width: 95%;
 height: auto;
 border: white 2px solid ;
 padding:5px; 
 margin: 5px;
 margin-left: 10px;

}#food_order a:hover{
color: black;
    text-decoration: none;
}
#food_order a{
color: white;
    text-decoration: none;
}
#food_order:hover{
color: black;
background: white;



}
.list{
	background: red;
}
#price{
	width: auto;
	height: auto;
	color:black;
	font-weight:bold;
	font-size: 20px;
	margin: 10px;
	padding: 10px;
}
.description{
    display: flex;
color: white;
font-size:20px;

width: 95%;
padding:30px;
height: 120px;
align-items: center;

}
*{
    margin: 0;
    padding: 0;
}
.background p {
    background-color: white;
    color: black;
    font-size: 20px;
    font-family: poppins;
    padding: 30px;

}


.background h1{
    margin:15px 10px ;
    display: flex;
    justify-content: center;
    border-top: 2px solid;
  align-items: center;
color: white;
background-color: black;
border-bottom: 2px solid;
}

#price  button  a{

    text-decoration: none;
}



.footer{
 
display:flex;
flex-direction: column;
justify-content: center;
align-items: center;
background: #000;
color: white;
margin: 10px;


}
.footer h2{



color: white;
font-size: 10px;
margin: 5px;

}



</style>
</head>
<body>
    <script src="https://kit.fontawesome.com/7919f47700.js" crossorigin="anonymous"></script>
    <div class="navigation">
    <img src="http://localhost/dse/images/skyrestlogo.png" alt="">

        <a href="http://localhost/dse//index.php"> HOME</a>
        
        <a href="" class="active">ABOUT US </a>
       
    </div> 
<div class="background"> 
    <div class="sample">
    <div class="foodname" ><a href="#chicken"> chicken</a> </div>
    <div class="foodname" ><a href="#rice"> rice</a> </div>
    <div class="foodname" > <a href="#buriyani" >Buriyani</a> </div>
    
    <div class="foodname" ><a href="#submrine"> submerine</a> </div>
    
    <div class="foodname" ><a href="#bbq"> Bbq</a> </div>



</div>
<h1>
   nuweraliya food hotal
</h1>
<p> Welcome to SKYREST, where culinary excellence meets warm hospitality in a cozy ambiance.
     Our restaurant is a haven for food enthusiasts seeking an unforgettable dining experience. Situated in the heart o
     f ampara, we pride 
ourselves on offering an exquisite fusion of flavors that tantalize the taste buds and leave you craving for more.</p>
  

<div class="foodcontainer" id="chicken">

    <div id="foodandprice">
    <div id="food"><img src="http://localhost/dse/images/hotwings.jpg" alt="">  </div>
        <div id="price">
            4 peace = 850/- <br>
            FOOD ID - 4HW850
        </div>
        <button id="food_order"> <a href="http://localhost/dse/creat account.php">ORDER</a></button>
    </div>
    
    
    
        <div id="foodandprice">
            <div id="food"><img src="http://localhost/dse/images/chicken65.jpg" alt="">  </div>
                <div id="price">
                    1 full  peace =600/- <BR>
                    FOOD ID -CKNF600
                </div>
                <button id="food_order"><a href="http://localhost/dse/creat account.php">order </a></button>
            </div>
    
            
                    
    <div id="foodandprice">
                    <div id="food"><img src="http://localhost/dse/images/chicken.jpeg"  for="food_order"alt="">  </div>
                        <div id="price">
                            Chicken = 850/- <br>
                            FOOD ID -CKN850
                        </div>
                        <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                    </div>
                 
       </div>
    
    
                    <div class="description">
    <p>At SKYREST, we are passionate about serving only the finest quality ingredients 
        sourced from local producers and trusted suppliers. Our menu features a diverse selection of culinary delights, ranging from classic comfort foods to innovative gourmet creations. Whether you're craving juicy steaks, 
        succulent seafood, or vibrant vegetarian dishes, we have something to satisfy every palate..</p>
</div>

    
       <div class="foodcontainer" id="rice">

        <div id="foodandprice">
        <div id="food"><img src="http://localhost/dse/images/rice.jpg" alt="">  </div>
            <div id="price">
                special Chicken rice = 1050/- <br>
                FOOD ID - SCR1050
            </div>
            <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
        </div>
        
      
        
            
        
                    <div id="foodandprice">
                        <div id="food"><img src="http://localhost/dse/images/buriyani.jpg" alt="">  </div>
                            <div id="price">
                                buriyani = 850/- <br>
                                 FOOD ID - BR850
                            </div>
                            <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                        </div>
                        
        <div id="foodandprice">
                        <div id="food"><img src="http://localhost/dse/images/egg-biryani.jpg" alt="">  </div>
                            <div id="price">
                                egg-buriyani = 450/- <br>
                                FOOD ID - EBR450
                            </div>
                            <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                        </div>
                
           </div>
<div class="description">
    <p>As you step into our restaurant, you'll be greeted by the inviting aroma of freshly 
        prepared dishes and the friendly smiles of our staff. Our interior décor reflects 
        a perfect blend of modern elegance and rustic charm, creating a welcoming
         atmosphere for diners of all ages.</p>
</div>
           
            
            
                                <div class="foodcontainer" id="buriyani">

                                    <div id="foodandprice">
                                    <div id="food"><img src="http://localhost/dse/images/fullburiyani.jpg" alt="">  </div>
                                        <div id="price">
                                            full buriyani = 950/-<br>
                                            FOOD ID - FBR950
                                        </div>
                                        <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                    </div>
                                    
                                    
                                    
                                        <div id="foodandprice">
                                            <div id="food"><img src="http://localhost/dse/images/thumbburiyani.jpg" alt="">  </div>
                                                <div id="price">
                                                    Thumb Buriyani =900/- <br>
                                                    FOOD ID - TBR900
                                                </div>
                                                <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                            </div>
                                    
                                            
                                                    
                                    <div id="foodandprice">
                                                    <div id="food"><img src="http://localhost/dse/images/egg-Biryani.jpg" alt="">  </div>
                                                        <div id="price">
                                                            EGG-Buriyani= 500/- <br>
                                                            FOOD ID - EGB500
                                                        </div>
                                                        <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                                    </div>
                                                    </div> 
                                                    <div class="description">
    <p>
Indulge in our signature dishes such as special burgers, special  buriyanies, and special chicken verieties,  
expertly crafted by our talented team of chefs who pour their creativity and expertise into each plate. 
Pair your meal with a selection from our curated wine list or choose from our assortment of handcrafted
 cocktails and mocktails for a truly memorable dining experience...</p>
</div>
                                    
                                      

                                       <div class="foodcontainer" id="submrine">

                                        <div id="foodandprice">
                                        <div id="food"><img src="http://localhost/dse/images/sub.jpg" alt="">  </div>
                                            <div id="price">
                                                Large Submerine = 780/- <br>
                                                FOOD ID - LSB780
                                            </div>
                                            <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                        </div>
                                        
                                        
                                        
                                            <div id="foodandprice">
                                                <div id="food"><img src="http://localhost/dse/images/minisub.jpg" alt="">  </div>
                                                    <div id="price">
                                                         Mini Submerine =  300/- <br>
                                                         FOOD ID - MSB300
                                                    </div>
                                                    <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                                </div>
                                        
                                                
                                                        
                                        <div id="foodandprice">
                                                        <div id="food"><img src="http://localhost/dse/images/swrm.jpg" alt="">  </div>
                                                            <div id="price">
                                                            Sawerma  = 600/- <br>
                                                            FOOD ID - swm600
                                                            </div>
                                                            <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                                        </div>
                                                   
                                                        </div> 

                                                        <div class="description">
    <p>
    In addition to our à la carte menu, we also offer a variety of seasonal specials and chef's recommendations 
    that highlight the freshest ingredients of the season. Whether you're celebrating a special occasion with l
    oved ones, hosting a business lunch, or simply enjoying a night out with friends, our attentive 
    staff is dedicated to ensuring that every moment spent at SKYREST is nothing short of extraordinary.</p>
</div>
              
                                        
                                        
                                          
                                           <div class="foodcontainer" id="bbq">

                                            <div id="foodandprice">
                                            <div id="food"><img src="http://localhost/dse/images/bbq.jpg" alt="">  </div>
                                                <div id="price">
                                                    BBQ  full peace = 1600/- <br>
                                                    FOOD ID - BBF1600
                                                </div>
                                                <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                            </div>
                                            
                                            
                                            
                                                <div id="foodandprice">
                                                    <div id="food"><img src="http://localhost/dse/images/chicken95.jpg" alt="">  </div>
                                                        <div id="price">
                                                            Chicken 65  with Rice =  800/- <br>
                                                            FOOD ID - CWR65800
                                                        </div>
                                                        <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                                    </div>
                                            
                                                    
                                                            
                                            <div id="foodandprice">
                                                            <div id="food"><img src="http://localhost/dse/images/chicken95.jpg" alt="">  </div>
                                                                <div id="price">
                                                                Chicken 95 with Rice  = 1100/- <br>
                                                                FOOD ID - CWR951100
                                                                </div>
                                                                <button id="food_order"><a href="http://localhost/dse\creat account.php">order </a></button>
                                                            </div>
                                                         
                                            
                                            
                                               </div> 

                                               <div class="description">
    <p>
    We invite you to explore our website to learn more about our menu offerings, make reservations,
     or inquire about hosting private events. Join us at SKYREST 
    and embark on a culinary journey that promises to delight your senses and 
    leave you with cherished memories.</p>
</div>
                      
 </div>




<div class="footer">
<h2> <i class="fa-solid fa-house"></i> SKY REST</h2> 

<h2>  <i class="fa-solid fa-globe"></i> skyrest.order@gmail.com </h2> 
<h2>  <i class="fa-solid fa-phone"></i>  075472846, 0728497854  </h2>
</div>


</body>


</html>