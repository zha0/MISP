<div class="whitelist form">
<?php echo $this->Form->create('Blacklist');?>
	<fieldset>
		<legend><?php echo __('Add Import Blacklist');?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
