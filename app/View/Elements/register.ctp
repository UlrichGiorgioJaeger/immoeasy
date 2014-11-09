<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel"><?php echo __('Form title'); ?></h3>
            </div>
            <div class="modal-body">
                <?php
                echo $this->Form->create('User');
                echo $this->Form->input('First name');
                echo $this->Form->input('Last name');
                echo $this->Form->end('Save');
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#myModal').modal('show');
    });
</script>