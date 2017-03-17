			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<byu-footer>
					<byu-footer-column>
						<span slot="header">Contact</span>
						<p>
							Organization name
							<br> Address line 1
							<br> Provo, Utah 84602
							<br> 801-422-XXXX
						</p>
						<byu-footer-action-button>
							<a href="/action-path" slot="actiontext">DO THE THING</a>
						</byu-footer-action-button>
					</byu-footer-column>
					<byu-footer-column>
						<span slot="header">Column two</span>
						<a href="https://byu.edu">BYU Home</a>
						<br>
						<a href="https://byui.edu">BYU Idaho</a>
						<br>
						<a href="https://lds.org">LDS.org</a>
					</byu-footer-column>
					<byu-footer-column>
						<span slot="header">Column three</span>
						Content content
						<br>
						Content contented
						<br>
						Contented content
						<br>
						Contenting contents
					</byu-footer-column>
					<byu-footer-column>
						<span slot="header">Connect With Us</span>
						<a>Feedback</a>
						<br>
						<a>Help</a>
						<br>
						<a>Follow BYU Speeches</a>
						<br>
						<byu-social-media-links>
							<a slot="facebook" href="https://www.facebook.com"></a>
							<a slot="instagram" href="https://www.instagram.com"></a>
							<a slot="twitter" href="https://www.twitter.com"></a>
							<a slot="googleplus" href="https://plus.google.com"></a>
							<!--<a slot="linkedin" href="https://www.linkedin.com"></a>-->
							<div slot="youtube" href="https://www.youtube.com"></div>
						</byu-social-media-links>
						<br>
						<a>Subscribe</a>
					</byu-footer-column>
				</byu-footer>
				<!-- copyright deprecated, included in component -- <>
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
