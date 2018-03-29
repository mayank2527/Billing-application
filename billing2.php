<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>jQuery add/remove rows in html table</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 
</head>
<body>
 
<script>
 
function arrangeSno()
 
    {
           var i=0;
            $('#pTable tr').each(function() {
                $(this).find(".sNo").html(i);
                i++;
             });
 
    }
 
$(document).ready(function(){
$('#addButId').click(function(){
                   var sno=$('#pTable tr').length;
                       trow=  "<tr><td class='sNo'>"+sno+"</td>"+
                           "<td><input name='pName' type='text'></td>"+
                           "<td><input name='age' type='text'></td>"+
                           "<td><select name='gender'><option value='M'>Male</option><option value='F'>Female</option></select></td>"+
                          "<td><button type='button' class='rButton'>Remove</button></td></tr>";
                      $('#pTable').append(trow);
                    });
                     });
 
$(document).on('click', 'button.rButton', function () {
       $(this).closest('tr').remove();
       arrangeSno();
     return false;
 });
 
/*$(".rButton").live('click', function(){
    $(this).closest('tr').remove();
    arrangeSno();
     return false;
});*/
 
 </script>
 
<h1>jQuery Add Remove Rows Dynamically in a Html Table Example</h1>
 
<form method="post" action="Process">
 
    <p>Enter Passenger Details. Press Add Passengers button to add more passengers.</p>
 
    <table id="pTable">
        <tbody>
        <tr>
            <td>S.No</td>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
            <td>Action</td>
        </tr>
 
    </tbody></table>
    <br/>
        <input id="addButId" type="button" value="Add Passengers">
 
    <br><input type="submit" value="Submit">
</form>
 
</body>
</html>