<?php

require_once('../../config.php');
if(isset($_GET['ID']) && $_GET['ID'] > 0){
    $qry = $conn->query("SELECT * from `curriculum` where ID = '{$_GET['ID']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>
<div class="container-fluid">
	<form action="" id="department-form">
		<input type="hidden" name ="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="form-group">
			<label for="name" class="control-label">DEPARTMENT NAME</label>
			<input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" value="<?php echo isset($name) ? $name : ''; ?>"  required/>
		</div>
		
		
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#department-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			 var el = $('<div>')
                 el.addClass("alert alert-danger err-msg")
                 el.hide()
			if(_this[0].checkValidity() == false){
				_this[0].reportValidity();
				return false;
			}	
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_department",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
                        el.removeClass("alert alert-danger err-msg")
						location.reload()
					}else if(resp.status == 'failed' && !!resp.msg){
                            el.text(resp.msg)
                    }else{
						el.text("An error occured",'error');
						end_loader();
                        console.err(resp)
					}
                    _this.prepend(el)
                    el.show('slow')
                    $("html, body, .modal").scrollTop(0);
                    end_loader()
				}
			})
		})

	})
</script>