<div id="title"><h2>Каталог продукции</h2></div>

<table width="100%" id="tbl_z" cellspacing="10">
    <?php for ($i = 0; $i < count($alcholArr); $i++): ?>
        <?php if ($i % 3 == 0): ?><tr><?php endif; ?>
            <td>
                <p align="center"><img src = "<?php echo $alcholArr[$i]->GetImg(); ?>" ></p>
                <p class="zz" align="center"><a href="?id=<?php echo $alcholArr[$i]->GetId(); ?>"><?php echo $alcholArr[$i]->GetType() . " " . $alcholArr[$i]->GetName(); ?></a></p>
            </td>
            <?php if (($i + 1) % 3 == 0): ?></tr><?php endif; ?>
    <?php endfor; ?> 
</table>
