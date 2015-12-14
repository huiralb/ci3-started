# ci3-started
Mulai Codeigniter 3 dengan illuminate/database

## Instalasi
<code>$ git clone https://github.com/huiralb/ci3-started myProject</code>

#### Setup environment
Untuk mengaktifkan debug error secara otomatis edit <code>myProject/index.php</code>
Jika anda menggunakan xampp kurang lebih seperti ini :

```php
$setting = parse_ini_file("setting.ini.php");
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : $setting['env']);
```
pada <code>setting.ini.php</code>
```php
env = development
```
Jika anda bekerja pada local komputer masukkan nilai <code>env</code> dengan <code>development</code>

Ganti <code>env</code> menjadi <code>production</code> untuk environment remote / produksi.

## Database
Jika hendak menggunakan illuminate/Database:

1. run <code>$ composer update</code>
2. tambahkan <code>app/config/autoload.php</code> dengan <code>$autoload['libraries'] = array('MY_Database')</code>
