
<div id="tabs" class="tabs_rose">
		<ul>
			<li><a href="#tabs-1" class="tabulous_a" title="">Gazette!</a></li>
			<li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
		</ul>

		<div id="tabs_container">
			

			<div id="tabs-1" class="tabs_rose">
				<section class="g_article">
                	<img src="../site_web/css/media/img/gazette/Zneedsyou.png" />
                    
                    <aside class="g_aside">
                        <h1 class="g_titre">Appel aux dons !</h1><br />
                        <span class="g_date">Publié le 27/06/2015</span><br />
                        <span class="g_auteur">Par PuckSama</span>
                    
                    <article class="g_paragraphe">
                    	<p>Chers internautes, comme vous l’avez sans doute remarqué la cafétaria est toujours en construction. Nous avons besoin de fonds pour la rénover.</p>
                        <p>Pour cela nous avons créé un appel aux dons sur Mymajorcompany (vous trouverez le lien ci-dessous). Pour la modique somme de 4.000.000 de dollars nous pourrons entièrement rénover la cafetaria. Pour chaque don supérieur à 100.000 dollar nous vous envoyons un t-shirt dédicacé par l’équipe.</p>
						<p>Lien pour les dons : <span class="g_lien">www.onabesoindetune.com</span></p>
						<p>Cordialement.</p>
                    </article>
                    <footer class="g_social">
                    	<img src="../site_web/css/media/img/social/Facebook_Logo_Button_64.png" />
                        <img src="../site_web/css/media/img/social/Google_Plus_Logo_Button_64.png" />
                        <img src="../site_web/css/media/img/social/Tumblr_Logo_Button_64.png" />
                        <img src="../site_web/css/media/img/social/Twitter_Logo_Button_64.png" />
                    </footer>
                    </aside>    
                </section>
                
                <section class="g_article">
                	<img src="../site_web/css/media/img/gazette/mainZ.jpg" />
                    
                    <aside class="g_aside">
                        <h1 class="g_titre">Les portes des enfers sont ouvertes !</h1><br />
                        <span class="g_date">Publié le 26/06/2015</span><br />
                        <span class="g_auteur">Par Hurlemort</span>
                    <article class="g_paragraphe">
                    	<p>Nous avons le plaisir de vous informer l’ouverture de notre site : Zombie Academy.</p>
                        <p>Toute l’équipe du site vous souhaite la bienvenue ! Il se peut que quelques bugs demeurent n’hésitez pas à nous les rapporter, nous les corrigerons au plus vite.</p>
						<p>Amusez-vous bien !</p>
						<p>Cordialement.</p>
                    </article>
                    <footer class="g_social">
                    	<img src="../site_web/css/media/img/social/Facebook_Logo_Button_64.png" />
                        <img src="../site_web/css/media/img/social/Google_Plus_Logo_Button_64.png" />
                        <img src="../site_web/css/media/img/social/Tumblr_Logo_Button_64.png" />
                        <img src="../site_web/css/media/img/social/Twitter_Logo_Button_64.png" />
                    </footer>  
                    </aside>   
                </section>
			</div>

		</div><!--End tabs container-->
		
	</div><!--End tabs-->
<script>
$(document).ready(function() {
$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script>
