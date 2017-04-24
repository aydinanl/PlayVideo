<!-- main -->
<main>
	<div id="main">
		<!-- İçerik üst -->
		<div class="icerik_ust">
			<div class="container">
				<!-- icerik üst sol -->
				<div class="ustleft">	
					<div class="yazi_sayfa">
						<h2>HAKKIMIZDA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet quam non nunc viverra feugiat. Nulla efficitur dui quam, ac dictum risus aliquet vitae. Maecenas id malesuada urna. Ut tempus orci turpis, mollis dignissim nisi convallis nec. Integer mollis placerat velit, vitae tempor mauris varius scelerisque. Fusce aliquam arcu feugiat, eleifend purus in, dictum mi. Integer laoreet mauris in quam accumsan, nec placerat nulla tempus. Quisque congue urna ac cursus dictum.</p></br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet quam non nunc viverra feugiat. Nulla efficitur dui quam, ac dictum risus aliquet vitae. Maecenas id malesuada urna. Ut tempus orci turpis, mollis dignissim nisi convallis nec. Integer mollis placerat velit, vitae tempor mauris varius scelerisque. Fusce aliquam arcu feugiat, eleifend purus in, dictum mi. Integer laoreet mauris in quam accumsan, nec placerat nulla tempus. Quisque congue urna ac cursus dictum.</p>
					</div>
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
                            <li><a href="<?php echo URL ."Video/" . $get3PopulerVideo->movie_id ."/". $get3PopulerVideo->sef_link ?>">
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
                        <?php
                        $countComment = 1;
                        while($comment = $latestComments->fetchObject()){

                            ?>
                            <li><a href="<?php echo URL ."Video/" . $comment->movie_id ."/". $comment->sef_link ?>">
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
                <img src="<?php echo URL ?>/assets/img/72890.jpg" alt="sliderresim" />
            </div>
		</div>
	</div>
</main>
<!-- #main -->