<div id="title"><h2>Каталог продукции</h2></div>

<table width="100%" id="tbl_z" cellspacing="10">
    <?php for ($i = 0; $i < count($alcholArr); $i++): ?>
        <?php if ($i % 3 == 0): ?><tr><?php endif; ?>
            <td>
                <p align="center"><img src = "<?php echo $alcholArr[$i]->GetImg(); ?>" ></p>
                <p class="zz" align="center"><a data="<?php echo $alcholArr[$i]->GetId(); ?>" class="ajax_click" href="?id=<?php echo $alcholArr[$i]->GetId(); ?>"><?php echo $alcholArr[$i]->GetType() . " " . $alcholArr[$i]->GetName(); ?></a></p>
            </td>
            <?php if (($i + 1) % 3 == 0): ?></tr><?php endif; ?>
    <?php endfor; ?> 
</table>

<div id="fixed_block">
    <div id="white_block">
        <img src="/lab5/img/btn.png" id="close">
        <div id="ajax_content"></div>
    </div>
</div>
</div>

<script>
    $(function(){
        $('#close').click(function(){
            $('#fixed_block').fadeOut(200);
        });
        $('.ajax_click').click(function(e){
            e.preventDefault(); 
            var id_get = $(this).attr('data');
            $.ajax({
                method: "POST",
                data: {id: id_get},
                url: "http://web/ajax_get_bottle.php"
            }).done(function(msg){
                $('#fixed_block').fadeIn(200);
                $('#ajax_content').html(msg);
            });
        });
    });
</script>

<style>
    #fixed_block {
        background: url('lab5/img/black.png');
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        display: none;
    }
</style>
