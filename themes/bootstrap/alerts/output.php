<!-- TODO switch to full bootstrap alert formatting, including JS handling of markasread -->
<div class="alert alert-block" id="alert<?= $this->id; ?>">
	<?= $this->formatMessage(); ?>
	<a href="#markAsRead" data-alert="<?= $this->id; ?>" class="markAsRead">x</a>
</div>