<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->

			<footer role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h5>About Zone Portal</h5>
							<p>
							Zone learning transforms your educational experience at Ryerson. It takes you beyond the classroom and lets you meet and work with students from across the university who are creative, ambitious, and driven by passion. By becoming part of Ryerson’s zone learning network, you’ll get the right kind of support to create, develop, and launch your idea.
							</p>

							<ul>
								<li><a href="http://www.ryerson.ca/privacy/">Privacy</a></li>
								<li><a href="http://www.ryerson.ca/accessibility/">Accessiblity</a></li>
								<li><a href="http://www.ryerson.ca/ryerson.ca/terms/">Terms</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h5>Zones &amp; Affiliates</h5>
							<ul>
								 <?php wp_nav_menu(); ?>
							</ul>
						</div>
						<div class="col-md-4">
							<h5>Contact Us</h5>
							<p>416.979.5000 ext. 3432<br/>
							<a href="mailto:zonelearning@ryerson.ca">zonelearning@ryerson.ca</a>
							<br/>
							325 Church Street - ARC100<br/>
							Toronto, Ontario<br/>
							M5B 2K3
							</p><br/>
							<h5>Connect</h5>
							<a class="twitter-follow-button"
  href="https://twitter.com/RUZoneLearning">
Follow @RUZoneLearning</a>
						</div>
					</div>
					<div class="row">
						<div class="copyright">
						&copy; Ryerson University | 350 Victoria Street, Toronto, Ontario, Canada, M5B 2K3
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		

		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>