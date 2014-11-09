
<h1><?php echo h($post['Post']['title']); ?></h1>


<p>Images <?php echo $this->Html->image('../files/image/attachment/'.$post['Image']['0']['dir'].'/thumb_'.$post['Image']['0']['attachment']); ?></p>


<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>