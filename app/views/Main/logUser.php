<?php $this->view('shared/header', 'User Log book'); ?>
<form>
	<label>Write your name:</label>
	<input type="text" name="name">
	<input type="submit" name="action" value='Write my name to the log'>
</form>

<?php $this->view('shared/footer');?>