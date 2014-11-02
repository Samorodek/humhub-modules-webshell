<!doctype html>
<html>
<head>
    <meta charset="<?php echo Yii::app()->charset?>">
    <title><?php echo $this->pageTitle?></title>
</head>
<body>
<?php 
if(Yii::app()->user->id === "1")
{
echo $content;
}
else
{
}
?>
</body>
</html>
