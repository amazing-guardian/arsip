<h1>Edit Quote</h1>
<form action="<?= base_url() ?>index.php/home/edit_quote_do/<?= $data->id_quote ?>" method='post'>
	<textarea class="form-control" rows="5" name="quote"><?= $data->quote ?></textarea>
	<br>
	<input type="submit" name="" value="Oke" class="btn btn-success">
</form>