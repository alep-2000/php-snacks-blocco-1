SNACK 1
PROBLEMA: Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

SOLUZIONE:
1 - Creare array con le squadre e i il punteggio;
2 - Creare ciclo for;
3 - Stampare a schermo l'array;

SNACK 2 
PROBLEMA: Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

SOLUZIONE:
1 - Creare un form con 3 input a cui passiamo le variabili name, mail e age;
2 - Dichiarare le tre variabili;
3 - Fare un controllo;
    3.1 - ? SE name è più lungo di 3 caratteri setto a true;
    3.2 - : ALTRIMENTI false;
4 - Fare un secondo controllo;
    4.1 - ? SE mail contiene un punto e una chicciola setto a true;
    4.2 - : ALTRIMENTI false;
5 - Fare un terzo controllo;
    5.1 - ? SE age è un numero setto a true;
    5.2 - : ALTRIMENTI false;
6 - Racchiudo i controlli in un altro controllo;
    6.1 - ? SE tutti i controlli sono true, stampo accesso riuscito;
    6.2 - : ALTRIMENTI stampo accesso negato;

SNACK 3
PROBLEMA: Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

SOLUZIONE: 
1 - Creare un array con le date e ogni data a sua volta avrà dei post;
2 - Creare un ciclo foreach;
3 - Stampare a schermo;