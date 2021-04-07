<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/nav.css">
    .
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.min.js" integrity="sha512-b/htz6gIyFi3dwSoZ0Uv3cuv3Ony7EeKkacgrcVg8CMzu90n777qveu0PBcbZUA7TzyENGtU+qZRuFAkfqgyoQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.js" integrity="sha512-cuCpFhuSthtmbmQ5JjvU7msRYynRI67jVHsQhTP8RY+H4BC9qa9kQJeHTomV9/QnOWJbDpLFKdbIHtqTomJJug==" crossorigin="anonymous"></script>
    <script src="/js/canvas.js"></script>
    <script src="/js/customColor.js"></script>
    <script src="/js/colorSelector.js"></script>
    <script src="/js/uploadWork.js"></script>
    <script src="/js/uploadFileDialogue.js"></script>

    <title>Portray - Home</title>

<body onload="colorSelector()">
    <?php include 'php/navbar.php'; ?>
    <div class="d-flex align-items-left flex-column flex-grow-1 text-white-50 rounded box-shadow mb-5 pt-3 pb-3" id="mainContent">
        <div class="d-flex flex-column flex-grow-1 text-white-50 rounded box-shadow mb-5 pt-3 pb-3" style="background-color: #7B9EBE;" id="toolbox">
            <input type="range" min="1" max="100" value="20" class="slider mx-1" id="myRange">
            <button type="button" class="btn btn-danger mx-1" onclick="mainCanvas.clear_button()">Clear</button>
            <select class="btn-secondary mx-1 rounded box-shadow" id="canvasSizeSelector" onchange="mainCanvas.changeCanvasSize()">
                <option value="small">Small</option>
                <option selected value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
            <button type="button" class="btn btn-secondary mx-1" onclick="mainCanvas.selectMarker()">Marker</button>
            <button type="button" class="btn btn-secondary mx-1" onclick="mainCanvas.selectHighlighter()">Highlighter</button>
            <button type="button" class="btn btn-secondary mx-1" onclick="mainCanvas.selectEraser()">Eraser</button>
            <button type="button" class="btn btn-secondary mx-1" onclick="mainCanvas.selectTextBox()">Text
                Box</button>


            <input id="UploadWork" type="file" style="display:none;" />
            <input type="button" id="choose_file" value="Choose File" onclick="showUploadDialogue();" class="btn btn-secondary mx-1" />
            <input type="button" id="upload_file" value="Upload File" onclick="uploadWork();" class="btn btn-secondary mx-1" disabled />

            <input id="SaveWork" type="submit" style="display:none;" />
            <input type="button" value="Save" onclick="mainCanvas.saveWorkLocal()" class="btn btn-secondary mx-1" />

            <table class="" id="colorsTable"></table>
            <div class="container d-flex flex-row flex-grow-1 p-1" id="customeColorContainer" style="max-width: 250px; ">
                <div class="container d-flex flex-column flex-grow-1">
                    <input type="range" min="1" max="255" value="20" class="slider mx-1" id="colorR">
                    <input type="range" min="1" max="255" value="20" class="slider mx-1" id="colorG">
                    <input type="range" min="1" max="255" value="20" class="slider mx-1" id="colorB">
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-right flex-row flex-grow-1">
        <div class="container mx-5" id="mainCanvasContainer">

        </div>

    </div>

</body>

</html>