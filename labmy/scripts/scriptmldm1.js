var mass_1, mass_2, mass_3;
var error_text;

function initziate(){
    var a =  document.getElementById('mass1');
    var b =  document.getElementById('mass2');
    mass_1=checkError(a.value);
    mass_2=checkError(b.value);
    if(!mass_1){
        alert(error_text);
    }
    if(!mass_2){
        alert(error_text);
    }
    return 0;
}

function checkError(str){
    var mass = false;
    if(str.length>0) {
        mass = str.split(' ');
        for(let i=0;i<mass.length;i++){
            if(!((mass[i][0]>=0 && mass[i][0]<=9) && mass[i][1]%2==0 && (mass[i][2]>='A' && mass[i][2]<='z')&& (mass[i][3]>='A' && mass[i][3]<='z')&& mass[i].length==4))
            {
                error_text='Ошибка в вводе: '+mass[i]+'. Правильный ввод cibb';
                mass=false;
                break;
            }
        }
    }
    else{
        error_text='Пустой ввод';
    }
    return mass;
}

function unity(){
    initziate();
    var d = true;
    let result = "";
    result = mass_2.join(',');
    for (let i = 0; i<mass_1.length; i++){
        for (let t = 0; t<mass_2.length; t++){
            if(mass_1[i] == mass_2[t]){
                var d =false;
            }           
        }
        if(d==true){
            result += ',' + mass_1[i];
        }
        d = true;
    }
    document.getElementById("Out").innerText='Объединенить: ' + result;
}
function denity(){
    initziate();
    let result = "";
    for (let i = 0; i<mass_1.length; i++){
        for (let t = 0; t<mass_2.length; t++){
            if(mass_1[i] == mass_2[t]){
                result += mass_2[t] + ',';
            }
        }
    }
    document.getElementById("Out").innerText='Пересечь: ' + result;
}
function plusityAB(){
    initziate();
    let result = "";
    var d = true;
    for (let i = 0; i<mass_1.length; i++){
        for (let t = 0; t<mass_2.length; t++){
            if(mass_1[i] == mass_2[t]){
                d = false;
            }
        }
        if (d == true){
            result += mass_1[i] + ',';
        }
        d = true;
    }
    document.getElementById("Out").innerText='Дополнить А к B: ' + result;
}
function plusityBA(){
    initziate();
    let result = "";
    var d = true;
    for (let i = 0; i<mass_2.length; i++){
        for (let t = 0; t<mass_1.length; t++){
            if(mass_1[t] == mass_2[i]){
                d = false;
            }
        }
        if (d == true){
            result += mass_2[i] + ',';
        }
        d = true;
    }
    document.getElementById("Out").innerText='Дополнить B к A: ' + result;
}
function symMinus(){
    initziate();
    var d = true;
    let result = "";
    for (let i = 0; i<mass_1.length; i++){
        for (let t = 0; t<mass_2.length; t++){
            if(mass_1[i] == mass_2[t]){
                d = false;
            }
        }
        if (d == true){
            result += mass_1[i] + ',';
        }
        d = true;
    }
    for (let i = 0; i<mass_2.length; i++){
        for (let t = 0; t<mass_1.length; t++){
            if(mass_1[t] == mass_2[i]){
                d = false;
            }
        }
        if (d == true){
            result += mass_2[i] + ',';
        }
        d = true;
    }
    document.getElementById("Out").innerText='Симметричная разность: ' + result;
}