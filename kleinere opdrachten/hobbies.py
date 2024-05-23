# Vraag de gebruiker drie keer om een hobby en voeg deze toe aan een lijst
hobbies = []  # Maak een lege lijst om de hobby's op te slaan
for _ in range(3):  # Herhaal drie keer
    hobby = input("Voer een hobby in: ")  # Vraag de gebruiker om een hobby
    hobbies.append(hobby)  # Voeg de hobby toe aan de lijst

# Print de lijst met hobby's
print("Je ingevoerde hobby's zijn:")
for hobby in hobbies:  # Itereer door de lijst met hobby's
    print(hobby)  # Print elke hobby

#question = "wat is jou hobby?"
#a1 = input(question)
#a2 = input(question)
#a3 = input(question)
#hobbies = [a1 + a2 + a3]
#print(hobbies)