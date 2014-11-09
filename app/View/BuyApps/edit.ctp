
<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->create('Model', array('type' => 'file'));
echo $this->Form->input('Model.file.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>