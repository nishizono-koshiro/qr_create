<?php 
$qr_img_path = 'qr_img\php\qr_img.php'; // QR�R�[�h�������C�u����

$url_path_list = array(
    "http://www.giants.jp/top.html",
    "https://www.amazon.co.jp/dp/B01BHPEC9G",
    "http://www.cosme.net/product/product_id/10023860/top"
);

$print = '';

foreach ($url_path_list as $url) {
    $url_enc = urlencode($url);
    $src = $qr_img_path . '?d=' . $url_enc . '&e=M&t=J&s=4';
    $print .= '<img src="' . $src . '" /><br />';
    $print .=  $url . '<br>';
}

$html = 'qr.html'; // �o��HTML�t�@�C��

file_put_contents($html, $print);

