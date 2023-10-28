
<head>
<title>HOME</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style1.css">

 <script>  
        function show()  
        {  
            $.ajax({  
                url: "transfer/temp-1.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html); 
				}
             }); 
           $.ajax({  
                url: "transfer/temp-2.php",  
                cache: false,  
                success: function(html){  
                    $("#content-1").html(html); 
                }
             }); 
             
             $.ajax({  
                url: "transfer/ledstate.php",  
                cache: false,  
                success: function(html){  
                    $("#content-3").html(html); 
                }
             }); 
             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led,url) {
      jQuery.ajax({
      url:    url ,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led).serialize(),
         });
}

</script>
    
</head>
    <body>
          <div class="r">
          <p class="r1">Температура  дома</p>
          <div class="r2" style="display:inline-block;">
          <div class="r3" id="content"></div> 
          <div class="r3"> C<sup>o</sup></div>
          </div>
          </div>
        

          <div class="r">
          <p class="r1">Температура W5100</p>
          <div class="r2" >
          <div class="r3" id="content-1"></div> 
          <div class="r3"> C<sup>o</sup></div>
          </div>
          </div>
          
          <div class="r">
           <div class="rl"> 
          <p class="r1">Выключатель</p>
          <div class="r2" style="font-size:25px">
          <br>
     <!--
          <form  id="led" action="" method="post">

          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
     
          <br>
     -->    

<?php
//---- По нажатию кнопки ON
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
//---- По нажатию кнопки OFF
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 

//---- Выполнить по нажатию кнопки ON
        function button1() { 
            echo "Нажата кнопка Button1"; 

 {   $S4 =  "1";
                $myFile4 = "txt/out-1.txt";
	$fh4 = fopen($myFile4, 'w') or die("can't open file");
	fwrite($fh4, $S4);
	fclose($fh4);
  }

        } //function button1()

//---- Выполнить по нажатию кнопки OFF
        function button2() { 
            echo "Нажата кнопка Button2"; 

 {   $S4 =  "0";
                $myFile4 = "txt/out-1.txt";
	$fh4 = fopen($myFile4, 'w') or die("can't open file");
	fwrite($fh4, $S4);
	fclose($fh4);
  }
        } //function button2()

    ?> 

<!--   <form  id="led" action="" method="post">  -->

   <form method="post">  

 <!--
     Внимание! submitButton- название формы в CSS (например для класса КНОПКИ[Button])!
  <input class="submitButton" input type="submit" value="Button1" class="button" /> 
  -->

        <input type="submit" name="button1"
                class="submitButton" value="Button1" /> 
                
        <input type="submit" name="button2"
                class="submitButton" value="Button2" /> 


          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-3"></div> 
          </div>
          </div>
          
          </div>
        
        
   </body>
</html>