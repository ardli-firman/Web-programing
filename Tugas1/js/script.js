let home = document.getElementById('home');
let suhu = document.getElementById('suhu');
let diskon = document.getElementById('diskon');
let tanggal = document.getElementById('tanggal');


home.addEventListener('click', function () {
    window.location.href = 'index.html';
});
suhu.addEventListener('click', function () {
    document.getElementById('konten').innerHTML = '<object type="text/html" data="suhu.html" ></object>';
});
diskon.addEventListener('click', function () {
    // test();
    // this.className += 'active';
    document.getElementById('konten').innerHTML = '<object type="text/html" data="diskon.html" ></object>';
});
tanggal.addEventListener('click', function () {

    // this.className += 'active';
    document.getElementById('konten').innerHTML = '<object type="text/html" data="tanggal.html" ></object>';
    // test();
});

// function test() {
//     let t = document.getElementsByTagName('a');
//     for (const key in t) {
//         if (t.hasOwnProperty(key)) {
//             const element = t[key];
//             if (element.hasAttributes('class')) {
//                 console.log(element.classList.remove("active"));
//             }

//         }
//     }
// }