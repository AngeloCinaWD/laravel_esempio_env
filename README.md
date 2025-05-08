Per utilizzare più file .env:

nel .env lasciare la variabile APP_ENV e definire il valore della variabile APP_ENV definita nel file .env che si vuole utilizzare.

Esempio:

file .env.nomequalsiasi, all'interno di questo definisco APP_ENV=local,
nel file .env definisco APP_ENV=local, verrà utilizzato questo file .env.local.
