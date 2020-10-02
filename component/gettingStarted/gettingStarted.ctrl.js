document.getElementById('quick-start').addEventListener('change', ev => {
    window.location.href = '{{base}}tutorial/' + ev.target.value;
})