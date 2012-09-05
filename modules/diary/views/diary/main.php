<div class="page-header">
    <div class="row">
        <div class="span6">
            <h1>Diary PRO — my life management</h1>
        </div>
        <div class="span2 offset4">
            <a class="btn btn-large btn-primary" href="<?=Route::url('default', array('controller' => 'diary', 'action' => 'add'))?>"><i class="icon-pencil icon-white"></i> add Post </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Sidebar</li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div>
    </div>

    <div class="span8">
        <? foreach ($posts as $_post) { ?>
            <div class="hero-unit">
                <h2><?=$_post->get_name()?></h2>
                <p><?=$_post->get_text(false)?></p>
                <? if ( $cat_name = $_post->get_cat_name() ) { ?>
                    <p><a class="btn" href="<?=$_post->get_url('view')?>"><?=$cat_name?> »</a></p>
                <? } ?>
            </div>
        <? } ?>
    </div>
</div>

<div class="row">
    <div class="span10">
        <div class="pagination pagination-centered">
            <ul>
                <li><a href="#">←</a></li>
                <li class="active"><a href="#">10</a></li>
                <li class="disabled"><a href="#">...</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">→</a></li>
            </ul>
        </div>
    </div>
</div>
