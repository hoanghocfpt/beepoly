
    document.addEventListener("DOMContentLoaded", function () {
        var menuLinks = document.querySelectorAll(".menu-link");

        menuLinks.forEach(function (link) {
            link.addEventListener("click", function (event) {
                event.preventDefault();

                // Xóa lớp "active" khỏi tất cả các liên kết
                menuLinks.forEach(function (otherLink) {
                    otherLink.classList.remove("active");
                });

                // Thêm lớp "active" cho liên kết hiện tại
                link.classList.add("active");
            });
        });
    });
