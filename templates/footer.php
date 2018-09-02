	</div>	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script type="text/javascript">
		<?php if (isset($_SESSION['msg'])): ?>
				Materialize.toast('<?=$_SESSION['msg']?>', 2000)
		<?php
				$_SESSION['msg'] = '';
			endif;
		?>
	</script>
</body>
</html>


