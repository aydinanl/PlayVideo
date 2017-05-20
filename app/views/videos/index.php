<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?=URL . 'yonetim' . '/index'?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="<?=URL . 'yonetim' . '/categories'?>"><i class="glyphicon glyphicon-fire"></i> Categories</a></li>
                    <li><a href="<?=URL . 'yonetim' . '/videos'?>"><i class="glyphicon glyphicon-facetime-video"></i> Videos</a></li>
                    <li><a href="<?=URL . 'yonetim' . '/comments'?>"><i class="glyphicon glyphicon-comment"></i> Comments</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="content-box-large">
                    <!-- Video Ekle -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Add Video
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add Video</h4>
                                </div>
                                <form action="<?= URL . 'yonetim/addVideo' ?>" method="post">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="input-lg form-control" type="text" placeholder="Video Title" name="video_title" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input form-control" type="text" placeholder="Video Url" name="video_url" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select name="selected_category" class="selectpicker form-control">
                                                        <?php
                                                        foreach ($getCategories as $category){
                                                            ?>
                                                            <option value="<?=$category->category_id?>"><?=$category->category_name?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <textarea class="form-control" placeholder="Descriotion" rows="3" name="video_description" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="add_video">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Video Ekle Son-->
                </div>
            </div>
            <div class="row">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">All Videos</div>
                    </div>
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Url</th>
                                <th>Category</th>
                                <th style="width: 10%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($getVideos as $video){
                                ?>
                                <tr class="gradeX">
                                    <td><?=substr($video->movie_name,0,50)?></td>
                                    <td><?=substr($video->movie_description,0,150)?></td>
                                    <td><a href="<?= URL . 'Video/' . $video->movie_id . '/' . $video->sef_link?>" target="_blank"><?=substr($video->movie_url,0,150)?></a></td>
                                    <td class="center"><?= $video->category_name?></td>
                                    <td class="center">
                                        <!-- <button class="btn btn-info btn-xs">Edit</button> -->
                                        <a href="<?= URL . 'yonetim/deleteVideo/' . $video->movie_id?>" class="btn btn-danger btn-xs">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>