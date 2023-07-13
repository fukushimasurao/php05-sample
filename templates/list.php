<?php $title = 'フリーアンケート表示'; ?>

<?php ob_start() ?>
<body id="main">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                </div>
            </div>
        </nav>
    </header>

    <div>
        <div class="container jumbotron">
            <a href="detail.php"></a>
            <?= $view ?>
        </div>
    </div>
</body>
<?php $content = ob_get_clean() ?>

<?php require_once 'layout.php' ?>
