//GDrive API/script.js
function showOverlay(message, isSuccess = true) {
  const overlay = document.getElementById("overlay");
  const overlayMessage = document.getElementById("overlayMessage");

  overlayMessage.className = "overlay-content " + 
    (isSuccess ? "overlay-success" : "overlay-error");
  overlayMessage.innerHTML = message;

  overlay.style.display = "flex";

  setTimeout(() => {
    overlay.style.display = "none";
  }, 2500);
}

async function uploadFile() {
  const fileInput = document.getElementById("uploadFile").files[0];
  const uploadResult = document.getElementById("uploadResult");
  if (!fileInput) {
    showOverlay("⚠️ Please select a file first!", false);
    return;
  }
  if (fileInput.size > 10 * 1024 * 1024) {
    showOverlay("⚠️ File too large (max 10MB)!", false);
    return;
  }

  const progressContainer = document.querySelector(".progress-container");
  const progressBar = document.getElementById("progressBar");
  progressContainer.style.display = "block";
  progressBar.style.width = "0%";

  try {
    const formData = new FormData();
    formData.append("file", fileInput);

    const response = await fetch("http://localhost:3001/api/drive/upload", {
      method: "POST",
      body: formData,
    });
    const data = await response.json();

    progressContainer.style.display = "none";
    if (response.ok && data.success) {
      console.log("Upload response:", data);
      uploadResult.innerText = `File ID: ${data.id} (Name: ${data.name}, MIME: ${data.mimeType})`;
      showOverlay(`✅ Upload Successful!<br>File ID: ${data.id}<br>Name: ${data.name}<br>MIME: ${data.mimeType}`, true);
    } else {
      console.error("Upload failed:", data.error);
      showOverlay(`❌ Upload failed: ${data.error || "Unknown error"}`, false);
    }
  } catch (err) {
    console.error("Network error:", err.message);
    progressContainer.style.display = "none";
    showOverlay("❌ Network error during upload!", false);
  }
}

async function deleteFile() {
  const fileId = document.getElementById("deleteId").value.trim();
  if (!fileId) {
    showOverlay("⚠️ Please enter a file ID!", false);
    return;
  }

  try {
    const res = await fetch(`http://localhost:3001/api/drive/delete/${fileId}`, { method: "DELETE" });
    const data = await res.json();
    if (data.success) {
      document.getElementById("deleteResult").innerText = "File Deleted!";
      showOverlay("✅ File Deleted Successfully!", true);
    } else {
      showOverlay(`❌ Error deleting file: ${data.error || "Unknown error"}`, false);
    }
  } catch (err) {
    showOverlay(`❌ Network error: ${err.message}`, false);
  }
}

async function shareFile() {
  const fileId = document.getElementById("shareId").value.trim();
  if (!fileId) {
    showOverlay("⚠️ Please enter a file ID!", false);
    return;
  }

  try {
    const res = await fetch(`http://localhost:3001/api/drive/share/${fileId}`);
    const data = await res.json();
    if (res.ok && data.success) {
      document.getElementById("shareResult").innerHTML =
        `Name: ${data.name}<br>
         MIME: ${data.mimeType}<br>
         View: <a href="${data.webViewLink}" target="_blank">${data.webViewLink}</a>`;
      showOverlay(`✅ Public Link Generated!<br>Name: ${data.name}<br>MIME: ${data.mimeType}`, true);
    } else {
      showOverlay(`❌ Error generating link: ${data.error || "Unknown error"}`, false);
    }
  } catch (err) {
    showOverlay(`❌ Network error: ${err.message}`, false);
  }
}

async function generateDownloadLink() {
  const fileId = document.getElementById("downloadId").value.trim();
  if (!fileId) {
    showOverlay("⚠️ Please enter a file ID!", false);
    return;
  }

  try {
    const res = await fetch(`http://localhost:3001/api/drive/download/${fileId}`);
    const data = await res.json();
    if (res.ok && data.success) {
      document.getElementById("downloadResult").innerHTML =
        `Name: ${data.name}<br>
         MIME: ${data.mimeType}<br>
         Download: <a href="${data.webContentLink}" target="_blank">${data.webContentLink}</a>`;
      showOverlay(`✅ Download Link Generated!<br>Name: ${data.name}<br>MIME: ${data.mimeType}`, true);
    } else {
      showOverlay(`❌ Error generating download link: ${data.error || "Unknown error"}`, false);
    }
  } catch (err) {
    showOverlay(`❌ Network error: ${err.message}`, false);
  }
}

async function getFileMetadata() {
  const fileId = document.getElementById("metadataId").value.trim();
  if (!fileId) {
    showOverlay("⚠️ Please enter a file ID!", false);
    return;
  }

  try {
    const res = await fetch(`http://localhost:3001/api/drive/metadata/${fileId}`);
    const data = await res.json();
    if (res.ok && data.success) {
      document.getElementById("metadataResult").innerHTML =
        `ID: ${data.id}<br>
         Name: ${data.name}<br>
         MIME: ${data.mimeType}<br>
         Size: ${data.size ? (data.size / 1024 / 1024).toFixed(2) + ' MB' : 'N/A'}<br>
         Created: ${new Date(data.createdTime).toLocaleString()}<br>
         Modified: ${new Date(data.modifiedTime).toLocaleString()}`;
      showOverlay(`✅ Metadata Retrieved!<br>Name: ${data.name}<br>MIME: ${data.mimeType}`, true);
    } else {
      showOverlay(`❌ Error retrieving metadata: ${data.error || "Unknown error"}`, false);
    }
  } catch (err) {
    showOverlay(`❌ Network error: ${err.message}`, false);
  }
}