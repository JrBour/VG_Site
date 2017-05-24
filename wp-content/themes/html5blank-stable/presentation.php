<?php
/*
Template Name: presentation
 */
 ?>
<?php get_header(); ?>
<div class ="title-section">
    
<div class="text-title">
    <h1 ="prez-title">PRESENTATION</h1>
</div>
<img src="<?php echo get_bloginfo('template_url') ?>/img/383.jpg"/>


</div>
<div class="section1">
    <h2 class="h2-prez">Lorem Ipsum</h2>
    <p class="paragraphe-prez">Haec et huius modi quaedam innumerabilia ultrix
    facinorum impiorum bonorumque praemiatrix aliquotiens operatur Adrastia atque
    utinam semper quam vocabulo duplici etiam Nemesim appellamus: ius quoddam sublime
    numinis efficacis, humanarum mentium opinione lunari circulo superpositum,
    vel ut definiunt alii, substantialis tutela generali potentia partilibus
    praesidens fatis, quam theologi veteres fingentes Iustitiae filiam ex abdita
    quadam aeternitate tradunt omnia despectare terrena.</p>
    
</div>
<div class="section2">
    <div class="row">
           <div class="col-md-6">
               <img src="<?php echo get_bloginfo('template_url') ?>/img/girl-sport.jpg"/>
           </div>
           <div class="col-md-6">
               <h1 class="about">A propos</h1>
               <p class="petit-p">Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, 
               ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam 
               altiora meditantis iam Galli secreta susceperint scripta, qui conpertis Antiochiae gestis
               per minorem Armeniam lapsus 
               Constantinopolim petit exindeque per protectores retractus artissime tenebatur.</p>
           </div>
    </div>
    
</div>
<div class="section3">
     <h2 class="h2-prez">Lorem Ipsum</h2>
     
    <p class="last">Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni,
    resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis,
    et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.</br>

Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiores extollere. 
Sunt enim quidam qui molestas amicitias faciunt, cum ipsi se contemni putant; quod non fere contingit nisi iis qui etiam contemnendos se arbitrantur;
qui hac opinione non modo verbis sed etiam opere levandi sunt.</p>
</div>
<div class="comments_face">
  <?php echo do_shortcode('[fbcomments url="http://peadig.com/wordpress-plugins/facebook-comments/" width="375" count="off" num="3" countmsg="wonderful comments!"]'); ?>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
    </div>             


<?php get_footer(); ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1685881555047059',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
