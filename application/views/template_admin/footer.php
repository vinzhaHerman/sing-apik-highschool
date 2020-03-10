<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script src="<?php echo base_url();?>assets/Table_Fixed_Header/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/Table_Fixed_Header/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url();?>assets/Table_Fixed_Header/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/Table_Fixed_Header/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<script src="<?php echo base_url();?>assets/Table_Fixed_Header/js/main.js"></script>
</body>
</html>