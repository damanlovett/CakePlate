<!doctype html>
  
  <title><?php echo $title_for_layout;?></title>

<?php if (Configure::read() == 0) { ?>
<meta http-equiv="Refresh" content="<?php echo $pause?>;url=<?php echo $url?>"/>
<?php } ?>  
    

    <details id="main">
      <summary><h3><?php echo $message?></h3></summary>>
      <p><a href="<?php echo $url?>"><?php __('Click here if not automatically forwarded in'); echo $pause; __('seconds')?>.</a></p>
    </details>
