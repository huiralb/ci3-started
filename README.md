# ci3-started
Mulai Codeigniter 3 dengan illuminate/database

## Instalasi
<code>$ git clone https://github.com/huiralb/ci3-started myProject</code>

#### Setup environment
Untuk mengaktifkan debug error secara otomatis pada <code>setting.ini.php</code>
```php
env = development
```
Jika anda bekerja pada local komputer masukkan nilai <code>env</code> dengan <code>development</code>

Ganti <code>env</code> menjadi <code>production</code> untuk environment remote / produksi.

## Eloquent Database
Jika hendak menggunakan Eloquent Database:

1. run <code>$ composer update</code>
2. tambahkan <code>app/config/autoload.php</code> dengan <code>$autoload['libraries'] = array('MY_Database')</code>
