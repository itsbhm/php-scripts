
<!-- <p>Hello <?php echo $data['name'];?>!</p> -->

<?php if($data['user']): ?>

This is <?php echo  $data['user']->name; ?>'s Profile!
<?php else: ?>
<p>User Not found!</p>
<?php endif; ?>