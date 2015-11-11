# ci3-started
Mulai Codeigniter 3 dengan illuminate/database

## Instalasi
<code>$ git clone https://github.com/huiralb/ci3-started myProject</code>

#### Setup environment
Untuk mengaktifkan debug error secara otomatis edit <code>myProject/index.php</code>
Jika anda menggunakan xampp kurang lebih seperti ini :

```
switch ($_SERVER['DOCUMENT_ROOT']) {
	case 'C:/xampp/htdocs':
		$env = 'development';
		break;
	
	default:
		$env = 'production';
		break;
}
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : $env);
```
Sesuaikan lokasi project anda, contoh di atas project berada di <code>C:/xampp/htdocs</code>