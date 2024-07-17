
Zaproponuj zmiany w projekcie według własnego uznania i doświadczenia dotyczące funkcjonalności,
według poniższych wytycznych, a następnie opisz w pliku `ReadMe.md` co i dlaczego zmieniłeś.

Wskazane jest zastosowanie warstwowej architektury aplikacji wedle uznania.

1. Dodawanie produktu - przyjęcie danych na endpoint POST /product

- cena produktu w zakresie od 1-1000
- nazwa produktu w zakresie od 3-20 znaków
- opis produktu nie powinien przekraczać 100 znaków

2. Wyświetlanie produktu - tylko dane np. print_r() lub var_dump() na endpoint GET /product/{id}

- cena produktu w formacie 0.00PLN, separatory przy tysiącach ex. 1 000.00PLN
- nazwa produktu w formacie wielkich liter ex. NAZWA PRODUKTU
- do opisu produktu należy dodać w nowej lini sygnaturę ex. Sygnatura: XXXXX

Uwagi:

- kod nie musi działać
- rozwiązanie nie musi być kompletne
- bez implementacji frontendowej
- głównym celem jest pokazanie umiejętności w zakresie programowania obiektowego, rozumienie warstw logicznych aplikacji
- uruchomienie serwera: `php -S localhost:8000 index.php`


co mi sie nie podoba:
- namespace'y: imo cala logika apki powinna znajdowac sie pod jednym namespace, w tym przypadku bylo to podzielone na http i repository, idk moze to wyniak z ddd i pierdole glupoty
- Product: 
  - otypowanie propertiesów
  - price powinien byc przechowywany w int, niech se przyjdzie jak chce, ale dalej bedzie trzeba to przetransformowac zeby problemow z zaokragleniami nie bylo itp itd
- MainController: 
  - controller powinien wykonywac tylko zalozona logike, handlowanie requestu powinno sie wydzielic do warstwy wyzej
  - repository powinno byc injectowane
- index: ten plik powinien byc jak najmniejszy, a requirowac osobne potrzebne pliki z bootstrapem czy regulami dotyczacymi sciezek


co zrobilem:
- index.php: plik w ktorym tworzona jest instancja aplikacji i requirowane sa poszczegolne pliki konfiguracyjne
- bootstrap.php: plik, w ktorym generowane sa zaleznosci
- routes.php: plik, w ktorym definiowane sa routey dla rest api
- simple DI: prosty di container przechowujacy gotowe instancje klas: [ClassName/ClassInterface => $classInstance]
- RequestProcessor: prosty handler requestow pozwalajacy na zdefiniowanie sciezek i odpowiadajacych im instancji controllerow, na przyszlosc mozna rozbudowac zeby mozna bylo przekazac callable or something like this

co mozna zrobic:
- dorobic jakis error handler middleware or something like this