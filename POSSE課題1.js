'use strict;'

// 選択肢の配列と選択肢群

let No1Selection = ['たかなわ','たかわ','こうわ']
let No2Selection = ['かめいど','かめど','かめと']
let No3Selection = ['こうじまち','かゆまち','おかとまち']
let No4Selection = ['おなりもん','おかどもん','ごせいもん']
let No5Selection = ['とどりき','たたら','たたりき']
let No6Selection = ['しゃくじい','せきこうい','いじい']
let No7Selection = ['ぞうしき','ざっしき','ざっしょく']
let No8Selection = ['おかちまち','みとちょう','ごしろちょう']
let No9Selection = ['ししぼね','ろっこつ','しこね']
let No10Selection= ['こぐれ','こばく','こしゃく']
let Selections   = [No1Selection,No2Selection,No3Selection,No4Selection,No5Selection,
                    No6Selection,No7Selection,No8Selection,No9Selection,No10Selection]

    // 問１の選択肢の名称
    for(let i=0; i<No1Selection.length; i++){
        target1 = document.getElementById("takanawa"+i)
        target1.innerHTML = No1Selection[i]
    }

    // 問２の選択肢の名称
    for(let i=0; i<No2Selection.length; i++){
        target2 = document.getElementById("kameido"+i)
        target2.innerHTML = No2Selection[i]
    }

    // target1 = document.getElementById("1-1");
    // target1.innerHTML = Selections[0][0];

    // target2 = document.getElementById("1-2");
    // target2.innerHTML = Selections[0][1];

    // target3 = document.getElementById("1-3");
    // target3.innerHTML = Selections[0][2];

    test3 = document.getElementById("No1CommentTrue")
    test3.innerHTML ="正解は「"+No1Selection[0]+"」です！"

    test4 = document.getElementById("No1CommentFalse")
    test4.innerHTML ="正解は「"+No1Selection[0]+"」です！"

    test5 = document.getElementById("No2CommentTrue")
    test5.innerHTML ="正解は「"+No2Selection[0]+"」です！"

    test6 = document.getElementById("No2CommentFalse")
    test6.innerHTML ="正解は「"+No2Selection[0]+"」です！"

    test7 = document.getElementById("No3CommentTrue")
    test7.innerHTML ="正解は「"+No3Selection[0]+"」です！"

    test8 = document.getElementById("No3CommentFalse")
    test8.innerHTML ="正解は「"+No3Selection[0]+"」です！"

    test9 = document.getElementById("No4CommentTrue")
    test9.innerHTML ="正解は「"+No4Selection[0]+"」です！"

    test10 = document.getElementById("No4CommentFalse")
    test10.innerHTML ="正解は「"+No4Selection[0]+"」です！"

    test11 = document.getElementById("No5CommentTrue")
    test11.innerHTML ="正解は「"+No5Selection[0]+"」です！"

    test12 = document.getElementById("No5CommentFalse")
    test12.innerHTML ="正解は「"+No5Selection[0]+"」です！"

    test13 = document.getElementById("No6CommentTrue")
    test13.innerHTML ="正解は「"+No6Selection[0]+"」です！"

    test14 = document.getElementById("No6CommentFalse")
    test14.innerHTML ="正解は「"+No6Selection[0]+"」です！"

    test15 = document.getElementById("No7CommentTrue")
    test15.innerHTML ="正解は「"+No7Selection[0]+"」です！"

    test16 = document.getElementById("No7CommentFalse")
    test16.innerHTML ="正解は「"+No7Selection[0]+"」です！"

    test17 = document.getElementById("No8CommentTrue")
    test17.innerHTML ="正解は「"+No8Selection[0]+"」です！"

    test18 = document.getElementById("No8CommentFalse")
    test18.innerHTML ="正解は「"+No8Selection[0]+"」です！"

    test19 = document.getElementById("No9CommentTrue")
    test19.innerHTML ="正解は「"+No9Selection[0]+"」です！"

    test20 = document.getElementById("No9CommentFalse")
    test20.innerHTML ="正解は「"+No9Selection[0]+"」です！"

    test21 = document.getElementById("No10CommentTrue")
    test21.innerHTML ="正解は「"+No10Selection[0]+"」です！"

    test22 = document.getElementById("No10CommentFalse")
    test22.innerHTML ="正解は「"+No10Selection[0]+"」です！"







// function judgment(Selections){
//     for(let i=0; i<9; i++){if(Selections[i][0])
//     {
//         a.className = 'correct';
//         d.className = 'comment'
// }
//     else  
//     {
//         b.className = 'incorrect'
//         e.className = 'comment'
//         };
//     }
// }

// const button = document.getElementsByTagName('button');


function No1Judgment0(){
    if(No1Selection[0]=== document.getElementsByTagName("button")[0].textContent){
    No1Answer0.className = 'correct';
    No1Answer1.className = 'after';
    No1Answer2.className = 'after';
    No1CommentBlue.className = 'comment';
    }
    else{
    No1Answer0.className = 'incorrect';
    No1CommentRed.className = 'comment';
}
}

function No1Judgment1(){
    if(No1Selection[0]=== document.getElementsByTagName("button")[1].textContent){
    No1Answer1.className = 'correct';
    No1CommentBlue.className = 'comment';
    }
    else{
    No1Answer0.className = 'correct';
    No1Answer1.className = 'incorrect';
    No1Answer2.className = 'after';
    No1CommentRed.className = 'comment';
}
}

function No1Judgment2(){
    if(No1Selection[0]=== document.getElementsByTagName("button")[2].textContent){
    No1Answer2.className = 'correct';
    No1CommentBlue.className = 'comment';
    }
    else{
    No1Answer0.className = 'correct';
    No1Answer1.className = 'after';
    No1Answer2.className = 'incorrect';
    No1CommentRed.className = 'comment';
}
}

function No2Judgment0(){
    if(No2Selection[0]=== document.getElementsByTagName("button")[3].textContent){
    No2Answer0.className = 'correct';
    No2Answer1.className = 'after';
    No2Answer2.className = 'after';
    No2CommentBlue.className = 'comment';
    }
    else{
    No2Answer0.className = 'incorrect';
    No2CommentRed.className = 'comment';
}
}

function No2Judgment1(){
    if(No2Selection[0]=== document.getElementsByTagName("button")[4].textContent){
    No2Answer1.className = 'correct';
    No2CommentBlue.className = 'comment';
    }
    else{
    No2Answer0.className = 'correct';
    No2Answer1.className = 'incorrect';
    No2Answer2.className = 'after';
    No2CommentRed.className = 'comment';
}
}

function No2Judgment2(){
    if(No2Selection[0]=== document.getElementsByTagName("button")[5].textContent){
    No2Answer2.className = 'correct';
    No2CommentBlue.className = 'comment';
    }
    else{
    No2Answer0.className = 'correct';
    No2Answer1.className = 'after';
    No2Answer2.className = 'incorrect';
    No2CommentRed.className = 'comment';
}
}

function No3Judgment0(){
    if(No3Selection[0]=== document.getElementsByTagName("button")[6].textContent){
    No3Answer0.className = 'correct';
    No3Answer1.className = 'after';
    No3Answer2.className = 'after';
    No3CommentBlue.className = 'comment';
    }
    else{
    No3Answer0.className = 'incorrect';
    No3CommentRed.className = 'comment';
}
}

function No3Judgment1(){
    if(No3Selection[0]=== document.getElementsByTagName("button")[7].textContent){
    No3Answer1.className = 'correct';
    No3CommentBlue.className = 'comment';
    }
    else{
    No3Answer0.className = 'correct';
    No3Answer1.className = 'incorrect';
    No3Answer2.className = 'after';
    No3CommentRed.className = 'comment';
}
}

function No3Judgment2(){
    if(No3Selection[0]=== document.getElementsByTagName("button")[8].textContent){
    No3Answer2.className = 'correct';
    No3CommentBlue.className = 'comment';
    }
    else{
    No3Answer0.className = 'correct';
    No3Answer1.className = 'after';
    No3Answer2.className = 'incorrect';
    No3CommentRed.className = 'comment';
}
}

function No4Judgment0(){
    if(No4Selection[0]=== document.getElementsByTagName("button")[9].textContent){
    No4Answer0.className = 'correct';
    No4Answer1.className = 'after';
    No4Answer2.className = 'after';
    No4CommentBlue.className = 'comment';
    }
    else{
    No4Answer0.className = 'incorrect';
    No4CommentRed.className = 'comment';
}
}

function No4Judgment1(){
    if(No4Selection[0]=== document.getElementsByTagName("button")[10].textContent){
    No4Answer1.className = 'correct';
    No4CommentBlue.className = 'comment';
    }
    else{
    No4Answer0.className = 'correct';
    No4Answer1.className = 'incorrect';
    No4Answer2.className = 'after';
    No4CommentRed.className = 'comment';
}
}

function No4Judgment2(){
    if(No4Selection[0]=== document.getElementsByTagName("button")[11].textContent){
    No4Answer2.className = 'correct';
    No4CommentBlue.className = 'comment';
    }
    else{
    No4Answer0.className = 'correct';
    No4Answer1.className = 'after';
    No4Answer2.className = 'incorrect';
    No4CommentRed.className = 'comment';
}
}

function No5Judgment0(){
    if(No5Selection[0]=== document.getElementsByTagName("button")[12].textContent){
    No5Answer0.className = 'correct';
    No5Answer1.className = 'after';
    No5Answer2.className = 'after';
    No5CommentBlue.className = 'comment';
    }
    else{
    No5Answer0.className = 'incorrect';
    No5CommentRed.className = 'comment';
}
}

function No5Judgment1(){
    if(No5Selection[0]=== document.getElementsByTagName("button")[13].textContent){
    No5Answer1.className = 'correct';
    No5CommentBlue.className = 'comment';
    }
    else{
    No5Answer0.className = 'correct';
    No5Answer1.className = 'incorrect';
    No5Answer2.className = 'after';
    No5CommentRed.className = 'comment';
}
}

function No5Judgment2(){
    if(No5Selection[0]=== document.getElementsByTagName("button")[14].textContent){
    No5Answer2.className = 'correct';
    No5CommentBlue.className = 'comment';
    }
    else{
    No5Answer0.className = 'correct';
    No5Answer1.className = 'after';
    No5Answer2.className = 'incorrect';
    No5CommentRed.className = 'comment';
}
}

function No6Judgment0(){
    if(No6Selection[0]=== document.getElementsByTagName("button")[15].textContent){
    No6Answer0.className = 'correct';
    No6Answer1.className = 'after';
    No6Answer2.className = 'after';
    No6CommentBlue.className = 'comment';
    }
    else{
    No6Answer0.className = 'incorrect';
    No6CommentRed.className = 'comment';
}
}

function No6Judgment1(){
    if(No6Selection[0]=== document.getElementsByTagName("button")[16].textContent){
    No6Answer1.className = 'correct';
    No6CommentBlue.className = 'comment';
    }
    else{
    No6Answer0.className = 'correct';
    No6Answer1.className = 'incorrect';
    No6Answer2.className = 'after';
    No6CommentRed.className = 'comment';
}
}

function No6Judgment2(){
    if(No6Selection[0]=== document.getElementsByTagName("button")[17].textContent){
    No6Answer2.className = 'correct';
    No6CommentBlue.className = 'comment';
    }
    else{
    No6Answer0.className = 'correct';
    No6Answer1.className = 'after';
    No6Answer2.className = 'incorrect';
    No6CommentRed.className = 'comment';
}
}

function No7Judgment0(){
    if(No7Selection[0]=== document.getElementsByTagName("button")[18].textContent){
    No7Answer0.className = 'correct';
    No7Answer1.className = 'after';
    No7Answer2.className = 'after';
    No7CommentBlue.className = 'comment';
    }
    else{
    No7Answer0.className = 'incorrect';
    No7CommentRed.className = 'comment';
}
}

function No7Judgment1(){
    if(No7Selection[0]=== document.getElementsByTagName("button")[19].textContent){
    No7Answer1.className = 'correct';
    No7CommentBlue.className = 'comment';
    }
    else{
    No7Answer0.className = 'correct';
    No7Answer1.className = 'incorrect';
    No7Answer2.className = 'after';
    No7CommentRed.className = 'comment';
}
}

function No7Judgment2(){
    if(No7Selection[0]=== document.getElementsByTagName("button")[20].textContent){
    No7Answer2.className = 'correct';
    No7CommentBlue.className = 'comment';
    }
    else{
    No7Answer0.className = 'correct';
    No7Answer1.className = 'after';
    No7Answer2.className = 'incorrect';
    No7CommentRed.className = 'comment';
}
}

function No8Judgment0(){
    if(No8Selection[0]=== document.getElementsByTagName("button")[21].textContent){
    No8Answer0.className = 'correct';
    No8Answer1.className = 'after';
    No8Answer2.className = 'after';
    No8CommentBlue.className = 'comment';
    }
    else{
    No8Answer0.className = 'incorrect';
    No8CommentRed.className = 'comment';
}
}

function No8Judgment1(){
    if(No8Selection[0]=== document.getElementsByTagName("button")[22].textContent){
    No8Answer1.className = 'correct';
    No8CommentBlue.className = 'comment';
    }
    else{
    No8Answer0.className = 'correct';
    No8Answer1.className = 'incorrect';
    No8Answer2.className = 'after';
    No8CommentRed.className = 'comment';
}
}

function No8Judgment2(){
    if(No8Selection[0]=== document.getElementsByTagName("button")[23].textContent){
    No8Answer2.className = 'correct';
    No8CommentBlue.className = 'comment';
    }
    else{
    No8Answer0.className = 'correct';
    No8Answer1.className = 'after';
    No8Answer2.className = 'incorrect';
    No8CommentRed.className = 'comment';
}
}

function No9Judgment0(){
    if(No9Selection[0]=== document.getElementsByTagName("button")[24].textContent){
    No9Answer0.className = 'correct';
    No9Answer1.className = 'after';
    No9Answer2.className = 'after';
    No9CommentBlue.className = 'comment';
    }
    else{
    No9Answer0.className = 'incorrect';
    No9CommentRed.className = 'comment';
}
}

function No9Judgment1(){
    if(No9Selection[0]=== document.getElementsByTagName("button")[25].textContent){
    No9Answer1.className = 'correct';
    No9CommentBlue.className = 'comment';
    }
    else{
    No9Answer0.className = 'correct';
    No9Answer1.className = 'incorrect';
    No9Answer2.className = 'after';
    No9CommentRed.className = 'comment';
}
}

function No9Judgment2(){
    if(No9Selection[0]=== document.getElementsByTagName("button")[26].textContent){
    No9Answer2.className = 'correct';
    No9CommentBlue.className = 'comment';
    }
    else{
    No9Answer0.className = 'correct';
    No9Answer1.className = 'after';
    No9Answer2.className = 'incorrect';
    No9CommentRed.className = 'comment';
}
}

function No10Judgment0(){
    if(No10Selection[0]=== document.getElementsByTagName("button")[27].textContent){
    No10Answer0.className = 'correct';
    No10Answer1.className = 'after';
    No10Answer2.className = 'after';
    No10CommentBlue.className = 'comment';
    }
    else{
    No10Answer0.className = 'incorrect';
    No10CommentRed.className = 'comment';
}
}

function No10Judgment1(){
    if(No10Selection[0]=== document.getElementsByTagName("button")[28].textContent){
    No10Answer1.className = 'correct';
    No10CommentBlue.className = 'comment';
    }
    else{
    No10Answer0.className = 'correct';
    No10Answer1.className = 'incorrect';
    No10Answer2.className = 'after';
    No10CommentRed.className = 'comment';
}
}

function No10Judgment2(){
    if(No10Selection[0]=== document.getElementsByTagName("button")[29].textContent){
    No10Answer2.className = 'correct';
    No10CommentBlue.className = 'comment';
    }
    else{
    No10Answer0.className = 'correct';
    No10Answer1.className = 'after';
    No10Answer2.className = 'incorrect';
    No10CommentRed.className = 'comment';
}
}