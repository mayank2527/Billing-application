$(function(){

			$('#but').click(function(){
                  var sno=$('#pTable tr').length;
 			
				$('#tab').append("<tr><td class='sNo'>"+sno+"</td><td class='listout'><input type='text' class='form-control' name='pname'><div class='auto' style='display: none;'><ul class='list-group list-unstyled'></ul></div></td><td><input type='text' class='form-control' name='quantity'></td><td><input disabled='true' type='text' class='form-control' name='cost'></td><td><input disabled='true' type='text' class='form-control' name='tax'></td><td class='Ocost'><input type='text' class='form-control' name='Ocost'></td><td><button class='cancel  btn btn-warning'>X</button></td></tr>");
					$('.cancel').click(function(){
				   
					$(this).parent().parent().remove();
					recal();
					$('#total').text(ctotal());
				
					});

			$("input[name='pname']").keyup(function(){
				var o=$(this);
				$("li.lis").remove();
				var x=$(this).val();
				if(x!="")
				{
					$.ajax({
						url:"findauto.php",
						method:"POST",
						data:{data:x},
						datatype:"text",
						success:function(e){
							console.log(e);
							$(".lis").remove();

						$(".auto").find("ul").append(e);
						}

					});
				}

				$(this).siblings().show();

				$(document).on("click","li",function(){
					var v=$(this).text();
					console.log(v);

					$(this).parent().parent().siblings().val(v);

	//					o.val(v);
					$('.auto').hide();
				
				});
			})

	
			$("input[name='quantity']").on("focus",function(){
				$(".auto").hide();
			})

		$("input[name='pname']").on('blur',function(){

				p=$(this);
				var id=$(this).val();
						
				
			$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{id:id},
					dataType:"JSON",
					success:function(data){
						var x=p.parent().siblings();
						console.log(x);		
						var y=x[2].children;
						y.cost.value=data.cost;
						//x.find(".tax").find("input[name='tax']").val(data.tax);		
						var z=x[3].children;
						z.tax.value=data.tax;
						//$(this).parent().siblings().find("td input[name='cost']").val(data.cost);
						//$(this).parent().siblings().find("td input[name='tax']").val(data.tax);
					}
				});		

			})

	$("input[name='quantity']").keyup(function(){

			cal(this);
			$('#total').text(ctotal());

		});

			});

			function recal(){
           var i=0;
            $('#pTable tr').each(function() {
                $(this).find(".sNo").html(i);
                i++;
             });
			}


	$("input[name='pname']").keyup(function(){

				var o=$(this);
				$("li.lis").remove();
				var x=$(this).val();
				if(x!="")
				{
					$.ajax({
						url:"findauto.php",
						method:"POST",
						data:{data:x},
						datatype:"text",
						success:function(e){
							console.log(e);
							$(".lis").remove();
						$(".auto").find("ul").append(e);
						}

					});
				}
				$(this).siblings().show();

				$(document).on("click","li",function(){
					var v=$(this).text();
					console.log(v);
					
					$(this).parent().parent().siblings().val(v);



					$('.auto').hide();

				});
			})

			$("input[name='quantity']").on("focus",function(){
				$(".auto").hide();
			})

		$("input[name='pname']").on('blur',function(){

				p=$(this);
				var id=$(this).val();
						
				$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{id:id},
					dataType:"JSON",
					success:function(data){
						var x=p.parent().siblings();
						var y=x[2].children;
						y.cost.value=data.cost;
						var z=x[3].children;
						z.tax.value=data.tax;
					}
				});		
		})


		$("input[name='quantity']").keyup(function(){

			cal(this);
			$('#total').text(ctotal());

		});

			function cal(th){
				var v=$(th).val();
				v=Number(v);
				var x=$(th).parent().siblings();

				var y=x[2].children;
				var c=Number(y.cost.value);
							
				var z=x[3].children;
				var t=Number(z.tax.value);

				var o=x[4].children;
				var value=v*(c*t/100+c);
				o.Ocost.value=value;
			}


		function ctotal(){
				var tot=0;
			$("input[name='Ocost']").each(function(){

				tot+=Number(this.value);
			})
			return tot;
		}

		$('#tbut').click(function(){
			
			$('#total').text(ctotal());

		})

	})
