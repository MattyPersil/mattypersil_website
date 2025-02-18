matrixProperties = (() => {
    let canvas = document.getElementById("matrixCanvas");

    const ctx = canvas.getContext("2d");
    let container = document.getElementById("matrixContainer");
    canvas.width = container.offsetWidth;
    canvas.height = container.offsetHeight;


    const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*";
    const fontSize = 16;
    let columns = canvas.width / fontSize;
    let drops = Array(Math.floor(columns)).fill(1);

    return {
        getCanvas: () => canvas,
        setCanvasWidth: (w) => canvas.width = w,
        setCanvasHeight: (h) => canvas.height = h,
        getCtx: () => ctx,
        getContainer: () => container,
        setContainer: (c) => container = c,
        getColumns: () => columns,
        setColumns: (c) => columns = c,
        getDrops: () => drops,
        setDrops: (d) => drops = d,
        getFontSize: () => fontSize,
        getLetters: () => letters,
    };
})();


function startmatrixeffect(){
    function drawMatrix() {
        matrixProperties.getCtx().fillStyle = "rgba(0, 0, 0, 0.05)";
        matrixProperties.getCtx().fillRect(0, 0, matrixProperties.getCanvas().width, matrixProperties.getCanvas().height);
        matrixProperties.getCtx().fillStyle = "#fc49f3";
        matrixProperties.getCtx().font = `${matrixProperties.getFontSize()}px monospace`;

        for (let i = 0; i < matrixProperties.getDrops().length; i++) {
            const text = matrixProperties.getLetters()[Math.floor(Math.random() * matrixProperties.getLetters().length)];
            matrixProperties.getCtx().fillText(text, i * matrixProperties.getFontSize(),  matrixProperties.getDrops()[i] * matrixProperties.getFontSize());
            if ( matrixProperties.getDrops()[i] * matrixProperties.getFontSize() > matrixProperties.getCanvas().height && Math.random() > 0.975) {
                matrixProperties.getDrops()[i] = 0;
            }
            matrixProperties.getDrops()[i]++;
        }
    }
    setInterval(drawMatrix, 50);
}

startmatrixeffect();
window.addEventListener("resize", () => {
    matrixProperties.setContainer(document.getElementById("matrixContainer"));

    matrixProperties.setCanvasWidth(matrixProperties.getContainer().offsetWidth);
    matrixProperties.setCanvasHeight(matrixProperties.getContainer().offsetHeight);

    matrixProperties.setColumns( matrixProperties.getCanvas().width / matrixProperties.getFontSize());
    matrixProperties.setDrops(Array(Math.floor(matrixProperties.getColumns())).fill(1));
});

