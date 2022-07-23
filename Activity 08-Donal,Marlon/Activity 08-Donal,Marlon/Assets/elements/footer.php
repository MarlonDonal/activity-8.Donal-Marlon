<div class="text7">
                  <p>At vero eos et accusamus et iusto odio</p>
              </div>
               <div class="text8">
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio <br>nihil impedit quo minus id quod maxime placeat facere.</p>
              </div>
            
               <div id="wanwan">
                <img src="Assets/iphone7.png" alt="iphone7" height="223" width="267">
                    <div class="text12">
                  <p>Ut enim ad minima veniam</p>
                  </div>
                     
                     </div>
                     <div class="text9">
                  <p>Nam libero tempore, cum <br>soluta nobis est eligendi</p>
                  <div class="text10">
                  <p>Nam libero tempore, cum <br>soluta nobis est eligendi</p>
                  </div>
                   <div class="text11">
                  <p>Nam libero tempore, cum <br>soluta nobis est eligendi</p>
                  </div>
              </div> 
                     <div id="phone">
                         <img src="Assets/phone.png" alt="phone" height="300" width="150">
                     </div>
                    
            <div id="wifi2">
               <img src="Assets/wifi.png" alt="wifi2" width="82" height="82">
                </div>
                <div id="connect2">
                <img src="Assets/connect%202.png" alt="connect2">  
                </div>
                <div id="message2">
                    <img src="Assets/message.png" alt="message">
                </div>
               <div id="loginform"></div>
                 
                 <div id=vert>
                </div>
                
                <div id=tical>
                </div>
                
                <div id="horiz">
                   <div class="text13">
                  <p>Iste Natus</p>
                  </div>
                    <div class="text14">
                  <p>Qui ratione</p>
                  </div>
                    
                    
                </div>
                <div id="orange"> </div>
                <div id="blue"> </div>
                
                <div id="search-box">
                   <input class="search-text" type="text" name=" " placeholder="Aperiam">
                   <a class="search-btn" href="Lorem.htm">
                       <img src="Assets/search.png" alt="searchbtn" class="searchbtn" height="40px" width="40px">
                   </a>        
                </div>
                <div id="box">
                     </div>
                     
                     <div class="lorem-ipsum" href="#">
                         <p1><a href="Nostrum.html">Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> </p1> 
                         <p1><a href="Lorem.htm">Products &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </p1> 
                         <p1><a href="About.html">About us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </p1>
                     </div>
                     
                     
                
                
                
             <div>
                 <a href="Google.com"><button class="button1">Voluptatibus</button>
            </a>
            </div>
              <div>
                 <a href="Google.com"><button class="button2">Vel illum qui</button>
            </a>
            </div>      
              
            <div>
	<?php
	 if(isset($_POST['create'])){
		$email = $_POST['email'];
		$password= $_POST['password'];

		$sql ="INSERT INTO information(email, password) VALUES(?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'Error';
		}
		

	 }
	 
	 ?>

            <form action="nostrum.php" method="post" >
          
           <input type="text3" name="email" placeholder="Adipiscing">
           <input type="text4" name="password" placeholder="Ex ea commodi">
           <div>
                 
                 <input class="button3" type="submit" name="create" value="Vel illum qui">
            </div>
        </form>
        <script>
            document.onreadystatechange=function() {
                if (document.readyState !== "complete"){
                    document.querySelector(
                    "body").style .visibility= "visible";
                    }
                else{
                    document.querySelector(
                    "#loader").style .display="none";
                    document.querySelector(
                    "body") .style .visibility="visible";
                }
            };
       
       
       
       </script> 