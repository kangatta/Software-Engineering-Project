  <h2>List of Pictures</h2>
  <?php if (count($stock_list)) {?>
    <table class="table table-bordered">
    <thead>
      <tr>
      <th>Item Id</th>
      <th>Item</th>
      <th>Image</th>
      <th>Description</th>
      <th>Stock</th>
      <th>Price</th>
      <th>Category</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($stock_list as $pic): ?>
      <tr>
      <td><?=$pic->Item_id;?></td>
      <td><?=$pic->Item_name;?></td>
      <td><img src="<?=base_url();?>uploads/<?php echo $pic->Item_img?>"></a></td>
      <td><?=$pic->Description;?></td>
      <td><?=$pic->Stock;?></td>
      <td><?=$pic->Price;?></td>
      <td><?=$pic->Category;?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
    </table>
    <br />
    <a href="<?=base_url().'index.php/stock/form';?>" class="btn btn-primary">Upload More</a>
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'index.php/stock/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>