
<h1><?php echo h($post['Post']['title']); ?></h1>
<p>Images <?php echo $attach['Attachment']['attachment']; ?></p>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>