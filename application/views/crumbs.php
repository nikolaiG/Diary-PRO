<? $crumb_key_end = count($crumbs) - 1; ?>
<? if ( $crumb_key_end == 0 ) return null; ?>

<ul class="breadcrumb">
    <? foreach ($crumbs as $_key => $_crumb) { ?>
        <? if ( $_key != $crumb_key_end ) { ?>
            <li><a href="<?=$_crumb['uri']?>"><?=$_crumb['name']?></a> <span class="divider">/</span></li>
        <? } else {?>
            <li class="active"><?=$_crumb['name']?></li>
        <? } ?>
    <? } ?>
</ul>