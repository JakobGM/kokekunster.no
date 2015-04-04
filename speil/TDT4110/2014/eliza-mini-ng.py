# vim:set fileencoding=latin-1:
import random # Importerer modulen random (generere tilfeldige tall)

# Funksjon:     pick_sentence
# Beskrivelse:  Plukker ut en tilfeldig tekststreng fra en liste av tekstsetninger
# Input:        En liste av tekststrenger
# Ouput:        En tekststreng
def pick_sentence(sentences):
  return sentences[random.randint(0, len(sentences)-1)]

# Funksjon:     print_sentence
# Beskrivelse:  Skriver ut tre tekststrenger p� ei linje til konsoll.
#               Det skal v�re mellomrom (space) mellom tekststreng en og to.
#               Det skal ikke v�re mellomrom (space) mellom tekststreng to og tre.
# Input:        Tre tekststrenger
# Output:       Ingen
# Kommentar:    MANGER KODE HER!!!!


# Funksjon:     intro_text
# Beskrivelse:  Skriver en velkomsttekst til konsoll som skal inneholde:
#               20 linjeskift
#               Setningen: "Hei, jeg heter Eliza og vil gjerne snakke med deg."
#               Setningen: "Ikke start svar med stor bokstav og bruk hele setninger."
#               Setningen: "Skriv 'hade' hvis du vil avslutte samtalen"
#               Setningen: "**************************************************"
#               1 linjeskift
# Input:        Ingen
# Output:       Ingen
# Kommentar:    MANGLER KODE HER!!!


# Funksjon:     main
# Beskrivelse:  Hovedfunksjonen i programmet
# Input:        Ingen
# Output:       Ingen
def main():
  # Initialisering av variabler
  answer = "ikke hade" # S�rger for at while-l�kka kj�rer f�rste gang

  # En liste av sp�rsm�l
  questions = ['Hva gj�r du', 'Hvordan g�r det', 'Hvorfor heter du',
              'Liker du � hete', 'F�ler du deg bra', 'Hva har du gjort idag',
              'Hva tenker du om framtida', 'Hva gj�r deg glad', 'Hva gj�r deg trist']

  # En liste av oppf�lgningssp�rsm�l
  follow_ups = ['Hvorfor sier du', 'Hva mener du med', 'Hvor lenge har du sagt',
               'Hvilke tanker har du om', 'Kan du si litt mer om',
               'N�r tenkte du f�rste gang p�']

  # En liste av responser
  responses = ['Fint du sier det', 'Det skj�nner jeg godt', 'S� dumt da', 'F�ler meg ogs� s�nn',
              'Blir trist av det du sier', 'S� bra', 'Du er jammen frekk']

  # Skriv velkomsttekst til konsoll vha funksjonen intro_text
  # MANGLER KODE HER!!!

  # Sp�r brukeren om navnet og lagre svaret i en variabel
  # MANGLER KODE HER!!!

  # Programmet kj�rer i l�kke helt til brukeren svarer "hade"
  while answer != "hade":
    pass

    # NB: All kode her m� skrives med to innrykk!!!

    # Plukk ut et tilfeldig sp�rsm�l fra lista questions 
    # ved hjelp av funksjonen pick_sentence
    # MANGLER KODE HER!!!

    # Skriv sp�rsm�let etterfulgt av navnet til brukeren
    # og et sp�rsm�lstegn ved hjelp av funksjonen print_sentence
    # MANGLER KODE HER!!!

    # Sp�r brukeren om et svar med teksten "Svar: " og lagre
    # resultatet i en variabel
    # MANGLER KODE HER!!!

    # Plukk ut et tilfeldig oppf�lgingssp�rsm�l fra lista follow_ups 
    # ved hjelp av funksjonen pick_sentence
    # MANGLER KODE HER!!!

    # Skriv oppf�lgningssp�rsm�let sammen med svaret fra brukeren
    # og et sp�rsm�lstegn ved hjelp av funksjonen print_sentence
    # MANGLER KODE HER!!!

    # Sp�r brukeren om et svar med teksten "Svar: " uten � lagre
    # resultatet til variabel
    # MANGLER KODE HER!!!

    # Plukk ut en tilfeldig respons fra lista responses 
    # ved hjelp av funksjonen pick_sentence
    # MANGLER KODE HER!!!

    # Skriv reponsen sammen med navnet til brukeren
    # og et punktum (".") ved hjelp av funksjonen print_sentence
    # MANGLER KODE HER!!!

main()
