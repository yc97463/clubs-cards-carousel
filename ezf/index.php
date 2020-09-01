<!DOCTYPE html>
<html>

<head>
    <title>compress</title>
</head>

<body>
    <form action='index.php' method='POST' enctype='multipart/form-data'>
        <input name="image_file" type="file" accept="image/*">
        <button type="submit">SUBMIT</button>
    </form><br>
    <?include('ezfile.php');?><br>
    <?php // echo "<a download href=//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."a/".$file_name." target='_target'>".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."a/".$file_name."</a>" ?>
    <?php echo "<a download href='//img.imych.one/".$dir."".$file_name."' target='_blank'>下載檔案</a>" ?>

</body>

</html>