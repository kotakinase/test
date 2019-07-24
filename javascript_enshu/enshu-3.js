function menseki(en,pai=3.14){
    return(en*en*pai)
}

document.write(menseki(5)+"<br>");
document.write(menseki(7)+"<br>");
document.write(menseki(10)+"<br>");

/* 問１*/
document.write("<br>次の問<br>");
/* 問２*/

function ryokin(adnum,chnum,adfee=500,chfee=200){
    return(adnum*adfee+chnum*chfee+"円です。"+"<br>")
}

document.write(ryokin(2,4));
document.write(ryokin(1,5));
document.write(ryokin(3,7));

