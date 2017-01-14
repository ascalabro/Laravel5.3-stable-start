

// embed this script on a page and inject an iframe into the page like so
/*
 <script type="text/javascript" src="http://path-to-this-file.com/iframe-script.js"></script>
 */

function prepareFrame() {
    alert("thing");
// #extrapage > div.content
    var ifrm = document.createElement("iframe");
    ifrm.setAttribute("src", "http://127.0.0.1:8000/main/");
    ifrm.style.width = "640px";
    ifrm.style.height = "480px";
    document.body.appendChild(ifrm);
}

prepareFrame();