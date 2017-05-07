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
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="input-lg form-control" type="text" placeholder="Video Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <input class="input form-control" type="text" placeholder="Video Url">
                                            </div>
                                            <div class="col-lg-6">
                                                <select class="selectpicker form-control" style="display: none;">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                                <div class="btn-group bootstrap-select dropup ">
                                                    <button type="button"
                                                            class="btn dropdown-toggle selectpicker btn-default"
                                                            data-toggle="dropdown" title="Mustard"><span
                                                            class="filter-option pull-left">Mustard</span>&nbsp;<span
                                                            class="caret"></span></button>
                                                    <div class="dropdown-menu open"
                                                         style="max-height: 5343px; overflow: hidden; min-height: 0px;">
                                                        <ul class="dropdown-menu inner selectpicker" role="menu"
                                                            style="max-height: 5331px; overflow-y: auto;">
                                                            <li rel="0" class="selected"><a tabindex="0" class=""
                                                                                            style=""><span class="text">Mustard</span><i
                                                                        class="glyphicon glyphicon-ok icon-ok check-mark"></i></a>
                                                            </li>
                                                            <li rel="1"><a tabindex="0" class="" style=""><span
                                                                        class="text">Ketchup</span><i
                                                                        class="glyphicon glyphicon-ok icon-ok check-mark"></i></a>
                                                            </li>
                                                            <li rel="2"><a tabindex="0" class="" style=""><span
                                                                        class="text">Relish</span><i
                                                                        class="glyphicon glyphicon-ok icon-ok check-mark"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <textarea class="form-control" placeholder="Descriotion" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
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
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td class="center">-</td>
                                <td class="center"><button class="btn btn-danger btn-xs">Delete</button></td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td class="center">-</td>
                                <td class="center"><button class="btn btn-danger btn-xs">Delete</button></td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td class="center">-</td>
                                <td class="center"><button class="btn btn-danger btn-xs">Delete</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>