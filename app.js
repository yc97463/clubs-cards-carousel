var videoInfo;

$.ajax("clubs.json", {
    "error": () => {
        alert("Error");
    },
    "success": (data) => {
        data.forEach((current) => {
            $("#cards-pt").append(`
            <div class="item">
                <img src="https://img.imych.one/photos/images/images/${current.img.url}" class="cd_img">
                <h4>${current.title}</h4>
            </div>
            `)
        })
    }
})
