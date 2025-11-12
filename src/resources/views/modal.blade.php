<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <title>Document</title>
</head>
<body>
　　　　<!-- モーダルを開くボタン -->
    <button id="modalBtn">モーダルを開く</button>
    <!-- モーダル本体。デフォルトでは非表示にしている -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">✖︎</span>
            <p>モーダルを表示</p>
        </div>
    </div>
<script src="{{ asset('js/modal.js') }}"></script>
</body>
</html>