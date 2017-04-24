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
                            <a href="Video/<?php echo $popularVideos->movie_id ."/". $popularVideos->sef_link ?>">
                                <img src="<?php echo"https://i.ytimg.com/vi/".$popularVideos->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $popularVideos->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $popularVideos->category_name ?></label></div>
                                <div class="play"><i class="fa fa-play"></i></div>
                                <div class="sliderbaslik"><h5><?php echo $popularVideos->movie_name ?></h5></div>
                            </a>
                        </li>
                    <?
                        }else{
                            ?>

                            <li class="rkucuk">
                                <a href="Video/<?php echo $popularVideos->movie_id ."/". $popularVideos->sef_link ?>">
                                    <img src="<?php echo"https://i.ytimg.com/vi/".$popularVideos->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                    <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $popularVideos->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $popularVideos->category_name ?></label></div>
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
                                    <a href="Video/<?php echo $latestVideo->movie_id ."/". $latestVideo->sef_link ?>">
                                        <img src="<?php echo"https://i.ytimg.com/vi/".$latestVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                        <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $latestVideo->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $latestVideo->category_name ?></label></div>
                                        <div class="play"><i class="fa fa-play"></i></div>
                                        <div class="sliderbaslik"><h2><?php echo $latestVideo->movie_description ?></h2></div>
                                    </a>
                                </div>
                        <?php
                            }else{
                                ?>
                                <div class="rkucuk">
                                    <a href="#">
                                        <a href="Video/<?php echo $latestVideo->movie_id ."/". $latestVideo->sef_link ?>">
                                            <img src="<?php echo"https://i.ytimg.com/vi/".$latestVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1" />
                                            <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $latestVideo->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $latestVideo->category_name ?></label></div>
                                            <div class="play"><i class="fa fa-play"></i></div>
                                            <div class="sliderbaslik"><h2><?php echo $latestVideo->movie_description ?></h2></div>
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
                        <?php
                        while($aksiyonVideo = $aksiyon->fetchObject()){
                            ?>
                            <li>
                                <a href="Video/<?php echo $aksiyonVideo->movie_id ."/". $aksiyonVideo->sef_link ?>">
                                    <img src="<?php echo"https://i.ytimg.com/vi/".$aksiyonVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1" style="width: 360px;height: 210px" />
                                    <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $aksiyonVideo->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $aksiyonVideo->category_name ?></label></div>
                                    <div class="play"><i class="fa fa-play"></i></div>
                                    <div class="sliderbaslik"><h3><?php echo $aksiyonVideo->movie_description ?></h3></div>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
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
                                <a href="Video/<?php echo $get3PopulerVideo->movie_id ."/". $get3PopulerVideo->sef_link ?>">
                                    <img src="<?php echo"https://i.ytimg.com/vi/".$get3PopulerVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1"  style="width: 360px;height: 210px"/>
                                    <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $get3PopulerVideo->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $get3PopulerVideo->category_name ?></label></div>
                                    <div class="play"><i class="fa fa-play"></i></div>
                                    <div class="sliderbaslik"><h5><?php echo $get3PopulerVideo->movie_description ?></h5></div>
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
					<li><a class="aktif" href="#">Önerilen Videolar</a></li>
					<li><a href="#"> </a></li>
				</ul>
				
				<div class="orta_icerik_slider">
					<div class="orta_slider">
						<ul>
                            <?php
                            while($recommendVideo = $recommendVideos->fetchObject()){
                                ?>
                                <li>
                                    <a href="Video/<?php echo $recommendVideo->movie_id ."/". $recommendVideo->sef_link ?>">
                                        <img src="<?php echo"https://i.ytimg.com/vi/".$recommendVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1"  style="width: 360px;height: 210px"/>
                                        <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $recommendVideo->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $recommendVideo->category_name ?></label></div>
                                        <div class="play"><i class="fa fa-play"></i></div>
                                        <div class="sliderbaslik"><h5><?php echo $recommendVideo->movie_description ?></h5></div>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
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
                            <?php
                            while($komediVideo = $komedi->fetchObject()){
                                ?>
                                <li>
                                    <a href="Video/<?php echo $komediVideo->movie_id ."/". $komediVideo->sef_link ?>">
                                        <img src="<?php echo"https://i.ytimg.com/vi/".$komediVideo->movie_url."/hqdefault.jpg?" ?>" alt="m1"  style="width: 360px;height: 210px"/>
                                        <div class="videobilgi"><label><i class="fa fa-eye"></i> <?php echo $komediVideo->movie_view ?></label><label><i class="fa fa-comment"></i> 451</label><label><i class="fa fa-bars"></i> <?php echo $komediVideo->category_name ?></label></div>
                                        <div class="play"><i class="fa fa-play"></i></div>
                                        <div class="sliderbaslik"><h5><?php echo $komediVideo->movie_description ?></h5></div>
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
				
				</div>
				
				<div class="icerik_alt_sag">
					<div class="kolonbaslik"><h4>SON <text>YORUMLAR</text></h4></div>
					<ul class="son_yorum">
                        <?php
                        $countComment = 1;
                            while($comment = $latestComments->fetchObject()){

                                ?>
                        <li><a href="Video/<?php echo $comment->movie_id ."/". $comment->sef_link ?>">
                                <img src="<?php echo URL; ?>/assets/img/avatar.jpg" alt="avatar" />
                                <h1><?php echo $comment->name_surname ?></h1>
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
