import Editor from "@toast-ui/editor";
import "@toast-ui/editor/dist/toastui-editor.css";

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "500px",
    initialEditType: "markdown",
    placeholder: "Write your blog post...",
});

// Handle Post Body Input
const createPostBtn = document.querySelector("#createPostBtn");
const bodyInput = document.querySelector("#bodyInput");

if (bodyInput.value) {
    editor.setMarkdown(bodyInput.value);
}

createPostBtn.addEventListener("click", (e) => {
    const postContent = editor.getMarkdown();
    bodyInput.value = postContent;
});
