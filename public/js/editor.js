import Editor from "@toast-ui/editor";
import "@toast-ui/editor/dist/toastui-editor.css";

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "500px",
    initialEditType: "markdown",
    placeholder: "Write your blog post...",
});

const createPostBtn = document.querySelector("#createPost");
const bodyInput = document.querySelector("#bodyInput");

createPostBtn.addEventListener("click", () => {
    e.preventDefault();
    const postContent = editor.getMarkdown();
    bodyInput.value = postContent;
    e.target.submit();
});
