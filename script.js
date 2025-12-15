document.getElementById("donorForm").addEventListener("submit", function(e){
    e.preventDefault();

    let formData = new FormData(this);

    fetch("ajax/donor_submit.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if(data.trim() === "success"){
            alert("✅ Donor added successfully!");
            this.reset();
            location.reload();
        }else{
            alert("❌ Error adding donor");
        }
    });
});
