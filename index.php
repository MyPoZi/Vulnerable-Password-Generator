<?php
$file = file("password.lst");
$count = count($file);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Vulnerable Password Generator(脆弱なパスワード生成機)</title>
</head>
<body>
<h1>Vulnerable Password Generator(脆弱なパスワード生成機)</h1>
<h2>※表示されたパスワードは使わないでください</h2>
<p>UNIXでよく使われる危険なパスワードを表示しています</p>
<form action="index.php" method="post">
    <input type="submit" value="生成する">
    <input type="hidden" name="pass" value="<?php echo $file[rand(0,$count - 1 )]?>">
</form>
<?php
if (isset($_POST["pass"])){
    echo "<h3>".$_POST["pass"]."</h3>";
}else{
    echo "ここに表示されます";
}
?>
</body>
</html>