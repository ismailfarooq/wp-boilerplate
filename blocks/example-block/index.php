<?php
$example_block_field = get_field('example_block_field');
?>
<div class="example-block">
    <?php if ($example_block_field) : ?>
        <h2><?php echo esc_html($example_block_field); ?></h2>
    <?php endif; ?>
</div>
