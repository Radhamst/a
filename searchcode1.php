<?php
include('connection.php');
?>
<style type="text/css">
            #container{
               width:800px;
               margin:0 auto;
            }
 								
            #search{
               width:700px;																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
               padding:10px;
            }
 
            #button{
               display: block;
               width: 100px;
               height:30px;
               border:solid #366FEB 1px;
               background: #91B2FA;
            }
 
            ul{
                margin-left:-40px;
            }
 
            ul li{
                list-style-type: none;
                border-bottom: dotted 1px black; 																																                                          height: 50px;
            }
 
            li:hover{
                background: #A592E8;
            }
 																																																																																		
            a{
                text-decoration: none;
              font-size: 18px;
            }
        </style>

<?php

 
 $title=$_POST["title"];

 $result=mysql_query("SELECT * FROM a where name like '%$title%'");

 $found=mysql_num_rows($result);
 
 if($found>0){
 	while($row=mysql_fetch_array($result)){
 	echo "<li>$row[name]</br>";
    }   
 }else{
 	echo "<li>No Result Found<li>";
 }
 // ajax search
?>
