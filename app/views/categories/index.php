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
                        Add Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add Category</h4>
                                </div>
                                <form action="<?= URL . 'yonetim/addCategory' ?>" method="post">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="input-lg form-control" type="text" placeholder="Category Title" name="cat_name" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="add_category">Add</button>
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
                        <div class="panel-title">All Categories</div>
                    </div>
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Url</th>
                                <th style="width: 10%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($getCategories as $category){
                                ?>
                                <tr class="gradeX">
                                    <td><?= $category->category_name ?></td>
                                    <td class="center"><a href="<?= URL . 'Kategori/' . $category->category_id . '/' . $category->sef_url ?>" target="_blank"><?= $category->sef_url?></a></td>
                                    <td class="center"><a href="<?= URL . 'yonetim/deleteCategory/' . $category->category_id?>" class="btn btn-danger btn-xs">Delete</a></td>
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