<?php
echo "test mail";
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" >
$(function() {
$(".submit").click(function() {
var name = $("#name").val();
var username = $("#username").val();
//alert(username);
var dataString = 'name='+ name + '&username=' + username;

if(name=='' || username=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "join.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
return false;
});
});
</script>

<form method="post" name="form">
<ul><li>
<input id="name" name="name" type="text" />
</li><li>
<input id="username" name="username" type="text" />
</li>
<!--
<li>
<input id="password" name="password" type="password" />
</li><li>
<select id="gender" name="gender">
<option value="">Gender</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select>
</li>
<!-->
</ul>
<div >
<input type="submit" value="Submit" class="submit"/>
<span class="error" style="display:none"> Please Enter Valid Data</span>
<span class="success" style="display:none"> Registration Successfully</span>
</div>
</form>

//ajax Auto Search Code Started

<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>


<div class="content">
<input type="text" class="search" id="searchid" placeholder="Search for people" /><br /> 
<div id="result"></div>
</div>

