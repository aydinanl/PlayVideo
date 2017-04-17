
<!-- main -->
<main>
	<div id="main">
		<div id="slider">
			<div class="container">
				<ul class="slider">
                    <?php
                    $count = 0;
                    while($popularVideos = $get6PopulerVideos->fetchObject()){
                        if($count == 0 or $count == 1 or $count==4 or $count == 5){
                        ?>
                        <li class="rbuyuk">
                            <a href="Video/<?php echo $popularVideos->movie_id ."/". $popularVideos->sef_url ?>">
                                <img src="<?php echo"https://i.ytimg.com/vi/".$popularVideos->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                <div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
                                <div class="play"><i class="fa fa-play"></i></div>
                                <div class="sliderbaslik"><h5><?php echo $popularVideos->movie_name ?></h5></div>
                            </a>
                        </li>
                    <?
                        }else{
                            ?>

                            <li class="rkucuk">
                                <a href="Video/<?php echo $popularVideos->movie_id ."/". $popularVideos->sef_url ?>">
                                    <img src="<?php echo"https://i.ytimg.com/vi/".$popularVideos->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                    <div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
                                    <div class="play"><i class="fa fa-play"></i></div>
                                    <div class="sliderbaslik"><h5><?php echo $popularVideos->movie_name ?></h5></div>
                                </a>
                            </li>
                    <?php
                        }
                        $count++;
                    }
                    ?>

				</ul>
			</div>
		</div>
		<!-- slider bitiş -->
		<div class="slideraltreklam">
			<div class="container">
				<img src="<?php echo URL; ?>/assets/img/72890.jpg" alt="sliderresim" />
			</div>	
		</div>
		<!-- İçerik üst -->
		<div class="icerik_ust">
			<div class="container">
				<!-- icerik üst sol -->
				<div class="ustleft">
					<div class="kolonbaslik"><h4>SON <text>VİDEOLAR</text></h4></div>
					<div class="sonicerik">
                        <?php
                        $countSonIcerik = 0;
                        while($latestVideo = $latest4Videos->fetchObject()){
                            if($countSonIcerik == 0 or $countSonIcerik == 3){
                                ?>
                                <div class="rbuyuk">
                                    <a href="#">
                                        <img src="<?php echo"https://i.ytimg.com/vi/".$latestVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                        <div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
                                        <div class="play"><i class="fa fa-play"></i></div>
                                        <div class="sliderbaslik"><h2>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h2></div>
                                    </a>
                                </div>
                        <?php
                            }else{
                                ?>
                                <div class="rkucuk">
                                    <a href="#">
                                        <img src="<?php echo"https://i.ytimg.com/vi/".$latestVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                        <div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
                                        <div class="play"><i class="fa fa-play"></i></div>
                                        <div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
                                    </a>
                                </div>
                                <?php
                            }
                            $countSonIcerik++;
                        }
                        ?>
					</div>
					
					<div class="kolonbaslik"><h4>AKSİYON</h4> <div class="tumunugor"><a href="#"><text>TÜMÜNÜ GÖR</text></a></div></div>
					<ul class="konuicerik">
						<li>
							<a href="#">
							<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h3>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h3></div>
							</a>	
						</li>
						<li>
							<a href="#">
							<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
							</a>	
						</li>
						<li>
							<a href="#">
							<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
							</a>	
						</li>
						<li>
							<a href="#">
							<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
							<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
							<div class="play"><i class="fa fa-play"></i></div>
							<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
							</a>	
						</li>
					</ul>
				</div>	
				<!-- icerik üst sol bitiş -->
				
				<!-- icerik üst sağ -->
				<div class="ustright">
					<div class="kolonbaslik"><h4>POPÜLER <text>VİDEOLAR</text></h4></div>
					<ul class="sagpopuler">
                        <?php
                        while($get3PopulerVideo = $get3PopulerVideos->fetchObject()){
                            ?>
                            <li>
                                <a href="#">
                                    <img src="<?php echo"https://i.ytimg.com/vi/".$get3PopulerVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1"  style="width: 360px;height: 210px"/>
                                    <div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
                                    <div class="play"><i class="fa fa-play"></i></div>
                                    <div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
                                </a>
                            </li>
                        <?php
                        }
                        ?>


					</ul>
					
					<div class="sidebarreklam">
					<img src="<?php echo URL; ?>/assets/img/336280.jpg" alt="sidebar reklam" />
					</div>
				</div>
				<!-- icerik üst sağ bitiş -->
				
			</div>
		</div>
		<!-- içerik üst bitiş -->
		
		<!-- icerik orta -->
		<div class="icerik_orta">
			<div class="container">
				<ul class="orta_menu">
					<li><a class="aktif" href="#">Aile</a></li>
					<li><a href="#">Aksiyon</a></li>
					<li><a href="#">Bilim Kurgu</a></li>
					<li><a href="#">Dram</a></li>
					<li><a href="#">Gerilim</a></li>
					<li><a href="#">Komedi</a></li>
					<li><a href="#">Korku</a></li>
					<li><a href="#">Macera</a></li>
					<li><a href="#">Yerli</a></li>
				</ul>
				
				<div class="orta_icerik_slider">
					<div class="orta_slider">
						<ul>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h4>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h4></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
						</ul>
						<div class="orta_buton">
							<div class="left_orta_buton"><i class="fa fa-angle-left"></i></div>
							<div class="right_orta_buton"><i class="fa fa-angle-right"></i></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- icerik orta bitiş-->
		
		<div class="icerik_alt">
			<div class="container">
				<div class="icerik_alt_sol">
					<div class="kolonbaslik"><h4>KOMEDİ</h4> <div class="tumunugor"><a href="#"><text>TÜMÜNÜ GÖR</text></a></div></div>

				<div class="alt_icerik_slider">
					<div class="alt_slider">
						<ul>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
							<li>
								<a href="#">
								<img src="<?php echo URL; ?>/assets/img/resim1.jpg" alt="m1" />
								<div class="videobilgi"><label><i class="fa fa-eye"></i> 23,567</label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> Aksiyon</label></div>
								<div class="play"><i class="fa fa-play"></i></div>
								<div class="sliderbaslik"><h5>Mac Demarco Vs. Animal Crossing: Who Performed In A Rowboat Better?</h5></div>
								</a>								
							</li>
						</ul>
						<div class="alt_buton">
							<div class="left_alt_buton"><i class="fa fa-angle-left"></i></div>
							<div class="right_alt_buton"><i class="fa fa-angle-right"></i></div>
						</div>	
					</div>
				</div>
				
				</div>
				
				<div class="icerik_alt_sag">
					<div class="kolonbaslik"><h4>SON <text>YORUMLAR</text></h4></div>
					<ul class="son_yorum">
                        <?php
                        $countComment = 1;
                            while($comment = $latestComments->fetchObject()){

                                ?>
                        <li><a href="#">
                                <img src="<?php echo URL; ?>/assets/img/avatar.jpg" alt="avatar" />
                                <h1><?php echo $comment->user_name ?></h1>
                                <p><?php echo $comment->comment ?></p>
                            </a>
                        </li>
                        <?php
                                if($countComment == 3){
                                    break;
                                }
                                $countComment++;
                            }
                        ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- içerik alt bitiş -->
		<div class="footer_reklam">
			<div class="container">
				<img src="<?php echo URL; ?>/assets/img/72890.jpg" alt="sliderresim" />
			</div>
		</div>
	</div>
</main>
<!-- #main -->
