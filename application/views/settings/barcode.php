<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center; 
    }
    
    #qrcode {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px;
      height: 100px;
      /* background-color: lightgray; */
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
    <div id="barcode">Loading...</div>
    <?php $this->load->view('includes/js'); ?>

    <?php if (isset($scripts)) : ?>
        <?php foreach ($scripts as $script) : ?>
            <script src="<?= base_url($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>