<?php
$target_dir = "uploads/";
$query = $_GET['query'];

$files = scandir($target_dir);
$results = array_filter($files, function($file) use ($query) {
    return strpos($file, $query) !== false && $file != '.' && $file != '..';
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <ul>
        <?php foreach ($results as $result): ?>
            <li><a href="<?php echo $target_dir . $result; ?>"><?php echo $result; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.html">Back to Home</a>
</body>
</html>
