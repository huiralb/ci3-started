# ci3-started
Mulai Codeigniter 3 dengan illuminate/database

## Instalasi
* <code>$ git clone https://github.com/huiralb/ci3-started myProject</code>
* Jalankan command line berikut:
```
 $ cd myProject
 $ composer install
 $ php -S localhost:8000
```
* Lihat pada browser dengan url <code>localhost:8000</code>

#### Setup environment
Untuk mengaktifkan debug error secara otomatis pada <code>setting.ini.php</code>
```php
env = development
```
Jika anda bekerja pada local komputer masukkan nilai <code>env</code> dengan <code>development</code>

Ganti <code>env</code> menjadi <code>production</code> untuk environment remote / produksi.

## Database Model
Sejak anda menjalankan <code>$ composer install</code> pada proses instalasi yang lalu, aplikasi anda sudah terinstall paket database Eloquent dengan bantuan composer, secara spesifik ada di folder <code>app/vendor/illuminate/database</code>.

####Untuk menggunakan paket ini:
Pastikan setting koneksi database dengan baik pada file <code>setting.ini.php</code>

### Query Builder
Untuk mengakses model data dari table, code PHP anda kurang lebih terlihat seperti di bawah ini:
	```php
	use Illuminate\Database\Capsule\Manager as DB;

	class Selamat_datang extends CI_Controller {

		public function index()
		{
			$users = DB::table('users')->get();

			var_dump($users);

			$this->load->view('welcome_message');
		}
	}
	```

### ORM Eloquent Database
* Create file <code>app/Model/User.php</code>
	```php
	<?php
	namespace App\Model;

	use Illuminate\Database\Eloquent\Model;

	class User extends Model {

	}
```
* akses dari controller
```php
$users = \App\Model\User::all();

print_r($users);
