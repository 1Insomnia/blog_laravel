require("./bootstrap");

import Editor from "@toast-ui/editor";
import "@toast-ui/editor/dist/toastui-editor.css";

// Burger Menu : Mobile - Tablet
const burger = document.querySelector("#burger");
const navMobile = document.querySelector("#navMobile");

burger.addEventListener("click", (e) => {
    e.preventDefault();
    burger.classList.toggle("nav-is-open");
    burger.classList.toggle("no-hover");
    navMobile.classList.toggle("hidden");
});

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "500px",
    initialEditType: "markdown",
    placeholder: "Write your blog post...",
});

// Handle Post Body Input
const createPostBtn = document.querySelector("#createPostBtn");
const bodyInput = document.querySelector("#bodyInput");

createPostBtn.addEventListener("click", (e) => {
    const postContent = editor.getMarkdown();
    bodyInput.value = postContent;
});
