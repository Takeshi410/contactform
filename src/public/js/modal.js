// 要素を取得
var modal = document.getElementById("myModal");
var btn = document.getElementById("modalBtn");
var span = document.getElementsByClassName("close")[0];

// ボタンをクリックするとモーダルを開く
btn.onclick = function() {
    modal.style.display = "block";
}

// <span> (x) をクリックするとモーダルを閉じる
span.onclick = function() {
    modal.style.display = "none";
}

// モーダルの外側をクリックすると閉じる
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}