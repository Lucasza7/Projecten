# Initialiseren van stemtellingen voor Frederiek en Tim
stemmen_frederiek = 0
stemmen_tim = 0

# Stemproces
while True:
    stem = input("Op wie wil je stemmen? (Typ 'Frederiek' of 'Tim', of typ 'UITSLAG' om te stoppen): ").capitalize()
    
    # Controleren of de gebruiker gestopt is met stemmen
    if stem == 'Uitslag':
        break
    
    # Controleren op wie gestemd is en stemtelling bijwerken
    if stem == 'Frederiek':
        stemmen_frederiek += 1
    elif stem == 'Tim':
        stemmen_tim += 1
    else:
        print("Ongeldige invoer. Typ 'Frederiek', 'Tim' of 'UITSLAG'.")

# Bepalen van de winnaar en weergeven van de uitslag
if stemmen_frederiek > stemmen_tim:
    print("Frederiek heeft gewonnen!")
elif stemmen_tim > stemmen_frederiek:
    print("Tim heeft gewonnen!")
else:
    print("Het is een gelijkspel!")
