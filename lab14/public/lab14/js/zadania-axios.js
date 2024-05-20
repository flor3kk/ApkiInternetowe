const url = `http://localhost:8000/api/countries`;

// ------------- Zadanie 14.21 (16) -------------

console.log('Przed 14.21')

axios.get(url)
    .then(response => console.log(response.data))
    .catch(error => console.log(error.message));

console.log('Po 14.21')

// ------------- Zadanie 14.21 (17)  -------------

// const id = 1;

// Wykonanie zadania

// ------------- Zadanie 14.21 (18) -------------

// const litwa = {
//     name: "Litwa",
//     code: "LT",
//     currency: "euro",
//     area: 49035,
//     language: "litewski"
// };

// Wykonanie zadania

// ------------- Zadanie 14.21 (19) -------------

// const id = 6;

// const australia = {
//     name: "Australia",
//     code: "AU",
//     currency: "dolar australijski",
//     area: 7686850,
//     language: "angielski"
// };

// Wykonanie zadania

// ------------- Zadanie 14.21 (20) -------------

// const id = 8;

// Wykonanie zadania
