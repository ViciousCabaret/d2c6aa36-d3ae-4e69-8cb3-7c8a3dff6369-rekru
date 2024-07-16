
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
