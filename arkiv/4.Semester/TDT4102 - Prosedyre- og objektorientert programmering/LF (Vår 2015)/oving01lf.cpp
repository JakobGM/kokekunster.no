#include <iostream> // cin og cout
#include <cmath> // For pow og sqrt
#include <iomanip> // For setprecision

using namespace std;

// 1a:
void inputAndPrintInteger() {
    int number = 0;
    cout << "Skriv inn et tall: ";
    cin >> number;
    cout << "Du skrev: " << number << endl;
}

// 1b:
int inputInteger() {
    int number = 0;
    cout << "Skriv inn et tall: ";
    cin >> number;
    return number;
}

// 1c
void inputIntegersAndPrintSum() {
    int firstNumber = inputInteger();
    int secondNumber = inputInteger();
    cout << "Summen av tallene: " << firstNumber + secondNumber << endl;
}

/* 1d:
 * Her må vi bruke inputInteger(). inputAndPrintInteger() ville bare skrevet ut enkelt-verdiene, uten å ta vare på dem
 * på noen måte slik at vi kunne gjort noe mer med dem (som å summere dem, slik vi skal i denne oppgava). Dette demonstrerer
 * dermed at det finnes tilfeller der vi trenger verdien som retur. Vi er heller ikke egentlig interessert i å skrive ut
 * de verdiene vi nettopp skrev ut til skjerm ukritisk, vi vet tross alt hva vi nettopp skrev inn, og er mer interessert
 * i å skrive ut summen av dem. Dermed vil verdiretur være riktig, og ikke verdiutskrift.
 */

// 1e
bool isOdd(int n) {
    return n % 2;
}

/* 1e (en litt mer eksplisitt løsning)
bool isOdd(int number) {
    if (number % 2 == 1) {
        return true;
    } else {
        return false;
    }
}
 */

// 1f
void printHumanReadableTime(int seconds) {
    // Antall timer er sekunder / 3600
    // Siden begge operandene er heltall utføres
    // heltallsdivisjon. Desimaldelen forsvinner m.a.o.
    int hours = seconds / 3600;
    // La antall sekunder være resten fra divisjonen over.
    // Modulo (%) gir heltallsresten fra en divisjon, f.eks. har 10/3, 
    // 3 som heltallssvar, og 1 som rest (10 = 3 * 3 + 1). Vi trenger 
    // ikke lengre alle sekundene som har gått opp i hele timer.
    seconds = seconds % 3600;
    // Minuttene er da resterende sekunder / 60.
    int minutes = seconds / 60;
    // Og rene sekunder er resten fra denne divisjonen igjen
    seconds = seconds % 60;

    cout << hours << " time";
    if (hours != 1) {
        cout << "r";
    }
    cout << ", " << minutes << " minutt";
    if (minutes != 1) {
        cout << "er";
    }
    cout << " og " << seconds << " sekund";
    if (seconds != 1) {
        cout << "er";
    }
    cout << endl;
    
    /* Mer kompakt løsning som benytter ternary operator:
    cout << hours << " time" << (hours == 1 ? "" : "r") << ", ";
    cout << minutes << " minutt" << (minutes == 1 ? "" : "er") << ", og ";
    cout << seconds << " sekund" << (hours == 1 ? "" : "er") << endl;
     */
}

// 2a - For-løkke-løsning
void inputIntegersUsingForLoopAndPrintSum() {
    int nTerms = 0;
    cout << "Hvor mange tall vil du summere? ";
    cin >> nTerms;
    
    int sum = 0;
    for (int i = 0; i < nTerms; i++) {
        int term = inputInteger();
        sum += term;
    }
    cout << "Summen av tallene: " << sum << endl;
}

// 2a - While-løkke-løsning
void inputIntegersUsingWhileLoopAndPrintSum() {
    cout << "Skriv inn tall du vil summere. "
         << "Skriver du inn 0 avsluttes løkken og summen skrives ut." 
         << endl;
    
    int sum = 0;
    int term = inputInteger();
    while (term != 0) {
        sum += term;
        term = inputInteger();
    }
    
    cout << "Summen av tallene: " << sum << endl;
}

// 2a - Do-While-løkke-løsning
void inputIntegersUsingDoWhileLoopAndPrintSum() {
    cout << "Skriv inn tall du vil summere. "
         << "Skriver du inn 0 avsluttes løkken og summen skrives ut." 
         << endl;
    
    int sum = 0;
    int term = 0;
    do {
        term = inputInteger();
        sum += term;
    } while (term != 0);
    
    cout << "Summen av tallene: " << sum << endl;
}

/* 2b:
 * Hvis vi vet hvor mange ganger vi skal repetere noe når vi starter løkken, bruker vi typisk en for-løkke. 
 * I det første tilfellet i oppgave 2a har vi "angi antallet tall først" i oppgaveteksten, som betyr at antallet
 * iterasjoner er kjent før vi begynner å iterere, ergo for-løkke. Hvis vi derimot ikke vet hvor mange
 * ganger vi skal iterere, men heller avhenger av noe som skjer underveis for å finne antallet ganger, har
 * vi typisk en while-løkke. While-løkke kommer som navnet hinter til av at vi skal gjøre noe "så lenge" noe
 * er sant. I dette tilfellet skal leddet ikke være 0, og vi kan ikke vite når brukeren bestemmer seg for at
 * "nok er nok".
 *
 * Det er verdt å nevne at ei for-løkke også kan skrives som en while, og vice versa, så begge alternativene i 2a
 * KAN teknisk sett løses med begge typer løkke. Det må dog nevnes at det blir litt mer kronglete, da for-løkker ikke
 * egentlig egner seg veldig godt til tilfellet hvor antallet iterasjoner er helt ukjent, og while-løkker har ikke
 * tellevariabler med i grunnlaget, slik at det blir litt merarbeid om man skal skrive ei telleløkke som while-løkke.
 * 
 * Det skal også nevnes at do-while-løkke kanskje er enda mer passende enn while-løkke for det alternativet, da vi
 * alltid vil at brukeren skal bli spurt om input minst en gang.
 */

// 2c:
double inputDouble() {
    double number = 0;
    cout << "Skriv inn et tall: ";
    cin >> number;
    return number;
}

// 2d:
void convertNOKtoEUR() {
    double NOK = -1.0f;
    while (NOK < 0.0f) {
        NOK = inputDouble();
    }
    double EUR = NOK / 9.12;
    cout << setprecision(2) << fixed << NOK << " NOK er " << EUR << " EUR" << endl;
    /** "Magic formula" page 31 in textbook - As an alternative to << setprecision(2) << fixed
      cout.setf(ios::fixed);
      cout.setf(ios::showpoint);
      cout.precision(2);
    */
}

/* 2e:
 * inputInteger gir oss et heltall, dette vil dermed ikke ha noen desimalplasser,
 * som vil være problematisk når vi skal regne med valuta. Rett nok vil resultatet fortsatt
 * bli regnet ut med riktig kurs, men øre-biten av verdien vil bli borte allerede FØR utregningen,
 * noe som vil gi oss et svar som neppe er helt riktig. Når vi skal regne med desimaltall, bør
 * vi derfor være nøye med å velge riktig datatype. I dette tilfellet er double tilstrekkelig,
 * selv om double ikke er eksakt. Vi beholder dermed desimalplassene, og får et mer generelt korrekt
 * svar fra utregningen. Det i oppgaven som legger føring på valg av datatype i dette tilfellet
 * er ordleggingen "to desimaler", som gir oss et hint om at det her skal jobbes med desimaltall.
 *
 * Returtypen til funksjonen er void, siden oppgaven sier "skriv ut det vekslede beløpet", og ikke
 * "returner det vekslede beløpet".
 */

// 3b
void printMultiplicationTable() {
    int height = 0;
    int width = 0;
    cout << "Hoyde?";
    cin >> height;
    cout << "Bredde?";
    cin >> width;
    for (int x = 1; x <= width; x++) {
        for (int y = 1; y <= height; y++) {
            cout << x *y << "\t";
        }
        cout << endl;
    }
}

// 4a
double discriminant(double a, double b, double c) {
    return pow(b, 2.0) - 4 * a * c;
}

// 4b
void printRealRoots(double a, double b, double c) {
    int d = discriminant(a, b, c);
    if (d > 0.0) { 
        double firstSolution = (-b + sqrt(d)) / (2 * a);
        double secondSolution = (-b - sqrt(d)) / (2 * a);
        cout << "Løsning 1: " << firstSolution << endl;
        cout << "Løsning 2: " << secondSolution << endl;
    } else if (d == 0.0) {
        double solution = -b / (2 * a);
        cout << "Løsning: " << solution << endl;
    } else /* (d < 0.0) */ {
        cout << "Ingen reell løsning finnes." << endl;
    }
}

//  4c
void solveQuadraticEquations() {
    double a = 0.0;
    double b = 0.0;
    double c = 0.0;
    cout << "A: ";
    cin >> a;
    cout << "B: ";
    cin >> b;
    cout << "C: ";
    cin >> c;
    printRealRoots(a, b, c);
}

/* 4e
 * Oppgaven spesifiserer at man skal bruke testmenyen for å teste at koden fungerer, men det går
 * også an å sjekke ved å kjøre printRealRoots med verdiene hardkodet:
 * 
 * printRealRoots(1, 2, 4);
 * -> Ingen reell løsning finnes.
 *
 * printRealRoots(4, 4, 1);
 * -> Løsning: -0.5
 * 
 * printRealRoots(8, 4, -1);
 * -> Løsning 1: 0.183013
 * -> Løsning 2: -0.683013
 */

// 5
void calculateLoanPayments() {
    double amount, interest;
    double total = 0;
    cout << "Laanesum: ";
    cin >> amount;
    cout << "Laanerente: ";
    cin >> interest;
    cout << "\t\tBetaling\tRest\n";
    for (int i = 0; i < 10; i++) {
        int payment = amount / 10 + (10 - i) / 10.0 * amount * (interest / 100.0);
        total += payment;
        cout << "Aar nr " << i + 1 << ":\t" << payment << "\t\t" << (9 - i) / 10.0 * amount << endl;
    }
    cout << "Totalt:\t\t" << total << endl;
}

// 3a, 3b, 4d, 5a
void testIsOdd() {
    int number = inputInteger();
    if (isOdd(number)) {
        cout << number << " er et oddetall." << endl;
    } else {
        cout << number << " er et partall." << endl;        
    }
}

void testPrintHumanReadableTime() {
    int nSeconds = inputInteger();
    printHumanReadableTime(nSeconds);
}

int main(int argc, char **argv) {
    int valg = -1;
    while (valg != 0) {
        cout    << "0) Avslutt" << endl
                << "1) Summer to tall" << endl
                << "2) Sjekk om et tall er et oddetall" << endl
                << "3) Konverter sekunder" << endl
                << "4) Summer flere tall (for)" << endl
                << "5) Summer flere tall (while)" << endl
                << "6) Summer flere tall (do-while)" << endl
                << "7) Konverter NOK til EURO" << endl
                << "8) Skriv ut gangetabell" << endl
                << "9) Løs kvadratiske ligninger" << endl
                << "10) Lånekalkulatorer" << endl;
        cout << "Angi valg (0-10)";
        cin >> valg;
        cout << endl;
        switch (valg) {
        case 0:
            break;
        case 1:
            inputIntegersAndPrintSum();
            break;
        case 2:
            testIsOdd();
            break;
        case 3:
            testPrintHumanReadableTime();
            break;
        case 4:
            inputIntegersUsingForLoopAndPrintSum();
            break;
        case 5:
            inputIntegersUsingWhileLoopAndPrintSum();
            break;
        case 6:
            inputIntegersUsingDoWhileLoopAndPrintSum();
            break;
        case 7:
            convertNOKtoEUR();
            break;
        case 8:
            printMultiplicationTable();
            break;
        case 9:
            solveQuadraticEquations();
            break;
        case 10:
            calculateLoanPayments();
        default:
            cout << "Ugyldig valg" << endl;
        }
        cout << endl;
    }
}
