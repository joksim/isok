<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name'); ?>

</div>
<div class="form-group">
    <?php echo Form::label('slug', 'Slug:'); ?>

    <?php echo Form::text('slug'); ?>

</div>
<div class="form-group">
    <?php echo Form::submit($submit_text, ['class'=>'btn primary']); ?>

</div>
