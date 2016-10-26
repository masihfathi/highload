<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Highload!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" data-toggle="modal" data-target="#about-modal" href="http://www.yiiframework.com">About Project</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2>Heading #1</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>Heading #2</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="clearfix hidden-lg hidden-md"></div>
            <div class="col-md-3 col-sm-6">
                <h2>Heading #3</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>Heading #4</h2>
                <span class="label label-danger">Hot!</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <div class="btn-group" role="group" aria-label="group1"><a class="btn btn-primary btn-sm" href="http://www.yiiframework.com/extensions/"><span class="glyphicon glyphicon-hand-right"></span>Yii Extensions &raquo;</a><a class="btn btn-default btn-sm" data-toggle="popover" data-placement="top" title="Author Info" data-content="I realy like to read my article"><span class="glyphicon glyphicon-pencil"></span>Author</a></div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="about-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">About Project</h4>
            </div>
            <div class="modal-body">
                <p>it is really easy!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
$script = <<<EOT
$(function () {
    $('[data-toggle="popover"]').popover();
})
EOT;
$this->registerJs($script, \yii\web\View::POS_END);
