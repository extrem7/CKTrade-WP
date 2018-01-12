<footer class="footer">
	<div class="container">
		<div class="row justify-content-between flex-sm-row align-items-sm-start flex-column align-items-center">
			<div class="left">
				<p><?php the_field( 'footer-trade', 'option' ) ?></p>
				<p class="location"><?php the_field( 'footer-location', 'option' ) ?></p>
				<p class="copyrights"><?php the_field( 'footer-development', 'option' ) ?></p>
			</div>
			<div class="right d-flex flex-column align-items-sm-end align-items-center">
                <a href="tel:<? echo preg_replace( '/[^0-9]/', '', get_field( 'phone', 'option' ) ); ?>"
                   class="phone"><?php the_field( 'phone', 'option' ) ?></b></a>
                <a href="mailto:<?php the_field( 'email-1', 'option' ) ?>"
                   class="mail"><?php the_field( 'email-1', 'option' ) ?></a>
                <a href="mailto:<?php the_field( 'email-1', 'option' ) ?>"
                   class="mail"><?php the_field( 'email-2', 'option' ) ?></a>
			</div>
		</div>
	</div>
</footer>
<div id="order-1" class="modal modal-vertical-center fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="modal-body">
					<?php echo do_shortcode('[contact-form-7 id="71" title="Форма-1"]')?>
			</div>
		</div>
	</div>
</div>
<div id="order-2" class="modal modal-vertical-center fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="modal-body">
					<?php echo do_shortcode('[contact-form-7 id="72" title="Форма-2"]')?>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php wp_footer() ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="<?php path() ?>ES6/main.js"></script>
</body>
</html>