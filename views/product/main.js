var btn=document.getElementById("button5");
var btn2= document.createElement("Button");
var txt= document.createTextNode("WHITE MODE");
btn2.appendChild(txt);

var lin=document.getElementById("link");
var img=document.querySelectorAll("img5");
var p1=document.getElementById("p1");
var p2=document.getElementById("p2");
var p3=document.getElementById("p3");
var p4=document.getElementById("p4");
var p5=document.getElementById("p5");
var p6=document.getElementById("p6");
var p7=document.getElementById("p7");
var p8=document.getElementById("p8");
var rs=document.getElementById("rs");
var img1=document.getElementById("img1")
var img2=document.getElementById("img2")
var img3=document.getElementById("img3")
var img4=document.getElementById("img4")
var img5=document.getElementById("img5")
var img6=document.getElementById("img6")
var img7=document.getElementById("img7")
var img8=document.getElementById("img8")
var img9=document.getElementById("img9")
var img10=document.getElementById("img10")
var img11=document.getElementById("img11")
var img12=document.getElementById("img12")
var img13=document.getElementById("img13")
var img14=document.getElementById("img14")
var img15=document.getElementById("img15")
var img16=document.getElementById("img16")
var byewith=document.getElementById("byewith")
var abdo=document.getElementById("abdo")
var column1=document.getElementById("column1")
var column2=document.getElementById("column2")
var column3=document.getElementById("column3")
var column4=document.getElementById("column4")

localStorage.setItem("color1","rgb(50,50,50)");
localStorage.setItem("color2","rgb(244,247,254)");
function over(){

    btn.style.width="90px";
}
function leave(){

    btn.style.width="90px";
}
btn.addEventListener("mouseenter",over);
btn.addEventListener("mouseleave",leave);

btn.onclick=function(){
    
    document.body.style.background=localStorage.getItem("color1");
    btn.style.display="none";
    document.body.appendChild(btn2);
    btn2.style.position="relative";
    btn2.style.left="91%";
    btn2.style.bottom="2170px";
    btn2.style.width="90px";
    btn2.style.borderRadius="50%";
    btn2.style.padding="20px";
    btn2.style.textAlign= "center";
    btn2.style.textDecoration= "none";
    btn2.style.display= "inline-block";
    btn2.style.fontSize= "16px";
    btn2.style.margin= "4px 2px";
    s1.style.color="white";
    s2.style.color="white";
    s3.style.color="white";
    s4.style.color="white";
    s5.style.color="white";
    s6.style.color="white";
    p1.style.color="#118AB2";
    p2.style.color="#118AB2";
    p3.style.color="#118AB2";
    p4.style.color="white";
    p5.style.color="white";
    p6.style.color="white";
    p7.style.color="white";
    p8.style.color="white";
    rs.style.backgroundColor="rgb(250,250,250)";
    rs.style.position="relative";
    rs.style.bottom="900px";
    /*img5.style.border="1px"*/
    img5.style.backgroundColor="transparent";
    img6.style.backgroundColor="transparent";
    img7.style.backgroundColor="transparent";
    img8.style.backgroundColor="transparent";
    img9.style.backgroundColor="transparent";
    img10.style.backgroundColor="transparent";
    img11.style.backgroundColor="transparent";
    img12.style.backgroundColor="transparent";
    img13.style.backgroundColor="transparent";
    img14.style.backgroundColor="transparent";
    img15.style.backgroundColor="transparent";
    img16.style.backgroundColor="transparent";
    abdo.style.position="relative";
    abdo.style.bottom="5600px";
    column1.style.backgroundColor="white";
    column2.style.backgroundColor="white";
    column3.style.backgroundColor="white";
    column4.style.backgroundColor="white";
    byewith.style.position="relative";
    byewith.style.bottom="770px";


}

btn2.onclick=function(){
    btn2.style.display="none";
    document.body.style.backgroundColor=localStorage.getItem("color2");
    btn.style.display="inline-block";
    s1.style.color="black";
    s2.style.color="black";
    s3.style.color="black";
    s4.style.color="black";
    s5.style.color="black";
    s6.style.color="black";
    p1.style.color="black";
    p2.style.color="black";
    p3.style.color="black";
    p4.style.color="black";
    p5.style.color="black";
    p6.style.color="black";
    p7.style.color="black";
    p8.style.color="black";
    rs.style.position="relative";
    rs.style.bottom="1000px";
    rs.style.backgroundColor="transparent";
    img5.style.backgroundColor="white";
    img6.style.backgroundColor="white";
    img7.style.backgroundColor="white";
    img8.style.backgroundColor="white";
    img9.style.backgroundColor="white";
    img10.style.backgroundColor="white";
    img11.style.backgroundColor="white";
    img12.style.backgroundColor="white";
    img13.style.backgroundColor="white";
    img14.style.backgroundColor="white";
    img15.style.backgroundColor="white";
    img16.style.backgroundColor="white";
    column1.style.backgroundColor="transparent";
    column2.style.backgroundColor="transparent";
    column3.style.backgroundColor="transparent";
    column4.style.backgroundColor="transparent";
    abdo.style.position="relative";
    abdo.style.bottom="5600px";
    byewith.style.position="relative";
    byewith.style.bottom="870px";
}
var send=document.getElementById("se");
var inp=document.getElementById("quantity");
var s1= document.getElementById("s1");
var s2= document.getElementById("s2");
var s3= document.getElementById("s3");
var s4= document.getElementById("s4");
var s5= document.getElementById("s5");
/*                                                                                   
function ov1(){
    s1.style.color="red";
}

function ov2(){
    s2.style.color="red";
}

function ov3(){
    s3.style.color="red";
}

function ov4(){
    s4.style.color="red";
}

function ov5(){
    s5.style.color="red";
}

function le1(){
    s1.style.color="black";
}

function le2(){
    s2.style.color="black";
}

function le3(){
    s3.style.color="black";
}

function le4(){
    s4.style.color="black";
}

function le5(){
    s5.style.color="black";
}

s1.addEventListener("mouseenter",ov1);
s1.addEventListener("mouseleave",le1);

s2.addEventListener("mouseenter",ov2);
s2.addEventListener("mouseleave",le2);

s3.addEventListener("mouseenter",ov3);
s3.addEventListener("mouseleave",le3);

s4.addEventListener("mouseenter",ov4);
s4.addEventListener("mouseleave",le4);

s5.addEventListener("mouseenter",ov5);
s5.addEventListener("mouseleave",le5);
*/                                                                                      
s1.onclick=function(){
    s1.style.color="green";
}

s2.onclick=function(){
    s1.style.color="green";
    s2.style.color="green";
}

s3.onclick=function(){
        s1.style.color="green";
        s2.style.color="green";
        s3.style.color="green";
}

s4.onclick=function(){
    s1.style.color="green";
    s2.style.color="green";
    s3.style.color="green";
    s4.style.color="green";
}

s5.onclick=function(){
    s1.style.color="green";
    s2.style.color="green";
    s3.style.color="green";
    s4.style.color="green";
    s5.style.color="green";

}

/*function ov1(){
    s1.style.color="red";
}

function ov2(){
    s2.style.color="red";
}

function ov3(){
    s3.style.color="red";
}

function ov4(){
    s4.style.color="red";
}

function ov5(){
    s5.style.color="red";
}

function le1(){
    s1.style.color="black";
}

function le2(){
    s2.style.color="black";
}

function le3(){
    s3.style.color="black";
}

function le4(){
    s4.style.color="black";
}

function le5(){
    s5.style.color="black";
}

s1.addEventListener("mouseenter",ov1);
s1.addEventListener("mouseleave",le1);

s2.addEventListener("mouseenter",ov2);
s2.addEventListener("mouseleave",le2);

s3.addEventListener("mouseenter",ov3);
s3.addEventListener("mouseleave",le3);

s4.addEventListener("mouseenter",ov4);
s4.addEventListener("mouseleave",le4);

s5.addEventListener("mouseenter",ov5);
s5.addEventListener("mouseleave",le5);
*/
/*s1.onmouseenter=function(){
    s1.style.color="red";
    s1.onclick=function(){
        s1.style.color="red";
      
    }
}
s1.onmouseleave=function(){
    s1.style.color="black";

}*/

function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}