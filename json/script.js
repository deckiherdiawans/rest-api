// let student = {
//     name: "Decki Herdiawan Soepandi",
//     nrp: "160323012",
//     email: "160323012@fellow.lpkia.ac.id"
// }
// console.log(JSON.stringify(student));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let student = JSON.parse(this.responseText);
//         console.log(student);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function (data) {
    console.log(data);
});