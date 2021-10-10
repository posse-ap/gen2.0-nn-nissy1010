//問題の配列を作る
//配列の先頭を正解にして、選択肢の配列を問題の配列に入れる
var question_list = new Array();
question_list.push(['たかなわ', 'こうわ', 'たかわ']);
question_list.push(['かめいど', 'かめと', 'かめど']);
question_list.push(['こうじまち', 'おかとまち', 'かゆまち']);
question_list.push(['おなりもん','おかどもん','ごせいもん']);
question_list.push(['とどりき','たたら','たたりき']);
question_list.push(['しゃくじい','せきこうい','いじい']);
question_list.push(['ぞうしき','ざっしき','ざっしょく']);
question_list.push(['おかちまち','みとちょう','ごしろちょう']);
question_list.push(['ししぼね','ろっこつ','しこね']);
question_list.push(['こぐれ','こばく','こしゃく']);

var Pictures =['<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png" alt="高輪">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png" alt="亀戸">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png" alt="麹町">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png" alt="御成門">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png" alt="等々力">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png" alt="石神井">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png" alt="雑色">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png" alt="御徒町">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png" alt="鹿骨">',
                '<img src="https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png" alt="小榑">',];

function check(question_id,option_id,valid_id){
    //選択肢をすべて押せなくする
    var buttons = document.getElementsByName('button_'+question_id);
    buttons.forEach(function(button){
    button.style.pointerEvents = 'none';
    });

    //選択したボタンを赤にした後、正解のボタンを青に
    var selection = document.getElementById('button_'+question_id+'_'+option_id);
    var valid = document.getElementById('button_'+question_id+'_'+valid_id);
    selection.className = 'invalid_button';
    valid.className = 'valid_button';

    //コメントを表示
    var comment_box = document.getElementById('comment_box_'+question_id);
    var comment = document.getElementById('comment_'+question_id);
    if(option_id === valid_id){
        comment.className = 'valid_comment';
        comment.innerHTML = '正解！';}
    else{
        comment.className = 'invalid_comment';
        comment.innerHTML = '不正解！';
        }
        comment_box.style.display = 'block';
    }

    //問題文のHTMLを作成
    function create_question(question_id,selection_list,valid_id){
    var content =   '<div class="quiz">' +
                    `<h1>${question_id}.この地名はなんて読む？</h1><br>` +
                    Pictures[question_id - 1] +
                    `<br><ul>` ;
    
    selection_list.forEach(function(selection,index){
        content +=  `<li><button id="button_${question_id}_${index+1}" name="button_${question_id}"
                    class="before" onclick="check(${question_id},${index+1},${valid_id})">`+selection+`</button></li>`
    })

        content += '</ul>' +
                    `<div id="comment_box_${question_id}" class="comment_box">` +
                    `<span id="comment_${question_id}"></span><br><br>` +
                    `<span>正解は「${selection_list[valid_id-1]}」です！</span>` +
                    `</div><br><br>`;

        document.getElementById("main").insertAdjacentHTML('beforeend',content);
    }

    //全体作成
    function create_HTML() {
        question_list.forEach(function (question, index) {

            answer = question[0];

            for (var i = question.length - 1; i > 0; i--) {
                var r = Math.floor(Math.random() * (i + 1));
                var tmp = question[i];
                question[i] = question[r];
                question[r] = tmp;
            }
            create_question(index + 1, question, question.indexOf(answer) + 1);
        });
    }
    
    //js読み込み時に発火
    window.onload = create_HTML();