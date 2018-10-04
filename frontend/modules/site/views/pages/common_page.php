<section class="<?= $pagez->bgimage; ?>">
    <br><h2><?=  $pagez->title; ?></h2>
  <?= $pagez->slug == 'clients' ? "<h4><a href='/'> HOME </a> /  OUR WORKS</h4>": NULL ?>
</section>

<?php echo $formatted_content; ?>      
