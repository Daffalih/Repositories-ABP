fetch("ajax.php")
.then(res => res.json())
.then(data => {
    let html = "";

    data.forEach(item => {
        let list = "";
        item.details.forEach(d => {
            list += `<li>${d}</li>`;
        });

        html += `
            <div class="card">
                <h3>${item.title}</h3>
                <p class="company">${item.company}</p>
                <ul>${list}</ul>
            </div>
        `;
    });

    document.getElementById("experience").innerHTML = html;
});