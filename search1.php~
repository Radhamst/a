<?php
include('connection.php');
?>
<body>
        <div id="container">
             <input type="text" id="search" placeholder="Search Tutorials Here... Ex: Java, Php, Jquery..."/>
             <input type="button" id="button" value="Search" />
             <ul id="result"></ul>
        </div>
  </body>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                  
                 function search(){
 
                      var title=$("#search").val();
 
                      if(title!=""){
                        //$("#result").html("<img alt="ajax search" src='ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"searchcode1.php",
                            data:"title="+title,
                            success:function(data){
                                $("#result").html(data);
                                $("#search").val("");
                             }
                          });
                      }
       }
 
                  $("#button").click(function(){
                     search();
                  });
 
                  $('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
            });
        </script>
