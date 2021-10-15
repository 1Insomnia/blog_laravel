require("./bootstrap");

import axios from "axios";

const get = (element) => document.querySelector(element);
const getAll = (element) => document.querySelectorAll(element);

// Burger Menu : Mobile - Tablet
const burger = get("#burger");
const navMobile = get("#navMobile");

burger.addEventListener("click", (e) => {
    e.preventDefault();
    burger.classList.toggle("nav-is-open");
    burger.classList.toggle("no-hover");
    navMobile.classList.toggle("hidden");
    document.body.classList.toggle("scroll-lock");
});

// Nav Mobile resize

window.addEventListener("resize", () => {
    if (window.innerWidth > 1024) {
        burger.classList.remove("nav-is-open");
        burger.classList.remove("no-hover");
        navMobile.classList.add("hidden");
    }
});

// Modal
const deletePostBtn = getAll("#deletePostBtn");
const modalWrapper = get("#modalWrapper");
const modal = get("#modal");
const modalBtnCancel = get("#modalBtnCancel");
const modalBtnConfirm = get("#modalBtnConfirm");
const formDeletePost = get("#formDeletePost");

if (deletePostBtn && modalWrapper) {
    let slug = "";
    const token = get('meta[name="csrf-token"]').content;

    deletePostBtn.forEach((button) => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            slug = e.target.dataset.slug;
            modalWrapper.classList.toggle("modal-disabled");
        });
    });

    modalWrapper.addEventListener("click", (e) => {
        modalWrapper.classList.add("modal-disabled");
    });

    modal.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
    });

    modalBtnCancel.addEventListener("click", (e) => {
        modalWrapper.classList.add("modal-disabled");
    });

    modalBtnConfirm.addEventListener("click", (e) => {
        axios
            .delete("/blog/post/" + slug, {
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            })
            .then((res) => {
                console.log(res);
                window.location.reload();
            })
            .catch((err) => console.error(err));
    });
}
