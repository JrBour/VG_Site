<?php
/*
Template Name: presentation
 */
?>
<?php get_header(); ?>

    <div class="col-lg-12 text-title">
        <h1 class="present">PRESENTATION</h1>
    </div>

<div class="col-lg-12 section2">
    <div class="row">
        <div class="col-md-6 img_pres">
        </div>
        <div class="col-md-6 par-sec2">
            <h2 class="about">A propos</h2>
            <p class="petit-p">
                Bonjour à toutes et à tous,<br>
                <br>
                je m’appelle Vincent Gardye, je suis  Coach sportif Professionnel. Passé par la  Marine Nationale chez  les Fusiliers Marins et ayant passé un diplôme de  Coach sportif (BPJEPS AGFF mention musculation) ; aujourd’hui je souhaite mettre à profit mon goût du sport ainsi que de mes qualités acquis durant mes années de service  dans la Marine Nationale auprès de vous.
                <br>
                Ainsi quel que soit votre âge, vos motivations ou bien vos objectifs ; si vous voulez  retrouver votre forme d’antan (prise de masse, perdre du poids), ou simplement retrouver une hygiène de vie ;
                Je serai ravi de pouvoir vous épauler  dans ces moments-clés.<br>
                Grâce à mon expérience : l’assurance d’une qualité, d’un climat de confiance entre vous et moi seront l’atout pour progresser et satisfaire vos attentes.
            </p>
        </div>
    </div>

</div>
<div class="col-lg-12 section3">
    <p class="last">
        En tant que coach sportif spécialisé dans spécialisé CrossFit - TRX Suspension Training, je vous propose donc de découvrir ainsi les différents modules sur lesquels je l’espère, nous serons amenés à travailler ensemble.
    </p>
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
