# iOP

Witryna pozwalająca na dodawanie, przeglądanie i filtrowanie wydarzeń w Opolu. Została napisana na hackathonie PiastCode.

# Instalacja

## Baza danych do wyeksportowania znajduje się w pliku `database/PiastCode.sql`

## Po sklonowaniu repozytorium należy zmienić niektóre dane:
1. `application/config/config.php`
  - zmiana zawartości `$config['base_url']` na główny adres strony
2. `public/js/main.js`
  - zmiana zawartości `var baseUrl` na główny adres strony
2. `application/config/database.php`
  - zmiana zawartości `$db['default']` na dane swojej bazy danych
