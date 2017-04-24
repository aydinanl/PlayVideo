<?php
    while($video = $videos_information->fetchObject()){
        $video_name = $video->movie_name;
        $video_description = $video->movie_description;
        $movie_url = $video->movie_url;
        $movie_view = $video->movie_view;
        $category = $video->category_id;
    }
?>
<!-- main -->
<main>
	<div id="main">
		<div id="slider">
			<div class="container">
				<div class="videobaslik">
					<h1><?php echo $video_name ?> </h1>
				</div>
				<div class="playvideo">
					<div class="video">
						<iframe src="https://www.youtube.com/embed/<?php echo $movie_url ?>" frameborder="0" allowfullscreen></iframe>
						<div class="reklamvideon">
							<div class="reklamkapat"><i class="fa fa-times"></i></div>
							<div class="reklamkod">
								<img src="<?php echo URL ?>/assets/img/336280.jpg" alt="reklam" />
							</div>
							<div class="reklamkapat2">(Reklamı Kapat)</div>
						</div>
					</div>
					<ul class="sosyalbuton">
						<li><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div></li>
						<li style="width:60px; overflow:hidden;">  <script src="https://apis.google.com/js/platform.js" async defer></script>
						<g:plusone size="medium"></g:plusone></li>
						<li> <a href="https://twitter.com/share" class="twitter-share-button" data-via="saygilisoftware">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> </li>
					</ul>
					<div class="izlenme"><?php echo $movie_view ?></div>
					<div class="video_aciklama">
						<p><?php echo $video_description ?></p>
					</div>
				</div>
				<div class="videoyanreklam">
					<img src="<?php echo URL ?>/assets/img/336280.jpg" alt="reklam" />
				</div>
			</div><div class="clear"></div>
		</div>
		<!-- slider bitiş -->
		<div class="slideraltreklam">
			<div class="container">
				<img src="<?php echo URL ?>/assets/img/72890.jpg" alt="sliderresim" />
			</div>	
		</div>
		<!-- İçerik üst -->
		<div class="icerik_ust">
			<div class="container">
				<!-- icerik üst sol -->
				<div class="ustleft">
				
					<div class="icerik_alt_sol">
					<div class="kolonbaslik"><h4>Benzer <text>VİDEOLAR</text></h4></div>
					<div class="alt_icerik_slider">
					<div class="alt_slider">
						<ul>
                            <?php

                            while($video = $similarVideos->fetchObject()) {

                            ?>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo"https://i.ytimg.com/vi/".$video->movie_url."/hqdefault.jpg?" ?>" alt="m1"/>
                                        <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $video->movie_view; ?></label><label><i
                                                        class="fa fa-comment"></i> 451</label><label><i
                                                        class="fa fa-bars"></i> <?php echo $video->category_name; ?></label></div>
                                        <div class="play"><i class="fa fa-play"></i></div>
                                        <div class="sliderbaslik"><h5><?php echo $video->movie_name ?></h5></div>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
						</ul>
						<div class="alt_buton">
							<div class="left_alt_buton"><i class="fa fa-angle-left"></i></div>
							<div class="right_alt_buton"><i class="fa fa-angle-right"></i></div>
						</div>	
					</div>
				</div>
				<!-- yazar -->
					<div class="yazar">
						<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar" />
						<h5><a href="#">Play Video</a></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum efficitur leo, egestas sagittis mi accumsan vitae. Cras volutpat urna quam, nec scelerisque nulla laoreet et. </p>
					</div>
				<!-- yorumlar -->
					<div class="kolonbaslik"><h4><text>YORUMLAR</text></h4></div>
					<div class="comment-area">
						<ul class="comment-list">
							<li>
								<div class="comment-author">
									<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar yorum" />
									<cite class="fn">PlayVideo</cite>
								</div>
								<div class="comment-meta">
									<a href="#">5 Ekim 2015 , 23:59</a>
									<a href="#">(Düzenle)</a>
								</div>
								<p>Burası çok değerlenecek hacıııııııı</p>
								<div class="reply"><a href="#">Cevapla</a></div>
								<ul>
									<li>
										<div class="comment-author">
											<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar yorum" />
											<cite class="fn">PlayVideo</cite>
										</div>
										<div class="comment-meta">
											<a href="#">5 Ekim 2015 , 23:59</a>
											<a href="#">(Düzenle)</a>
										</div>
										<p>Burası çok değerlenecek hacıııııııı</p>
										
									</li>	
									<li>
										<div class="comment-author">
											<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar yorum" />
											<cite class="fn">PlayVideo</cite>
										</div>
										<div class="comment-meta">
											<a href="#">5 Ekim 2015 , 23:59</a>
											<a href="#">(Düzenle)</a>
										</div>
										<p>Burası çok değerlenecek hacıııııııı</p>
									</li>								
								</ul>
							</li>
							<li>
								<div class="comment-author">
									<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar yorum" />
									<cite class="fn">PlayVideo</cite>
								</div>
								<div class="comment-meta">
									<a href="#">5 Ekim 2015 , 23:59</a>
									<a href="#">(Düzenle)</a>
								</div>
								<p>Burası çok değerlenecek hacıııııııı</p>
								<div class="reply"><a href="#">Cevapla</a></div>
							</li>
						
						</ul>
					</div>
				<!-- yorum yaz -->
					<div class="kolonbaslik"><h4>BİR YORUM <text>YAZ</text></h4></div>		
					<div id="yorumyaz">
						<form action="#" method="post" >
							<input type="text" name="adsoyad" placeholder="isim" />
							<input type="text" name="eposta" placeholder="e-posta" />
							<input type="text" name="web" placeholder="web siteniz" />
							<textarea name="mesaj" placeholder="yorumunuz"></textarea>
							<button type="submit">GÖNDER</button>
						</form>
					</div>
				</div>
									
				</div>	
				<!-- icerik üst sol bitiş -->
				
				<!-- icerik üst sağ -->
				<div class="ustright">
					<div class="kolonbaslik"><h4>POPÜLER <text>VİDEOLAR</text></h4></div>
					<ul class="sagpopuler">
						<li>
							<a href="#">
							<img src="<?php echo URL ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
							</a>						
						</li>
						<li>
							<a href="#">
							<img src="<?php echo URL ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
							</a>						
						</li>
						<li>
							<a href="#">
							<img src="<?php echo URL ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
							</a>						
						</li>
					
					</ul>
					
					<div class="sidebarreklam">
					<img src="<?php echo URL ?>/assets/img/336280.jpg" alt="sidebar reklam" />
					</div>
				</div>
				<!-- icerik üst sağ bitiş -->
				
			</div>
		</div>
		<!-- içerik üst bitiş -->
		

			
		
		<div class="icerik_alt">
			<div class="container">
				
				<div class="icerik_alt_sag">
					<div class="kolonbaslik"><h4>SON <text>YORUMLAR</text></h4></div>
					<ul class="son_yorum">
						<li><a href="#">
						<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar" />
						<h1>Erkan</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ...</p>
						</a>
						</li>
						<li><a href="#">
						<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar" />
						<h1>Erkan</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ...</p>
						</a>
						</li>
						<li><a href="#">
						<img src="<?php echo URL ?>/assets/img/avatar.jpg" alt="avatar" />
						<h1>Erkan</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ...</p>
						</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- içerik alt bitiş -->
		<div class="footer_reklam">
			<div class="container">
				<img src="<?php echo URL ?>/assets/img/72890.jpg" alt="sliderresim" />
			</div>
		</div>
	</div>
</main>
<!-- #main -->