/* 問１*/

for(var i=1; i<=5; i++){
    document.write("★");
}

/* 問１*/
document.write("<br><br>次の問<br>");
/* 問２*/

for(var a=1; a<=2; a++){
    for(var b=1; b<=3; b++){
        document.write("★");}
        document.write("<br>");
}

/* 問２*/
document.write("<br>次の問<br>");
/* 問３*/

for(var a=1; a<=2; a++){
    for(var b=1; b<=5; b++){
        document.write("☆");}
        document.write("<br>");
}

/* 問３*/
document.write("<br>次の問<br>");
/* 問４*/

for(var a=1; a<=4; a++){
    for(var b=1; b<=5; b++){
        document.write("★");}
        document.write("<br>");
}

/* 問４*/
document.write("<br>次の問<br>");
/* 問５*/

for(var a=1; a<=4; a++){
    for(var b=1; b<=3; b++){
        document.write("★");}
        document.write("<br>");
}

/* 問５*/
document.write("<br>次の問<br>");
/* 問６*/

for(var a=1; a<=3; a++){
    for(var b=1; b<=3; b++){
        if(b%2==0){
        document.write("☆");
        }else{
            document.write("★");
        }}
        document.write("<br>");
}

/* 問６*/
document.write("<br>次の問<br>");
/* 問７*/

for(var a=1; a<=4; a++){
    for(var b=1; b<=5; b++){
        if(b%2==0){
        document.write("☆");
        }else{
            document.write("★");
        }}
        document.write("<br>");
}

/* 問７*/
document.write("<br>次の問<br>");
/* 問８*/

for(var a=1; a<=5; a++){
    for(var b=1; b<=a; b++){
            document.write("★");
        }
        document.write("<br>");
}
