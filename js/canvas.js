let mainCanvasOBJ = function (p) {
    var mode = "marker";
    var backgroundColor = 240;
    let mx, my;
    let sf = 1;

    p.setup = function () {
        p.createCanvas(1200, 1200);
        p.background(backgroundColor);
    };

    p.draw = function () {

        mx = p.mouseX;
        my = p.mouseY;               

        if (mode == "eraser") {
            p.stroke(240);
        }

        else if (mode == "marker") {
            r = document.getElementById("colorR").value
            g = document.getElementById("colorG").value
            b = document.getElementById("colorB").value
            p.stroke(r, g, b);
        }
        var ellW = document.getElementById("myRange").value;
        p.strokeWeight(ellW*sf);
        if (p.mouseIsPressed) {
            p.line(p.mouseX, p.mouseY, p.pmouseX, p.pmouseY);
        }

        p.translate(mx, my);
        p.scale(sf);
        p.translate(-mx, -my);
        p.translate(); 
    };

    p.clear_button = function () {
        p.background(backgroundColor);
    };

    p.small_canvas = function () {
        p.resizeCanvas(800, 800);
        p.clear_button();
    };

    p.medium_canvas = function () {
        p.resizeCanvas(1200, 1200);
        p.clear_button();
    };

    p.large_canvas = function () {
        p.resizeCanvas(1600, 1200);
        p.clear_button();
    };

    p.changeCanvasSize = function () {
        switch (document.getElementById("canvasSizeSelector").value) {
            case "small":
                p.small_canvas();
                break;
            case "medium":
                p.medium_canvas();
                break;
            case "large":
                p.large_canvas();
                break;
            default:
                p.small_canvas();
        }
    };

    p.selectMarker = function () {
        mode = "marker";
    };

    p.selectEraser = function () {
        mode = "eraser";
    };

}

let mainCanvas = new p5(mainCanvasOBJ, "mainCanvasContainer");