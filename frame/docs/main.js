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
    let startIndent, pattern, regEx, content, lines, formatted;
    pres.forEach(pre => {
        formatted = '';
        content = pre.textContent.replace(/\n+/, "");
        startIndent = content.search(/\S/);

        lines = content.split("\n");
        pattern = `^\\\s{${startIndent}}`;
        regEx = new RegExp(pattern, "mg");
        lines.forEach(line => {
            formatted += (line.trim().length > 0 ? line.replace(regEx, "") : '') + "\n";
        });

        pre.textContent = formatted;
    });
}

// scroll up helper
let showToTopButton = false;
const body = document.querySelector('body');
const toTopButton = document.createElement('button');
toTopButton.innerText = '⬆️';
toTopButton.className = 'button is-rounded';
toTopButton.style.position = 'fixed';
toTopButton.style.bottom = '5px';
toTopButton.style.left = 'calc(100% - 90px)';
toTopButton.style.display = 'none';
toTopButton.addEventListener('click', ()=> window.scrollTo(0,0));
body.append(toTopButton);
window.addEventListener('scroll', function(e) {
    showToTopButton = window.scrollY > 20;
    toTopButton.style.display = showToTopButton ? 'block' : 'none';
});
