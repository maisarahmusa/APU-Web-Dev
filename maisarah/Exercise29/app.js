function confirmMessageBox() {
    let opt = window.confirm("do you want to continue?");
    if (opt) alert("OK");
    else alert("Cancel");
}

function promptMessageBox() {
    let name = prompt("Enter your name");
    alert(`How are you, ${name} ?`);
}