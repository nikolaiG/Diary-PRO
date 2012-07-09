<div class="page-header">
    <h1>Diary PRO — my life management</h1>
</div>
<p>Система для видения личного дневника, книжной полки, упрваление привычками</p>

<div class="row">
    <div class="span8">
        <form class="well form-inline" method="POST" action="<?=Route::url('default',array('controller' => 'auth', 'action' => 'login'))?>">
            <input type="text" class="input-small" placeholder="Email" name="email">
            <input type="password" class="input-small" placeholder="Password" name="password">

            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn">Sign in</button>
            or <a href="#invite" data-toggle="modal" >requset invite</a>
        </form>
    </div>
</div>

<div class="modal hide fade" id="invite">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>