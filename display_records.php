<!DOCTYPE html>  
<html>
<head>
<title>New Item </title>
<?php include('nav.php');?>
<style>
  body{
    background-color: black;
    font-family: 'Great Vibes', cursive;
    color: white;
    font-size:30px;
  }
  h1{
    border-bottom: 2px solid white;
    width: 350px;
  }
  header{
    border-width: 20%;
  }
</style>
<script>
</script>
</head>

<body>
  <center>
<h1>Add new Item</h1>
  <form method="post">
    <table width="cover" border="1">
  <tr>
    <td width="600px" height="60px">Image </td>
    <td width="600px" ><input type="file" name="Item_img"/></td>
  </tr>
  <tr>
    <td>Item name </td>
    <td><input type="text" name="Item_name"/></td>
  </tr>
  <tr>
    <td>Item description </td>
    <td><input style="height:100px;" type="textarea" name="Description"/></td>
  </tr>
  <tr>
    <td width="230">Stock</td>
    <td width="329"><input type="text" name="Stock"/></td>
  </tr>
  <tr>
    <td>Price </td>
    <td><input type="text" name="Price"/></td>
  </tr>
  <tr>
    <td>Category </td>
    <td><input type="text" name="Category"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>

  </form>
</center>
</body>
</html>