let slug = document.querySelector('#textSearch');
let link = document.querySelector('#linkSearch');

slug.addEventListener('input', function() {
    link.setAttribute('href', './beepoly/search/' + encodeURIComponent(slug.value));
    console.log(slug.value);
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
