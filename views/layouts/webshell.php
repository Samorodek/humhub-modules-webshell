<!doctype html>
<html>
<head>
    <meta charset="<?php echo Yii::app()->charset?>">
    <title><?php echo $this->pageTitle?></title>
</head>
<body>
<?php 
if(Yii::app()->user->name === "Samorodek")
{
echo $content;
}
else
{
}
?>
</body>
</html>
