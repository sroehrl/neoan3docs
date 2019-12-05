/*
* Documentation JS
*
* "as vanilla as it gets"
* */

// menu

let urlParts = window.location.href.split("/");
let endpoint = urlParts[urlParts.length - 2];
let activeId = document.querySelector(`#${endpoint}`);
if (activeId !== null) {
    activeId.classList.add("is-active")
}

// normalize code-blocks

let pres = document.querySelectorAll(".code-block");
if (pres.length) {
    let startIndent, regEx, content, lines, formatted;
    pres.forEach(pre => {
        formatted = '';
        content = pre.textContent.replace(/\n+/, "");
        startIndent = content.search(/\S/);
        lines = content.split("\n");
        regEx = new RegExp("^\\s{" + startIndent + "}", "mg");
        lines.forEach(line => {
            formatted += (line.trim().length > 0 ? line.replace(regEx, "") : '') + "\n";
        });
        pre.textContent = formatted;
    });
}

