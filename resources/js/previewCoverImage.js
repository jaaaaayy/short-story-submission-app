export function previewCoverImage(event) {
    const input = event.target;
    const preview = document.getElementById("preview");
    const placeholder = document.getElementById("upload-placeholder");

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = "block";
            placeholder.style.display = "none";
        };

        reader.readAsDataURL(input.files[0]);
    }
}
