<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="dist/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var id = 0;
            
            // Add button functionality
            $("table.dynatable button.add").click(function() {
                id++;
                var master = $(this).parents("table.dynatable");
                
                // Get a new row based on the prototype row
                var prot = master.find(".prototype").clone();
                prot.attr("class", id + " item")
                prot.find(".id").attr("value", id);
                
                master.find("tbody").append(prot);
                prot.append('<td><button class="remove">Remove</button></td>');
            });
            
            // Remove button functionality
            $("table.dynatable").on("click","button.remove", function() {
                $(this).parents("tr").remove();
                recalcId();
                id--;
            });
        });

function recalcId(){
    $.each($("table tr.item"),function (i,el){
        $(this).find("td:first input").val(i + 1); // Simply couse the first "prototype" is not counted in the list
    })
}

    </script>
</head>
<body>
        <div class="container">
        <div class="row" style="text-align: center;">
            <h1>Table</h1>
        </div>
        <div class="row">
        <div class="col-lg-push-2 col-md-7">
            <table class="dynatable table table-striped table-hover  table-bordered ">
            <thead>
              
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Col 3</th>
                    <th>Col 4</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="prototype">
                    <td><input type="text" name="id[]" value="0" class="id" /></td>
                    <td><input type="text" name="name[]" value="" /></td>
                    <td><input type="text" name="col4[]" value="" /></td>
                    <td><input type="text" name="col3[]" value="" /></td>
                     
                </tr>
               <tr>
            
            <th><button class="add">Add</button></th>
            
            </tr>

            </tbody>

            </table>
        </div>
        </div>
        <div class="row">
            <button class="btn btn-primary col-lg-offset-2">ADD</button>
            <div class="col-lg-push-6 col-lg-3">
            <table class="table table-responsive table-bordered ">
                <tr>
                    <td>Total</td>
                    <td class="col-lg-7"></td>
                </tr>
            </table>
        </div>
        </div>
    </div>


        <table class="dynatable">
        </table>

    </body>
</html>