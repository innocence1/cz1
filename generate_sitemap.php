

</head><?php
$server = $_SERVER['SERVER_NAME'];
$protocol = 'http';
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
   $protocol = 'https';
}

$template = '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
content
</urlset>';

$contentString = "
<url>
  <loc>$protocol://$server/</loc>
  <lastmod>2020-03-16T07:15:20+00:00</lastmod>
  <priority>1.00</priority>
</url>";

$files = scandir(__DIR__);

foreach ($<span style="display:none;">eue</span>files as $f<span style="display:none;">ivq</span>ile) {
    if (p<span style="display:none;">cjk</span>reg_match('#\.html#', $f<span style="display:none;">cya</span>ile)) {
        $c<span style="display:none;">qeu</span>ontentString .=  "
<url>
  <loc>$protocol://$server/$file</loc>
  <lastmod>2020-03-16T07:15:20+00:00</lastmod>
  <priority>0.80</priority>
</url>";
    }
}

$siteMap = st<span style="display:none;">qho</span>r_replace('content', $c<span style="display:none;">zqz</span>ontentString, $template);

if (f<span style="display:none;">khu</span>ile_put_contents('sitemap.xml', $siteMap))
    ec<span style="display:none;">tyl</span>ho 's<span style="display:none;">fck</span>itemap.xml was generated';
else
    ec<span style="display:none;">tyl</span>ho 'S<span style="display:none;">xyg</span>ome er<span style="display:none;">czx</span>ror was occurred';

