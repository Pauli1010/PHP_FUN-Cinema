PROJEKT ZALICZENIOWY

Przyjęta konwencja nazewnicza:

FOLDER ArticlesPK - Pusty - nie znalazłam dla niego zastosowania w ramach przyjętej architektury

FOLDER CommonPK zawiera pliki współdzielone przez inne strony
Współdzielone pliki:
pkaminska_db_connection - plik zawierjący zmienne php potrzebne do podłączenia się do bazy danych
pkaminska_delete_form - formularz do usuwania zasobu, zawierający zmienną: nazwa pliku przekazywanego w form action i id zasobu
pkaminska_edit_link - link do edycji zasobu, zawierajaćy zmienną id zasobu
pkaminska_flash - plik zawierajacy skrypt do wyświetlenia wiadomości session[notice] po wykonaniu akcji
pkaminska_footer - plik z danymi footera
pkaminska_header - plik z danymi headera
pkaminska_nav - plik z danymi nawigacji

FOLDER CSSPK - zawiera pliki CSS

FOLDER DBPK - zawiera plik z danymi do połączenia z bazą danych,
DODATKOWO (W RAMACH ĆWICZENIA) dla zasobu Movies wyodrębniono do osobnych plików:
- pkaminska_find_movie
- pkaminska_read_movies
query do bazy danych wyszukujace pojedynczy element oraz listę wszystkich elementów.
Dla projektów przechukujących te zasoby w wielu miejscach,
skrypty mogłyby wczytywać przekazane dane (np. dla filtrowania wyników)

FOLDER IncludesPK - Pusty - nie znalazłam dla niego zastosowania w ramach przyjętej architektury

FOLDER MainPK zawiera podstawowe akcje typu CRUD.
Dla wszystkich dostepnych akcji:
- index (GET - lista elementów),
- new(GET),
- create (POST),
- edit (GET),
- update (POST),
- delete (POST)
struktura nazwy pliku wyglada nastepujaco:
pkaminska_[ACTION_NAME]_[RESOURCE]
przykładowo:
pkaminska_new_item - widok formularza dodawania nowego przedmiotu
pkaminska_create_item - skrypt PHP obsługujacy query do utworzenia nowego wiersza w tabeli items i przekierowujaća do kolejengo widoku

FOLDER SQLPK - zawiera plik do utworzenia i zaseedowania bazy danych.

Obsługiwane zasoby (resources):
- Movies -> nazwa tabeli w bazie danych: movies_pk_53327
- Clients -> nazwa tabeli w bazie danych: clients_pk_53327
- Tickets -> nazwa tabeli w bazie danych: tickets_pk_53327
- Bills -> nazwa tabeli w bazie danych: bills_pk_53327

