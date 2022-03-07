function fokus1() {
    let frm = document.getElementById("formulir");
    frm.a1.value = "";
}
function fokus2() {
    let frm = document.getElementById("formulir");
    frm.a2.value = "" ;
}
function fokusAll() {
    let frm = document.getElementById("formulir");
    frm.a1.value = "";
    frm.a2.value = "";
    frm.hasil.value = "";
}

function hitung() {
    let frm = document.getElementById("formulir");
    let a1 = frm.a1.value;
    let a2 = frm.a2.value;
    let hasil = frm.hasil.value;
    //jika inputan salah
    if (isNaN(a1) || a1 == '') {
        alert("Harap Isi Data Berupa Angka");
    } else if (isNaN(a2) || a2 == '') {
        alert("Harap Isi Data Berupa Angka");
    } else {
        //jika inputan benar
        // let hasil = harga * jumlah * valas; //perhitungan
         frm.hasil.value = hitung; //penempatan hasil di element form hasil
    }
}

function tambah() {
    let frm = document.getElementById("formulir");
    let a1=parseFloat(frm.a1.value);
    let a2=parseFloat(frm.a2.value);
    let hasil= a1 + a2;
    frm.hasil.value=hasil;
   }
   function kurang(){
    let frm = document.getElementById("formulir");
    let a1=parseFloat(frm.a1.value);
    let a2=parseFloat(frm.a2.value);
    let hasil= a1 - a2;
    frm.hasil.value=hasil;
   }
   function kali(){
    let frm = document.getElementById("formulir");
    let a1=parseFloat(frm.a1.value);
    let a2=parseFloat(frm.a2.value);
    let hasil= a1*a2;
    frm.hasil.value=hasil;
   }
   function bagi(){
    let frm = document.getElementById("formulir");
    let a1=parseFloat(frm.a1.value);
    let a2=parseFloat(frm.a2.value);
    let hasil= a1/a2;
    frm.hasil.value=hasil;
   }
   function pangkat() {
    let frm = document.getElementById("formulir");
    let a1=parseFloat(frm.a1.value);
    let a2=parseFloat(frm.a2.value);
    let hasil= Math.pow(a1,a2);
    frm.hasil.value=hasil;
    // let frm = document.getElementById("formulir").innerHTML = Math.pow(a1,a2);
    // frm.hasil.value=hasil;
}
   