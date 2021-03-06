<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<style>
    .popup {
        position: fixed;
        overflow-y: scroll;
        overscroll-behavior: contain;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: none;
    }

    .popup-content {
        margin: 10% auto;
        width: 80%;
        max-width: 850px;
        padding: 30px;
        min-height: 80vh;
        background: rgba(255, 255, 255, .99);
        border-radius: 20px;
    }

    .popup {
        background: rgba(0, 0, 0, 0.7);
    }

    .popup-header {
        display: grid;
        grid-template-columns: 30fr 1fr;
    }

    .popup-header div {
        font-size: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .popup .close {
        position: relative;
        top: 0;
        right: 0;
        font-size: 30px;
        color: red;
    }

    .popup .close:hover {
        color: #06D85F;
    }
    @media (max-width: 991px) {
        .popup-content{
            max-width: 550px;
        }
    }
</style>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<a onclick="showModal('modal111');return false;">SHOW POPUP</a>

<div class="popup" id="modal111">
    <div class="popup-content">
        <div class="popup-header">
            <div>Here i am</div>
            <a class="close" onclick="clearModal('hrefpopup1')">&times;</a>
        </div>
        <div class="popup-body">
            <div style="text-align: center"><img style="width: 99%" src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt=""></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>

<script>
    function showModal(id) {
        document.querySelector('#' + id).style.display = 'block';
    }

    function clearModal() {
        document.querySelectorAll('.popup').forEach(function (item) {
            item.style.display = 'none';
        })
    }

    //close by esc
    window.addEventListener('keydown', function (event) {
        if (event.keyCode == 27) clearModal();
    })
    //close by click
    document.querySelector('.popup').addEventListener('click', function (item) {
        if (item.target.classList.contains('popup')) clearModal()
    })
</script>


</body>
</html>