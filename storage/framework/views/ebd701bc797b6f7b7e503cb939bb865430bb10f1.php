<?php if($paginator->hasPages()): ?>
    <ul class="pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled"><span>&laquo;Atras </span></li>
        <?php else: ?>
            <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">&laquo;Atras </a></li>
        <?php endif; ?>  

        
        <?php if($paginator->hasMorePages()): ?>
            <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"> Siguiente &raquo;</a></li>
        <?php else: ?>
            <li class="disabled"><span>Siguiente &raquo;</span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
