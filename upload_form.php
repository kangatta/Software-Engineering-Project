<h3>Upload a picture!</h3>
<hr />
<div style="color:red">
  <?php echo validation_errors(); ?>
  <?php if (isset($error)) {
    print $error;
}?>
</div>
<form method="POST" action="<?php echo base_url(); ?>index.php/stock/savedata" id="frm" enctype="multipart/form-data" style="height: 700px;">
<!-- <form method="post"> -->
  <div class="form-group">
    <label for="Item_img">Select Image*:</label>
    <input type="file" name="Item_img" class="form-control"  id="Item_img">
  </div>
  <div class="form-group">
    <label for="Item_name">Item name*:</label>
    <input type="text" class="form-control" name="Item_name" value="<?= set_value('Item_name'); ?>" id="Item_name">
  </div>
  <div class="form-group">
    <label for="Description">Item Description:</label>
    <textarea name="Description" class="form-control" id="Description"><?= set_value('Description'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="Stock">Stock:</label>
    <textarea name="Stock" class="form-control" id="Stock"><?= set_value('Stock'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="Price">Price:</label>
    <textarea name="Price" class="form-control" id="Price"><?= set_value('Price'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="Category">Category:</label>
    <textarea name="Category" class="form-control" id="Category"><?= set_value('Category'); ?></textarea>
  </div>
  <a href="<?=base_url();?>" class="btn btn-warning">Back</a>
  <button type="submit" class="btn btn-success">Submit</button>
</form>