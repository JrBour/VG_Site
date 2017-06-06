

<!-- /footer -->

<footer class="container-fluid">
<div class="row flexFoot">
	<div class="col-lg-4 col-md-4 col-xs-12 col-offset-1 links">
		<ul>

            <li><?php wp_nav_menu(array('theme_location' => 'footer')); ?></li>
        </ul>

	</div>
	<div class="col-lg-2 col-md-2 col-xs-12 logo_footer col-lg-offset-1">

	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 contact_footer">
	</div>
</div>
<div class="flexRS">
        <a class="facebookBtn smGlobalBtn" href="#" ></a>
		<a class="twitterBtn smGlobalBtn" href="#" ></a>
		<a class="instaBtn smGlobalBtn" href="#" ></a>
</div>
		<p class="copyright">
			&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
		</p>

</footer>

<!-- /wrapper -->


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

<script src="https://api.motion.ai/sdk/webchat.js"></script>
<script>
    motionAI_Init('50075?color=62a8ea&sendBtn=SEND&inputBox=Type%20something...&token=c7d51ff115547868be041a8295ee2ec1',true,400,470,'undefined');
    /* You may also invoke motionAI_Open() to manually open the modal. */
</script>


</html>
