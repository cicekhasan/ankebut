# ANKEBUT ATIŞTIRMA


ayarlar.php 

```bash
<?php

try {

    $ayarlar = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    $db = new PDO("mysql:host=localhost;dbname=veritabaniAdi", "veritabaniKullaniciAdi", "veritabaniParolasi", $ayarlar);

} catch (PDOException $ex) {
    die($ex->getMessage());
}

//$db = null;
```

.htaccess

```bash
Options +FollowSymLinks
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d 

RewriteRule ^(.+)$ index.php?sayfa=$1 [QSA]
RewriteRule ^([0-9a-zA-Z-_]+)$ index.php?sayfa=$1 [QSA]
```

### Veritabanı Tabloları

| Kolon  | Tür	| Yorum |
| ---- | ---- | ---- |
| id     | int(11) Otomatik Artır|  |	
| kAdi   | varchar(150)	|  |
| adSoy  | varchar(150)	|  |
| ePosta | varchar(150)	|  |
| parola | varchar(300)	|  |
| yetki  | int(5) [1]	|  |
| resim  | varchar(300) [ ]	|  |
| kTarih | timestamp [current_timestamp()]	|  |
| gTarih | timestamp [0000-00-00 00:00:00]	|  |