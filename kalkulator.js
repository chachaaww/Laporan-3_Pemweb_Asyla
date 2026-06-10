window.onload = function(){
    alert("Selamat Datang di Kalkulator Nilai Semester!");
};

function hitungNilaiAkhir(tugas, uts, uas){

    return (tugas*0.3)+(uts*0.3)+(uas*0.4);
}

function tentukanGrade(nilai){

    if(nilai >= 80){
        return "A";
    }
    else if(nilai >= 70){
        return "B";
    }
    else if(nilai >= 60){
        return "C";
    }
    else if(nilai >= 50){
        return "D";
    }
    else{
        return "E";
    }
}

function validasiInput(nilai,nama){

    if(nilai === ""){
        return nama + " tidak boleh kosong";
    }

    if(isNaN(nilai)){
        return nama + " harus angka";
    }

    if(nilai < 0 || nilai > 100){
        return nama + " harus 0-100";
    }

    return null;
}

document.getElementById("btnHitung")
.addEventListener("click", function(){

    let tugas=document.getElementById("tugas").value;
    let uts=document.getElementById("uts").value;
    let uas=document.getElementById("uas").value;

    console.log(tugas,uts,uas);

    let error=
        validasiInput(tugas,"Nilai Tugas") ||
        validasiInput(uts,"Nilai UTS") ||
        validasiInput(uas,"Nilai UAS");

    if(error){
        document.getElementById("error").innerText=error;
        return;
    }

    let nilai=
        hitungNilaiAkhir(
            Number(tugas),
            Number(uts),
            Number(uas)
        );

    let grade=tentukanGrade(nilai);

    console.log(nilai,grade);

    document.getElementById("hasil").style.display="block";

    document.getElementById("nilaiAkhir")
        .innerText="Nilai Akhir : "+nilai.toFixed(2);

    let gradeElement=
        document.getElementById("grade");

    gradeElement.innerText="Grade : "+grade;

    gradeElement.className=
        "grade-"+grade;
});