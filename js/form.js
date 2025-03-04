
const fileInput = document.getElementById("fileInput");
const fileLabel = document.querySelector(".file-label");
const fileIcon = document.querySelector(".file-icon");
const fileText = document.querySelector(".file-text");
const fileNameSpan = document.querySelector(".file-name");


fileInput.addEventListener("change", function () {
  
  if (fileInput.files.length > 0) {
    
    fileNameSpan.textContent = fileInput.files[0].name;
    fileText.style.display = "none";
    fileIcon.style.display = "none";
  } else {
 
    fileNameSpan.textContent = "";
  
    fileText.style.display = "inline";
  }
});