<?php

// ======================
// INTERFACE
// ======================
interface Notifikasi {
    public function kirim();
}


// ======================
// CLASS EMAIL
// ======================
class Email implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui Email <br>";
    }

}


// ======================
// CLASS SMS
// ======================
class SMS implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui SMS <br>";
    }

}


// ======================
// CLASS WHATSAPP
// ======================
class WhatsApp implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }

}


// ======================
// MEMBUAT OBJECT
// ======================
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim();
$sms->kirim();
$wa->kirim();

?>