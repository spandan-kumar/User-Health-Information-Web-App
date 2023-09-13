document.getElementById("healthForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch("insert.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        this.reset();
    })
    .catch(error => console.error(error));
});
