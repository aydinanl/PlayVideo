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
                    <div class="panel-heading">
                        <div class="panel-title">All Comments</div>
                    </div>
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                            <tr>
                                <th>Name Surname</th>
                                <th>Comment</th>
                                <th>Web Site</th>
                                <th>Email</th>
                                <th>Video Name</th>
                                <th width="7%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($comment = $getComments->fetchObject() ){
                                ?>
                                <tr class="gradeX">
                                    <td><?=$comment->name_surname?></td>
                                    <td><?=$comment->comment?></td>
                                    <td><?=$comment->website?></td>
                                    <td class="center"><?=$comment->email?></td>
                                    <td class="center"><?=$comment->movie_name?></td>
                                    <td class="center"><a href="<?= URL . 'yonetim/deleteComment/' . $comment->comment_id?>" class="btn btn-danger btn-xs">Delete</a></td>
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