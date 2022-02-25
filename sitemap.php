<?php
require_once("admin/includes/config.php");

$article=$conn->query('SELECT url from article');
$baseurl="http://localhost/news/";
header("Content-Type:application/xml: charset=utf-8");
echo '<!--?xml version="1.0" encoding="UTF-8"?-->'.PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'.PHP_EOL;
echo '<url>' .PHP_EOL;
echo '<loc>'.$baseurl.'</loc>'.PHP_EOL;
echo '<changefreq>daily</changefreq>';
echo "</url>".PHP_EOL;
while($row=mysqli_fetch_ASSOC($article)){
	echo'<url>'.PHP_EOL;
	echo'<loc>'.$row['url'].'</loc>'.PHP_EOL;
	echo '<changefreq>daily</changefreq>'.PHP_EOL;
	echo "</url>".PHP_EOL;
}
echo "</urlset>".PHP_EOL;
?>