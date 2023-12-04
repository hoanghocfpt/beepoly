let slug = document.querySelector('#textSearch');
let link = document.querySelector('#linkSearch');

slug.addEventListener('input', function() {
    var url = 'http://localhost/beepoly/';
    var kq = url+'search/' + encodeURIComponent(slug.value);
    link.setAttribute('href', kq);
    console.log(kq);
});
// search pop up
console.log(slug);
const seacrhIcon = document.querySelector("#search-icon");
const searchPopup = document.querySelector(".search_popup");
seacrhIcon.addEventListener("click", () => {

    searchPopup.classList.add("active");
    document.body.style.overflow = "hidden";
});
if (searchPopup) {
    searchPopup.addEventListener("click", (e) => {
        if (e.target.classList.contains("search_popup")) {
            searchPopup.classList.remove("active");
            document.body.style.overflow = "auto";
        }
    });
}
